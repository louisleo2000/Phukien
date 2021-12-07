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
        $prod = Sanpham::where('masp', '=', $product_id)->first();
        if (!$prod)
            return 'Không tìm thấy trang';
        $mausac = explode(",", $prod->mausac);
        $products = array(
            'product' => $prod,
            'mausac' => $mausac
        );
        if ($prod)
            return view('pages.product-detail', $products);
    }
}
