<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\Post;
use App\Models\Faculty;
use App\Models\Site;

class HomeController extends Controller
{
  public function index()
  {
    return view('user.index');
  }

  public function updates()
  {
    return view('updates');
  }

  public function details()
  {
    $company = Page::where('page_title', 'our_company')->get();
    $post = Post::where('page_title', 'home')->get();
    return view('details', ['company' => $company, 'post' => $post]);
  }

  public function details1()
  {
    $company = Page::where('page_title', 'our_company')->get();
    $post = Post::where('page_title', 'home')->get();
    return view('details1', ['company' => $company, 'post' => $post]);
  }

  public function details2()
  {
    $company = Page::where('page_title', 'our_company')->get();
    $post = Post::where('page_title', 'home')->get();
    return view('details2', ['company' => $company, 'post' => $post]);
  }

  public function details3()
  {
    $company = Page::where('page_title', 'our_company')->get();
    $post = Post::where('page_title', 'home')->get();
    return view('details3', ['company' => $company, 'post' => $post]);
  }

  public function details4()
  {
    $company = Page::where('page_title', 'our_company')->get();
    $post = Post::where('page_title', 'home')->get();
    return view('details4', ['company' => $company, 'post' => $post]);
  }

  public function detail()
  {
    $company = Page::where('page_title', 'our_company')->get();
    $post = Post::where('page_title', 'home')->get();
    return view('detail', ['company' => $company, 'post' => $post]);
  }

  public function teams()
  {
    $company = Page::where('page_title', 'our_company')->get();
    $post = Site::where('page_title', 'site')->get();
    return view('teams', ['company' => $company, 'post' => $post]);
  }
  public function board()
  {
    $company = Page::where('page_title', 'our_company')->get();
    $post = Faculty::where('page_title', 'faculty')->get();
    return view('board', ['company' => $company, 'post' => $post]);
  }
  public function courses()
  {
    $company = Page::where('page_title', 'our_company')->get();
    $post = Post::where('page_title', 'home')->get();
    return view('courses', ['company' => $company, 'post' => $post]);
  }

  public function faculty()
  {
    $faculty = Page::where('page_title', 'faculty')->get();
    $postfaculty = Faculty::where('page_title', 'faculty')->get();
    return view('faculty', ['faculty' => $faculty, 'faculty' => $postfaculty]);
  }
}
