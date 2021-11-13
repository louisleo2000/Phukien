<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    function index()
    {
        $products = array(
            'list' => DB::table('sanpham')->get()
        );
        return view('home', $products);
    }
}
