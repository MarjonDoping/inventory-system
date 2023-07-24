<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    //

    public function show()
    {
        $data['categories'] = Category::paginate(500);
        $data['page_title'] = 'category';
        return view('admin.category.category-show', $data);
    }

    public function add(Request $request)
    {
        $data['category'] = new Category();
        $data['page_title'] = 'category';

		if($request->cat_id){
			$id = $request->cat_id;
			$data['category'] = Category::where('cat_id',$id)->first();
		}
        return view('admin.category.category-add', $data);
    }

    public function edit(Request $request)
    {
        $data['category'] = new Category();
        $data['page_title'] = 'category';

		if($request->cat_id){
			$id = $request->cat_id;
			$data['category'] = Category::where('cat_id',$id)->first();
		}
        return view('admin.category.category-edit', $data);
    }

    public function create(Request $request)
    {

        $id = '';
        if ($request->cat_id) {
            $id = $request->cat_id;
        }

        $validator = Validator::make($request->all(), [
            'cat_name'  => 'required',
        ]);

        if ($validator->fails()) {
            return  back()->withErrors($validator)->withInput();
        } else {
            $data = array(
                'cat_name'  => $request->cat_name,
            );

            $post = Category::updateOrCreate(['cat_id' => $id], $data);

            if ($post) {
                $message = '';

                if ($id)
                    $message = "Updated";
                else
                    $message = "Inserted";

                return redirect()->route('category-show')->with(['success' => $message . ' Successfully!']);

            } else {
                return redirect()->route('category-show')->with(['error' => 'Failed to insert category. Please try again.']);
            }
        }
    }

    

    public function delete(Request $request)
    {
        $id  = $request->cat_id;

        if ($id) {
            $res = Category::find($id)->delete();
            if ($res) {
                echo json_encode('Deleted successfully');
            } else {
                echo json_encode("Something went wrong");
            }
        } else {
            echo json_encode("Category ID Not found");
        }
    }
}
