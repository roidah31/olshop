<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_order',
        'order_id',
        'product_id',
        'product_name',
        'price',
        'qty',
        'weight',
        'total_price'
    ];
    static function add_orderdetail($id_prod,$id_order,$qty,$price){
        OrderDetail::create([
            'order_id'=>$id_order,
            'product_id'=>$id_prod,
            'price'=>$price,
            'qty'=>$qty,
        ]);

    }
}
