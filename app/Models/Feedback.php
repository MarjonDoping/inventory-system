<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;

    public $timestamps = true;
    protected $table = "feedbacks";
    protected $primaryKey = 'feedback_id';
    protected $fillable = ['name', 'message'];
}
