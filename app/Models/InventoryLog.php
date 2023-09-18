<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InventoryLog extends Model
{
    use HasFactory;

    public $timestamps = true;
    protected $table = "inventory_logs";
    protected $primaryKey = 'inventorylog_id';
    protected $fillable = ['details', 'inventory_in', 'inventory_out', 'type'];
}
