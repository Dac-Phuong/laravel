<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contacts extends Model
{
    use HasFactory;
    protected $table = 'contacts';
    protected $fillable = [
        'name',
        'email',
        'phone',
        'title',
        'description',
        'user_id'
    ];
    public function scopeSearch($query, $value)
    {
        $query->where('name', 'like', "%{$value}%")->orwhere('phone', 'like', "%{$value}%");
    }
}
