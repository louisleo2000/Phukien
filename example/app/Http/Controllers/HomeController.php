<?php

namespace App\Http\Controllers;

use App\Models\ProductType;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index()
    {

        $loaisp1 = ProductType::where("category_id", '=', 1)->get();
        $loaisp2 = ProductType::where("category_id", '=', 2)->get();

        $products = array(
            // 'listproducts' => Sanpham::all(),
            'dm1' => $loaisp1,
            'dm2' => $loaisp2,
            // 'listpLSP' => LoaiSP::all(),
            // 'listDM'=> DanhMuc::all()
        );
        return view('pages.home', $products);
    }
}
