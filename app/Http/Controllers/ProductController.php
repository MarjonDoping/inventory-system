<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    //
    public function show()
    {
        $data['products'] = Product::join('categories', 'categories.cat_id', '=', 'products.cat_id')->get();
        $data['page_title'] = 'products';
        return view('admin.products.products-show', $data);
    }

    public function add(Request $request)
    {
        $data['products'] = new Product();

        $categories = Category::all();
        foreach ($categories as $category) {
            $cat[$category->cat_id] = $category->cat_name;
        }
        $data['categories'] = $cat;

        $data['page_title'] = 'products';

        if ($request->prod_id) {
            $id = $request->prod_id;
            $data['products'] = Product::where('prod_id', $id)->first();
        }
        return view('admin.products.products-add', $data);
    }

    public function edit(Request $request)
    {
        $data['products'] = new Product();
        $data['page_title'] = 'products';

        $categories = Category::all();
        foreach ($categories as $category) {
            $cat[$category->cat_id] = $category->cat_name;
        }
        $data['categories'] = $cat;

        if ($request->prod_id) {
            $id = $request->prod_id;
            $data['products'] = Product::where('prod_id', $id)->first();
        }
        return view('admin.products.products-edit', $data);
    }

    public function create(Request $request)
    {

        // dd($request->all());
        $id = '';
        if ($request->prod_id) {
            $id = $request->prod_id;
        }
        $validator = Validator::make($request->all(), [
            'cat_id'  => 'required',
            'prod_name'  => 'required',
            'prod_price'  => 'required',
            'stock'  => 'required',
        ]);

        if ($validator->fails()) {
            return  back()->withErrors($validator)->withInput();
        } else {


            $filename = '';

            if ($request->prod_image) {
                $filename = $this->fileUpload($request, 'prod_image', '');
            } else {
                if ($request->old_image) {
                    $filename = $request->old_image;
                }
            }

            if($filename == ''){
                return  back()->withErrors(["prod_image" => array(0 => "The image field is required.")]);
            }

            $data = array(
                'cat_id'  => $request->cat_id,
                'prod_name' => $request->prod_name,
                'prod_price' => $request->prod_price,
                'stock' => $request->stock,
                'prod_image' => $filename,
            );




            $products = Product::updateOrCreate(['prod_id' => $id], $data);

            if ($products) {
                $message = '';

                if ($id)
                    $message = "Updated";
                else
                    $message = "Inserted";

                return redirect()->route('products-show')->with(['success' => $message . ' Successfully!']);
            } else {
                return redirect()->route('products-show')->with(['error' => 'Failed to insert the product. Please try again.']);
            }
        }
    }



    public function delete(Request $request)
    {
        $id  = $request->prod_id;

        if ($id) {
            $res = Product::find($id)->delete();
            if ($res) {
                echo json_encode('Deleted successfully');
            } else {
                echo json_encode("Something went wrong");
            }
        } else {
            echo json_encode("Product ID Not found");
        }
    }
}
