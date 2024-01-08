<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = 'orders';
    protected $fillable = [
        'name',
        'phone',
        'address',
        'total_price',
        'provinces_id',
        'districts_id',
        'user_id',
        'trash',
        'status',
    ];
    public function scopeSearch($query, $value)
    {
        $query->where('name', 'like', "%{$value}%")->orwhere('phone', 'like', "%{$value}%");
    }
    public function order_detail()
    {
        return $this->hasMany(OrderDetail::class, 'orders_id');
    }
}
