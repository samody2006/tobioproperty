<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('frontend.home');
    }

    
    //Blog
    public function showBlog(){
       
        $articles = Article::orderBy('id', 'desc');
                           

        if($month = request('month')){

            $articles->whereMonth('created_at', Carbon::parse($month)->month);

        }

        if($year = request('year')){

            $articles->whereYear('created_at', $year);
            
        }

        if($category = request('category')){

            $articles->where('category', $category);            
        }

        $articles = $articles->paginate(3);

        $archives = Article::archive();

        return view('blog.blog',compact('articles','archives'));
    }
    
    public function showBlogPost(Article $article){

        $archives = Article::archive();
        return view('blog.viewarticle',compact('article','archives'));
    }
        // ABOUT PAGE
        public function about()
        {
            return view('frontend.about');
        }

           // CONATCT PAGE
           public function contact()
           {
               return view('frontend.contact');
           }
           public function properties()
           {
               // $cities     = Property::select('city','city_slug')->distinct('city_slug')->get();
               // $properties = Property::latest()->with('rating')->withCount('comments')->paginate(12);
       
               return view('frontend.properties.property');
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
}
