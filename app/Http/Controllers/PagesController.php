<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
     // CONATCT PAGE
        public function contact()
        {
            return view('frontend.contact');
        }

     // ABOUT PAGE
      public function about()
      {
          return view('frontend.about');
      }

    // BLOG PAGE
    public function blog()
    {
        // $month = request('month');
        // $year  = request('year');

        // $posts = Post::latest()->withCount('comments')
        //                         ->when($month, function ($query, $month) {
        //                             return $query->whereMonth('created_at', Carbon::parse($month)->month);
        //                         })
        //                         ->when($year, function ($query, $year) {
        //                             return $query->whereYear('created_at', $year);
        //                         })
        //                         ->where('status',1)
        //                         ->paginate(10);

        return view('frontend.blog.index');
    }
// BLOG PROPERTIES
    
        public function properties()
        {
            // $cities     = Property::select('city','city_slug')->distinct('city_slug')->get();
            // $properties = Property::latest()->with('rating')->withCount('comments')->paginate(12);
    
            return view('frontend.properties.property');
        }
}
