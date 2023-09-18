<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingredients extends Model
{
    use HasFactory;

    public $timestamps = true;
    protected $primaryKey = 'ingredient_id';
    protected $fillable = ['ingredient_name', 'stocks'];
}
