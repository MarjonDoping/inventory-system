<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $primaryKey = 'transaction_id';
    protected $fillable = ['order_id', 'customer_name', 'totalprice', 'date'];
}
