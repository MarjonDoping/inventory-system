<?php

namespace App\Http\Controllers;

use App\Models\Expenses;
use App\Models\Ingredients;
use App\Models\InventoryLog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class IngredientsController extends Controller
{
    public function show()
    {
        $data['ingredients'] = Ingredients::paginate(500);
        $data['page_title'] = 'inventory';
        return view('admin.ingredients.ingredients-show', $data);
    }

    public function add(Request $request)
    {
        $data['ingredients'] = new Ingredients();
        $data['page_title'] = 'inventory';

        if ($request->ingredient_id) {
            $id = $request->ingredient_id;
            $data['ingredients'] = Ingredients::where('ingredient_id', $id)->first();
        }
        return view('admin.ingredients.ingredients-add', $data);
    }

    public function edit(Request $request)
    {
        $data['ingredients'] = new Ingredients();
        $data['page_title'] = 'inventory';

        if ($request->ingredient_id) {
            $id = $request->ingredient_id;
            $data['ingredients'] = Ingredients::where('ingredient_id', $id)->first();
        }
        return view('admin.ingredients.ingredients-edit', $data);
    }

    public function create(Request $request)
    {

        $id = '';
        if ($request->ingredient_id) {
            $id = $request->ingredient_id;
        }


        $validator = Validator::make($request->all(), [
            'ingredient_name'  => 'required',
            'stocks'  => 'required',
        ]);


        if ($validator->fails()) {
            return  back()->withErrors($validator)->withInput();
        } else {

            $data = array(
                'ingredient_name'  => $request->ingredient_name,
                'stocks'  => $request->stocks,
            );

            $expenses = true;
            $inventory_log = true;
            if ($request->amount != null) {
                $expenses = Expenses::create(['details' => $request->ingredient_name, 'amount' => $request->amount]);
            }

            if ($id) {
                $ing = Ingredients::where('ingredient_id', $id)->first();
                $toinsert = null;
                if ($ing->stocks > intval($request->stocks)) {
                    $toinsert = [
                        'details' => $request->ingredient_name,
                        'inventory_out' => $ing->stocks-intval($request->stocks),
                        'type' => 1
                    ];

                    $inventory_log = InventoryLog::create($toinsert);

                }
                if ($ing->stocks < intval($request->stocks)) {
                    $toinsert = [
                        'details' => $request->ingredient_name,
                        'inventory_in' => intval($request->stocks) - $ing->stocks,
                        'type' => 1
                    ];
                    $inventory_log = InventoryLog::create($toinsert);
                }


            } else {
                $inventory_log = InventoryLog::create(['details' => $request->ingredient_name, 'inventory_in' => $request->stocks, 'type' => 1]);
            }

            $ingredient = Ingredients::updateOrCreate(['ingredient_id' => $id], $data);


            if ($ingredient && $expenses && $inventory_log) {
                $message = '';

                if ($id)
                    $message = "Updated";
                else
                    $message = "Inserted";

                return redirect()->route('ingredients-show')->with(['success' => $message . ' Successfully!']);
            } else {
                return redirect()->route('ingredients-show')->with(['error' => 'Failed to insert ingredient. Please try again.']);
            }
        }
    }



    public function delete(Request $request)
    {
        $id  = $request->ingredient_id;

        if ($id) {
            $res = Ingredients::find($id)->delete();
            if ($res) {
                echo json_encode('Deleted successfully');
            } else {
                echo json_encode("Something went wrong");
            }
        } else {
            echo json_encode("Ingredient ID Not found");
        }
    }
}
