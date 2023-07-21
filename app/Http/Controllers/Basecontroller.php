<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\Post;


class Basecontroller extends Controller
{
    public function home()
    {
        $home = Page::where('page_title','home')->get();
        $post = Post::where('page_title','home')->get();
    	return view('home',['home'=>$home,'post'=>$post]);
    }

    public function services()
    {
    	 return view('service');
    }

    public function company()
    {
        $company = Page::where('page_title','our_company')->get();
        $post = Post::where('page_title','home')->get();
    	return view('company',['company'=>$company,'post'=>$post]);
    }

    public function contact()
    {
        $contact = Page::where('page_title','contact')->get();
        $post = Post::where('page_title','contact')->get();
    	return view('contact',['contact'=>$contact,'post'=>$post]);
    }

 
    public function about()
    {
        $our_company = Page::where('page_title','our_company')->get();
        $post = Post::where('page_title','home')->get();
    	return view('about',['our_company'=>$our_company,'post'=>$post]);
    }

    
    
}
