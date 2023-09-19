<?php

namespace App\Http\Controllers;

use App\Models\Expenses;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ExpensesController extends Controller
{
    //
    public function show()
    {
        $data['expenses'] = Expenses::orderBy('expenses_id', 'desc')->paginate(500);
        $data['page_title'] = 'sales';
        return view('admin.expenses.expenses-show', $data);
    }

    public function add(Request $request)
    {
        $data['expenses'] = new Expenses();
        $data['page_title'] = 'inventory';

		if($request->expenses_id){
			$id = $request->expenses_id;
			$data['expenses'] = Expenses::where('expenses_id',$id)->first();
		}
        return view('admin.expenses.expenses-add', $data);
    }

    public function edit(Request $request)
    {
        $data['category'] = new Expenses();
        $data['page_title'] = 'inventory';

		if($request->cat_id){
			$id = $request->cat_id;
			$data['category'] = Expenses::where('cat_id',$id)->first();
		}
        return view('admin.category.category-edit', $data);
    }

    public function create(Request $request)
    {

        $id = '';
        if ($request->expenses_id) {
            $id = $request->expenses_id;
        }

        $validator = Validator::make($request->all(), [
            'details'  => 'required',
            'amount'  => 'required',
        ]);

        if ($validator->fails()) {
            return  back()->withErrors($validator)->withInput();
        } else {
            $data = array(
                'details'  => $request->details,
                'amount'  => $request->amount
            );

            $expenses = Expenses::updateOrCreate(['expenses_id' => $id], $data);

            if ($expenses) {
                $message = '';

                if ($id)
                    $message = "Updated";
                else
                    $message = "Inserted";

                return redirect()->route('expenses-show')->with(['success' => $message . ' Successfully!']);

            } else {
                return redirect()->route('expenses-show')->with(['error' => 'Failed to insert expenses. Please try again.']);
            }
        }
    }

    

    public function delete(Request $request)
    {
        $id  = $request->cat_id;

        if ($id) {
            $res = Expenses::find($id)->delete();
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
