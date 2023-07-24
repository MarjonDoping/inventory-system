<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Validator;
use File;

class Postcontroller extends Controller
{
    public function create(Request $request)
    {
        $data['post'] = new Post();
        $data['page_title'] = 'post';

        if ($request->post_id) {
            $id = $request->post_id;
            $data['post'] = Post::where('id', $id)->first();
        }

        return view('admin.post.addPost', $data);
    }

    public function show()
    {
        $data['posts'] = Post::paginate(500);
        $data['page_title'] = 'post';
        return view('admin.post.showpost', $data);
    }

    public function store(Request $request)
    {
        $id = '';
        if ($request->post_id) {
            $id = $request->post_id;
        }
        $validator = Validator::make($request->all(), [
            'title'  => 'required',
            'section_title'  => 'required',
        ]);
        if ($validator->fails()) {
            $success = 0;
            return  back()->withErrors($validator)->withInput();
        } else {
            $filename = '';
            
            if ($request->image) {
                $filename = $this->fileUpload($request, 'image', '');
            } else {
                if ($request->old_image) {
                    $filename = $request->old_image;
                }
            }

            $data = array(
                'page_title'  => $request->page_title,
                'section_title' => $request->section_title,
                'title' => $request->title,
                'description' => $request->description,
                'image' => $filename,
            );

            $post = Post::updateOrCreate(['id' => $id], $data);
            if ($post) {
                if ($id)
                    return redirect()->route('post-show')->with(['message' => 'Post Updated']);
                else
                    return redirect()->route('post-show')->with(['message' => 'Post inserted']);
            } else {
                return back()->with(['message' => 'Something Wrong']);
            }
        }
    }

    public function delete(Request $request)
    {
        $id  = $request->id;
        $img = $request->image;
        if ($id) {
            if (File::exists(public_path('uploads/' . $img))) {
                File::delete(public_path('uploads/' . $img));

                $res = Post::find($id)->delete();
                if ($res) {
                    echo json_encode('Successfully deleted');
                } else {
                    echo json_encode("Something went wrong");
                }
            } else {
                echo json_encode("File not exists.");
            }
        } else {
            echo json_encode("Post Id Not found");
        }
    }

    public function endSession(Request $request)
    {

        $request->session()->pull('user', 'default');
        $request->session()->pull('usertype', 'default');
        $request->session()->pull('user_id', 'default');

        $request->session()->forget('user');
        $request->session()->forget('usertype');
        $request->session()->forget('user_id');

        $request->session()->flush();

        return redirect('admin');
    }
}
