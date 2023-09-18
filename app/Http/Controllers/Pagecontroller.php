<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;

class Pagecontroller extends Controller
{
    public function AddPage(Request $request){
        
        $data['page'] = Page::where('page_title','home')->get();
        $data['page_title'] = 'content';

        $numrow = count($data['page']);
        if($numrow > 0 ){
            return view('admin.home.addpage', $data);
        }else{
            $data['page'] = new Page();
            return view('admin.home.addpage', $data);
        }
    }

    public function company(Request $request){
        $data['page'] = Page::where('page_title','our_company')->get();
        $data['total_row'] = count($data['page']);
        $data['page_title'] = 'content';

        return view('admin.company.ourCompany', $data);
        
    }
    public function contact(Request $request){

        $data['page'] = Page::where('page_title','contact')->get();
        $data['total_row'] = count($data['page']);
        $data['page_title'] = 'content';

        return view('admin.contact.ContactPost', $data);
        
    }

    public function CreatePage(Request $request){
        $pagevalues['title'] = $request->title;
        $datavalues = array();
        if($request->txt_name){
            $field =  $request->txt_name;
            if($field){
                for($j=0;$j<count($field);$j++){
                    $text = $field[$j];
                    $tx = $request->$text;
                    $field_name = Page::where(['section_title'=>$text,'page_title'=>$pagevalues['title']])->get();
                    if(count($field_name)>0){
                        $datavalues[$text] = $tx;
                    }else{
                        $newvalues[$text] = $tx;
                    }
                }
            }
        }
        if($request->image){
            $field =  $request->image;
            if($field){
                for($j=0;$j<count($field);$j++){
                    $image_name = $field[$j];
                    if($request->$image_name){
                        $filename = $this->fileUpload($request,$image_name,'');
                        
                        $field_name = Page::where(['section_title'=>$image_name,'page_title'=>$pagevalues['title']])->get();
                        if(count($field_name)>0){
                            $datavalues[$image_name] = $filename;
                        }else{
                            $newvalues[$image_name] = $filename;
                        }
                    }
                }
            }
        }
        if(!empty($datavalues)){
            foreach($datavalues as $key => $value){
                $where = array('section_title'=>$key,'page_title'=>$pagevalues['title']);
                $res =  Page::where($where)->update(array('data'=>$value));
                if($res){
                    $success = 1;
                }
            }
        }

        if(!empty($newvalues)){
            foreach($newvalues as $key => $value){
                $data = array(
                        'page_title' => $pagevalues['title'], 
                        'section_title' => $key, 
                        'data' => $newvalues[$key], 
                        );
                $res =  Page::create($data);
            }
        }

        if($pagevalues['title']=='home')
            return redirect('/page-add');
        else
            return redirect('/company-page-add');
        
    }
}
