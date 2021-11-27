<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Sanpham;

class HomeController extends Controller
{
    function index()
    {
        $products = array(
            'listproducts' => Sanpham::all()
        );
        return view('pages.home', $products);
    }
}
