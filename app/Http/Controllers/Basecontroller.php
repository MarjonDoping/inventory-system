<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\Post;
use Illuminate\Support\Facades\Validator;

class Basecontroller extends Controller
{
    public function home()
    {

        $data['page_title'] = "home";
        $data['home'] =  Page::where('page_title', 'home')->get();
        $data['post'] = Post::where('page_title', 'home')->get();

        return view('home', $data);
    }

    public function services()
    {
        $data['page_title'] = "service";

        return view('service', $data);
    }

    public function company()
    {
        $data['page_title'] = "news";
        $data['company'] = Page::where('page_title', 'our_company')->get();
        $data['post'] = Post::where('page_title', 'home')->get();
        $data['feedbacks'] = Feedback::orderBy('feedback_id', 'desc')->get();


        return view('company', $data);
    }

    public function feedback(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'message'  => 'required',
        ]);

        if ($validator->fails()) {
            return  back()->withErrors($validator)->withInput();
        } else {
            $data = array(
                'name'  => $request->name,
                'message'  => $request->message,
            );

            $feedback = Feedback::create($data);
            if ($feedback) {
                return redirect()->route('announcement.show')->with(['success' => 'Inserted Successfully!']);
            } else {
                return redirect()->route('announcement.show')->with(['error' => 'Failed to insert category. Please try again.']);
            }
        }

    }

    public function contact()
    {
        $data['page_title'] = "contact";
        $data['contact'] = Page::where('page_title', 'contact')->get();
        $data['post'] = Post::where('page_title', 'contact')->get();

        return view('contact', $data);
    }


    public function about()
    {
        $data['page_title'] = "about";
        $data['our_company'] = Page::where('page_title', 'our_company')->get();
        $data['post'] = Post::where('page_title', 'home')->get();

        return view('about', $data);
    }
}
