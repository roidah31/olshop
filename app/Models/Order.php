<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
    'date_order',
    'customer_id',
    'customer_lastname',
    'customer_firstname',
    'customer_phone',
    'customer_address',
    'note',
    'district_id',
    'subtotal','status'];



  
}


