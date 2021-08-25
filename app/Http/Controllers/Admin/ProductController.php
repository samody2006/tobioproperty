<?php

namespace App\Http\Controllers\Admin;
use Image;
use App\Models\Land;
use App\Models\House;
use App\Models\Product;
use App\Models\Apartment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function addHouseform(){
        return view('house.addhouse', array('user' => Auth::user()));
    }


    public function addHouse(Request $request){
        // dd($request);
        $request->validate([
            'name' => 'required|max:50|min:3',
            'type' => 'required',
            'amount' => 'required|regex:/^\d+(\.\d{1,2})?$/',
            'description' => 'required|min:100',
            'contactno' => 'required|regex:/^[0-9]{10}$/',
            'filename' => 'required',
            'filename.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:4096',
            'location' => 'required',
            'rooms' => 'required|integer',
            'toilet' => 'required|integer',
            'nschool' => 'required',
            'nmall' => 'required',
            'nbus' => 'required'
            
        ]);
        dd($request);
        if($request->hasfile('filename'))
         {

            foreach($request->file('filename') as $image)
            {
                $name= uniqid('real_') . '.' . $image->getClientOriginalExtension();
                //$image->move(public_path().'/uploads/product/house', $name);
                Image::make($image)->resize(1280,876)->save(\public_path('/uploads/product/house/' . $name));  
                $data[] = $name;  
            }
         }

        $product = new Product;
        $product->user_id = auth()->id();
        $product->name = request('name');
        $product->type = request('type');
        $product->amount = request('amount');
        $product->location = request('location');
        $product->description = request('description');
        $product->contactNo = request('contactno');
        $product->images =json_encode($data);
        // dd($product);
        $product->save();

        $house = new House;
        $house->product()->associate($product);
        $house->noOfRooms = request('rooms');
        $house->noOftoilets = request('toilet');
        $house->nearestSchool = request('nschool');
        $house->nearestMall = request('nmall');
        $house->nearestBusStop = request('nbus');
        $house->save();

        return back()->with('message', 'Your product has been successfully added!');

    }

    public function addLand(Request $request){

        $request->validate([
            'name' => 'required|max:30|min:3',
            'type' => 'required',
            'amount' => 'required|regex:/^\d+(\.\d{1,2})?$/',
            'location' => 'required',
            'description' => 'required|min:100',
            'contactno' => 'required|regex:/^[0-9]{10}$/',
            'filename' => 'required',
            'filename.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:4096',
            'size' => 'required|integer',
            'nschool' => 'required',
            'nmall' => 'required',
            'nbus' => 'required'
            
        ]);

        if($request->hasfile('filename'))
         {

            foreach($request->file('filename') as $image)
            {
                $name= uniqid('real_') . '.' . $image->getClientOriginalExtension();
                //$image->move(public_path().'/uploads/product/house', $name);
                Image::make($image)->resize(1280,876)->save(\public_path('/uploads/product/land/' . $name));  
                $data[] = $name;  
            }
         }

        $product = new Product;
        $product->user_id = auth()->id();
        $product->name = request('name');
        $product->type = request('type');
        $product->amount = request('amount');
        $product->location = request('location');
        $product->description = request('description');
        $product->contactNo = request('contactno');
        $product->images =json_encode($data);
        $product->save();

        $land = new Land;
        $land->product()->associate($product);
        $land->size = request('size');
        $land->nearestSchool = request('nschool');
        $land->nearestMall = request('nmall');
        $land->nearestBusStop = request('nbus');
        $land->save();

        return back()->with('message', 'Your product has been successfully added!');
        

    }

   
    public function addApartment(Request $request){

        $request->validate([
            'name' => 'required|max:30|min:3',
            'type' => 'required',
            'amount' => 'required|regex:/^\d+(\.\d{1,2})?$/',
            'location' => 'required',
            'description' => 'required|min:100',
            'contactno' => 'required|regex:/^[0-9]{10}$/',
            'filename' => 'required',
            'filename.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:4096',
            'rooms' => 'required',
            'toilet' => 'required',
            'nschool' => 'required',
            'nmall' => 'required',
            'nbus' => 'required'
            
        ]);

        if($request->hasfile('filename'))
         {

            foreach($request->file('filename') as $image)
            {
                $name= uniqid('real_') . '.' . $image->getClientOriginalExtension();
                //$image->move(public_path().'/uploads/product/house', $name);
                Image::make($image)->resize(1280,876)->save(\public_path('/uploads/product/apartment/' . $name));  
                $data[] = $name;  
            }
         }

        $product = new Product;
        $product->user_id = auth()->id();
        $product->name = request('name');
        $product->type = request('type');
        $product->amount = request('amount');
        $product->location = request('location');
        $product->description = request('description');
        $product->contactNo = request('contactno');
        $product->images =json_encode($data);
        $product->save();

        $apartment = new Apartment();
        $apartment->product()->associate($product);
        $apartment->noOfRooms = request('rooms');
        $apartment->noOftoilets = request('toilet');;
        $apartment->size = request('size');
        $apartment->nearestSchool = request('nschool');
        $apartment->nearestMall = request('nmall');
        $apartment->nearestBusStop = request('nbus');
        $apartment->save();

        return back()->with('message', 'Your product has been successfully added!');

    }
    public function showHouse(){
       
        $houses = House::orderBy('id', 'desc')->paginate(3);
           

        return view('house.house',compact('houses'));      

        }
        public function showland(){
       
            $lands = Land::orderBy('id', 'desc')->paginate(3);
               
    
            return view('land.land',compact('lands'));      
    
            }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
