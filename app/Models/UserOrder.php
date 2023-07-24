<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserOrder extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'userorders';
    protected $primaryKey = 'userorder_id';
    protected $fillable = ['order_id', 'prod_id', 'quantity'];
}
