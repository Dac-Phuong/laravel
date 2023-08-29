<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;
    protected $table = 'order_details';
    protected $fillable = [
        'name_product',
        'quantity',
        'price',
        'status',
        'trash',
        'orders_id',
        'products_id',
    ];
    public function order()
    {
        return $this->belongsTo(Order::class, 'orders_id');
    }
}
