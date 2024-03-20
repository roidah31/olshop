<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stockdetail extends Model
{
    use HasFactory;
    protected $fillable = ['datetrans','product_id','stock_id','qty','status'];
}
