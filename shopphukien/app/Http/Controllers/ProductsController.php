<?php

namespace App\Http\Controllers;

use App\Models\Sanpham;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    function index()
    {
        $products = array(
            'listproducts' => Sanpham::orderBy('tensp', 'ASC')->paginate(9)
        );
        return view('pages.products', $products);
    }
    function detailsProduct($product_id)
    {
        $products = array(
            'product' => Sanpham::where('masp', '=', $product_id)->first()
        );
        return view('pages.product-detail', $products);
    }
}
