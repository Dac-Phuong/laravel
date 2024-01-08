<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $fillable = [
        'name',
        'image',
        'image_list',
        'price',
        'sale',
        'price_sale',
        'description',
        'status',
        'category_id',
    ];
    public function scopeSearch($query, $value)
    {
        $query->where('name', 'like', "%{$value}%")->orwhere('price', 'like', "%{$value}%");
    }
    public function products()
    {
        return $this->hasMany(Categories::class, 'category_id');
    }
}
