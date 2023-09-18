<?php

namespace App\Http\Controllers;

use App\Models\InventoryLog;
use Illuminate\Http\Request;

class InventoryLogController extends Controller
{
    //
    public function show()
    {
        $inventory = InventoryLog::orderBy('inventorylog_id', 'desc')->paginate(500);

        foreach ($inventory as $key => $value) {

            if ($value->inventory_in == null) {
                $value->inventory_in = "---";
            }
            if ($value->inventory_out == null) {
                $value->inventory_out = "---";
            }
        }





        $data['inventory_log'] = $inventory;
        $data['page_title'] = 'inventory';
        return view('admin.inventory.inventory-show', $data);
    }
}
