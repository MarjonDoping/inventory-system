<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Faculty;
use Illuminate\Support\Facades\Validator;
use File;


class FacultyController extends Controller
{
    public function create(Request $request)
    {
        $data['faculty'] = new Faculty();
        $data['page_title'] = 'devs';

        if ($request->post_id) {
            $id = $request->post_id;
            $data['faculty'] = Faculty::where('id', $id)->first();
        }

        return view('admin.faculty.addFaculty', $data);
    }

    public function show()
    {
        $data['faculties'] = Faculty::paginate(500);
        $data['page_title'] = 'content';

        return view('admin.faculty.showfaculty', $data);
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
            $faculty = Faculty::updateOrCreate(['id' => $id], $data);
            if ($faculty) {
                if ($id)
                    return redirect()->route('faculty-show')->with(['message' => 'Faculty Successfully Updated']);
                else
                    return redirect()->route('faculty-show')->with(['message' => 'Faculty Successfully inserted']);
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

                $res = Faculty::find($id)->delete();
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
}
