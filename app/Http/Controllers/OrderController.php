<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Models\Transaction;
use App\Models\UserOrder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class OrderController extends Controller
{
    //

    public function show()
    {
        $data['orders'] = Order::paginate(500);
        $data['order_id'] = Order::orderBy('order_id', 'DESC')->where('status','=', 'PENDING')->first();
        $data['tbl_userorders'] = UserOrder::paginate(500);
        $data['transactions'] = Transaction::paginate(500);

        $data['page_title'] = 'orders';


        if(!$data['order_id']){
            $add = Order::create([]);
            $data['order_id'] = $add->order_id;
        }else{
            $data['order_id'] = $data['order_id']->order_id;
        }

        $data['userorders'] = UserOrder::join('products', 'products.prod_id', '=', 'userorders.prod_id')->where('order_id', '=', $data['order_id'])->get();


        return view('admin.orders.orders-show', $data);
    }

    public function add(Request $request)
    {
        $order_id = $request->order_id;

        $products = Product::where('stock', '>=', '1')->get();
        foreach ($products as $product) {
            $prod[$product->prod_id] = $product->prod_name;
        }
        $data['products'] = $prod;
        $data['order_id'] = $order_id;

        $data['page_title'] = 'orders';

        return view('admin.orders.orders-add', $data);
    }

    public function edit(Request $request)
    {
        // $data['products'] = new Product();
        // $data['page_title'] = 'products';

        // $categories = Category::all();
        // foreach ($categories as $category) {
        //     $cat[$category->cat_id] = $category->cat_name;
        // }
        // $data['categories'] = $cat;

        // if ($request->prod_id) {
        //     $id = $request->prod_id;
        //     $data['products'] = Product::where('prod_id', $id)->first();
        // }
        // return view('admin.products.products-edit', $data);
    }

    public function create(Request $request)
    {
        $order_id = $request->order_id;

        $validator = Validator::make($request->all(), [
            'prod_id'  => 'required',
            'quantity'  => 'required',
        ]);

        if ($validator->fails()) {
            return  back()->withErrors($validator)->withInput();
        } else {


            $userorder = UserOrder::where([['order_id', '=', $order_id], ['prod_id', '=', $request->prod_id]])->first();

            if($userorder){

                
                $toadd = 0;
                $product = Product::where('prod_id', '=', $request->prod_id)->first();
                $stock = $product->stock;
                $toadd = $userorder->quantity + $request->quantity;
                if($userorder->quantity >= $stock){
                    return redirect()->route('orders-show')->with(['error' => 'Failed to insert the product. Please try again.']);
                }
                if($toadd>=$stock){
                    $toadd = $stock;
                }

                

                $update = UserOrder::where([['order_id', '=', $order_id], ['prod_id', '=', $request->prod_id]])->update(['quantity' => $toadd]);

                if($update){
                    if ($update) {
                        return redirect()->route('orders-show')->with(['success' => 'Added Successfully!']);
        
                    } else {
                        return redirect()->route('orders-show')->with(['error' => 'Failed to insert the product. Please try again.']);
                    }
                }
            }else{
                
                $data = array(
                    'order_id'  => $request->order_id,
                    'prod_id' => $request->prod_id,
                    'quantity' => $request->quantity
                );
    
                $userorders = UserOrder::create($data);

                if ($userorders) {
                    return redirect()->route('orders-show')->with(['success' => 'Added Successfully!']);
    
                } else {
                    return redirect()->route('orders-show')->with(['error' => 'Failed to insert the product. Please try again.']);
                }

            }

            

            
        }
    }



    public function delete(Request $request)
    {
        // $id  = $request->prod_id;

        // if ($id) {
        //     $res = Product::find($id)->delete();
        //     if ($res) {
        //         echo json_encode('Deleted successfully');
        //     } else {
        //         echo json_encode("Something went wrong");
        //     }
        // } else {
        //     echo json_encode("Product ID Not found");
        // }
    }

    public function deleteUserOrder(Request $request){
        $userorder_id = $request->userorder_id;
        $userorder = UserOrder::where('userorders_id', $userorder_id)->first();
        if($userorder){
            UserOrder::where('userorders_id', $userorder_id)->delete();
            return redirect()->route('orders-show');
        }else{
            return  back();
        }
    }

    
    public function updateqty(Request $request){
        $userorder_id = $request->userorder_id;
        $qty = $request->qty;

        $userorder = UserOrder::where('userorders_id', $userorder_id)->first();
        if($userorder){
            UserOrder::where('userorders_id', $userorder_id)->update(['quantity'=> $qty]);
            echo json_encode((int)$userorder_id);
        }else{
            return  back();
        }
    }

    public function getSum(Request $request){
        $order_id = $request->order_id;
        $userorders = UserOrder::join('products', 'products.prod_id', '=', 'userorders.prod_id')->where('userorders.order_id','=', $order_id)->get();

        
        if($userorders){
            (float)$sum = 0;
            foreach ($userorders as $userorder) {
                $sum += $userorder->prod_price * $userorder->quantity;
            }
            echo json_encode((float)$sum);
        }else{
            return  back();
        }
    }

    public function checkout(Request $request){
        $order_id = $request->order_id;

        $orders = Order::where('order_id', $order_id)->first();
        if($orders){
            $userorders = UserOrder::join('products', 'products.prod_id', '=', 'userorders.prod_id')->where('userorders.order_id','=', $order_id)->get();
            (float)$sum = 0;
            foreach ($userorders as $userorder) {
                $sum += $userorder->prod_price * $userorder->quantity;
            }
            $data['sum'] = $sum;
            $data['orders'] = $orders;
            $data['userorders'] = $userorders;
            $data['order_id'] = $order_id;
            $data['page_title'] = 'orders';


            return view('admin.orders.orders-checkout', $data);

        }else{
            return  back();
        }
    }

    public function placeorder(Request $request){

        $order_id = $request->order_id;
        $totalprice = $request->totalprice;
        $customer_name = $request->customer_name;

        $data = array(
            'order_id' => $order_id,
            'totalprice' => $totalprice,
            'customer_name' => $customer_name,
            'date' => date('Y-m-d H:i:s')
        );


        $trans = Transaction::create($data);

        if($trans){
            $userorders = UserOrder::join('products', 'products.prod_id', '=', 'userorders.prod_id')->where('userorders.order_id','=', $order_id)->get();
            
            foreach ($userorders as $userorder) {
                $quantity = $userorder->quantity;
                $prod_id = $userorder->prod_id;
                $newStock = $userorder->stock - $quantity;
                Product::where('prod_id', $prod_id)->update(['stock' => $newStock]);
            }
            $order = Order::where('order_id', $order_id)->update(['status'=>'COMPLETED']);
            return redirect()->route('orders-vieworder', $order_id);
        }else{
            return  back()->withErrors('Something went wrong')->withInput();
        }
        
    }

    public function viewOrder(Request $request){

        $order_id = $request->order_id;

        $orders = Order::where('order_id', $order_id)->first();
        if($orders){
            $userorders = UserOrder::join('products', 'products.prod_id', '=', 'userorders.prod_id')->where('userorders.order_id','=', $order_id)->get();
            (float)$sum = 0;
            foreach ($userorders as $userorder) {
                $sum += $userorder->prod_price * $userorder->quantity;
            }
            $data['sum'] = $sum;
            $data['orders'] = $orders;
            $data['userorders'] = $userorders;
            $data['order_id'] = $order_id;
            $data['page_title'] = 'orders';
            $trans = Transaction::where('order_id', $order_id)->first();
            $data['date'] = $trans->date;
            $data['customer_name'] = $trans->customer_name;




            return view('admin.orders.orders-view', $data);

        }else{
            return  back();
        }
        
    }
}
