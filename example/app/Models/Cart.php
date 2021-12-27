<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'total_price', 'total_quantity'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function cartdetails()
    {
        return $this->hasMany(CartDetails::class, 'cart_id');
    }
}
