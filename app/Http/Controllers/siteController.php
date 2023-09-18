<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Site;
use Illuminate\Support\Facades\Validator;
use File;

class siteController extends Controller
{
    public function create(Request $request){
		$data['site'] = new Site();
        $data['page_title'] = 'content';

		if($request->post_id){
			$id = $request->post_id;
			$data['site'] = Site::where('id',$id)->first();
		}

		return view('admin.site.addsite',$data);
	}

	public function show(){
		$data['sites'] = Site::paginate(500);
        $data['page_title'] = 'content';
		return view('admin.site.showsite', $data);
	}

	public function store(Request $request){
		$id = '';
		if($request->post_id){
			$id = $request->post_id;
		}
		$validator = Validator::make($request->all(), [
            'title'  => 'required',
            'section_title'  => 'required',
    ]);
    if($validator->fails()){
        $success=0;
        return  back()->withErrors($validator)->withInput();
    }else{
    	$filename = '';
    	if($request->image){
    			$filename = $this->fileUpload($request,'image','');
    	}else{
    		if($request->old_image){
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
    	$site= Site::updateOrCreate(['id'=>$id],$data);
    	if($site){
    		if($id)
          return redirect()->route('site-show')->with(['message'=>'SITE Successfully Updated']);
        else
        	return redirect()->route('site-show')->with(['message'=>'SITE Successfully inserted']);
      }else{
          return back()->with(['message'=>'Something Wrong']);
      }
    }
	}

	public function delete(Request $request){
        $id  = $request->id;
        $img = $request->image; 
        if($id){
            if(File::exists(public_path('uploads/'.$img))) {
                File::delete(public_path('uploads/'.$img));
                
                $res = Site::find($id)->delete();
                if($res){
                    echo json_encode('Successfully deleted');
                }else{
                    echo json_encode("Something went wrong");
                }            
            }else{
                echo json_encode("File not exists.");
            }
        }else{
           echo json_encode("Post Id Not found");
        }
    }
}
