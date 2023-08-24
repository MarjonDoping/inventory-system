<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\admin;
use Session;
use Alert;
use App\Models\Order;
use App\Models\Product;
use App\Models\Transaction;
use App\Models\UserOrder;

//use Auth;
// use Illuminate\Support\Facades\Auth;

class Admincontroller extends Controller
{
  public function index()
  {
    return view('admin.login');
  }

  public function makeLogin(Request $request)
  {
    $validator = Validator::make($request->all(), [
      'password' => 'required',
      'username' => 'required',
    ]);
    if ($validator->fails()) {
      return  back()
        ->withErrors($validator)
        ->withInput();
    }

    $admin = admin::where('username', $request->username)->where('password', $request->password)->get()->toArray();
    if ($admin) {
      return redirect('dashboard');
    } else {
      return back()->withErrors(['message' => 'Invalid Login Credentials']);
    }
    // $data = array(
    //               'username' => $request->username,
    //               'password' => $request->password
    //           );
    // if (Auth::guard('admin')->attempt($data)) {
    //     return redirect('dashboard');
    // }else{
    //   return back()->withErrors(['message'=>'invalid email or password']);
    // }
  }
  public function dashboard()
  {

    $data['totalearnings'] = Transaction::sum('totalprice');
    $data['transactions'] = Transaction::paginate(500);

    $data['totalorders'] = Transaction::count();
    $data['totalproducts'] = Product::count();


    $prod = [
      ['Product', 'Item sold']
    ];

    $prod1 = [
      ['Product', 'Stocks']
    ];

    $products = Product::all();

    $prods = Product::select('prod_name', 'stock')->join('categories', 'categories.cat_id', '=', 'products.cat_id')->get();



    foreach ($products as $product) {
      $qty = Transaction::join('userorders', 'userorders.order_id', '=', 'transactions.order_id')->where('prod_id', '=', $product->prod_id)->sum('quantity');

      $newarr[0] = $product->prod_name;
      $newarr[1] = $qty;

      array_push($prod, $newarr);
    }

    foreach ($prods as $prod2) {

      $newarr1[0] = $prod2->prod_name;
      $newarr1[1] = $prod2->stock;

      array_push($prod1, $newarr1);
    }

    $data['products'] = $prod;

    $data['prods'] = $prod1;


    $data['page_title'] = 'dashboard';



    return view('admin.dashboard', $data);
  }
}
