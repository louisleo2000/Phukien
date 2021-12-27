<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\CartDetails;
use App\Models\Product;
use App\Models\ProductType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    function index()
    {

        $loaisp1 = ProductType::where("category_id", '=', 1)->get();
        $loaisp2 = ProductType::where("category_id", '=', 2)->get();
        $listCart = CartDetails::all();

        $data = array(
            // 'listproducts' => Sanpham::all(),
            'dm1' => $loaisp1,
            'dm2' => $loaisp2,
            'cart' => $listCart
            // 'listpLSP' => LoaiSP::all(),
            // 'listDM'=> DanhMuc::all()
        );

        return view('pages.home', $data);
    }
    function details(Request $request, $id)
    {
        if ($request->ajax()) {
            $sp = Product::find($id);
            $mausac = explode(",", $sp->color);
            $product = array(
                'prod' => $sp,
                'mausac' => $mausac,
            );
            if ($sp != null)
                $view = view('layouts.modal-product', $product)->render();
            return response()->json(['html' => $view]);
        }
    }
}
