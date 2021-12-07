<?php

namespace App\Http\Controllers;

use App\Models\DanhMuc;
use App\Models\LoaiSP;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Sanpham;

class HomeController extends Controller
{
    function index()
    {
        
        $loaisp1 = LoaiSP::where("madm",'=',1)->get();
        $loaisp2 = LoaiSP::where("madm",'=',2)->get();
        $products = array(
            // 'listproducts' => Sanpham::all(),
            'dm1'=> $loaisp1,
            'dm2'=> $loaisp2,
            // 'listpLSP' => LoaiSP::all(),
            // 'listDM'=> DanhMuc::all()
        );
        return view('pages.home', $products);
    }
}
