<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['product_type_id', 'name', 'descrip', 'img', 'unit', 'color', 'rating', 'unit_price', 'promo_price'];

    public function productTypes()
    {
        return $this->belongsTo(ProductType::class, 'product_type_id');
    }
}
