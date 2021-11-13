<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Admin extends Controller
{
    function index()
    {
        return view('addsp');
    }
    function addsp(Request $resquest)
    {
        // return $resquest->input();
        $resquest->validate([
            'masp' => 'required',
            'malsp' => 'required',
            'tensp' => 'required',
            'mota' => 'required',
            'hinhanh' => 'required',
            'dvt' => 'required',
            'dongia' => 'required',
            'giakm' => 'required',
        ]);

        $query = DB::table('sanpham')->insert([
            'masp' => $resquest->input('masp'),
            'maloaisp' => $resquest->input('malsp'),
            'tensp' => $resquest->input('tensp'),
            'motasp' => $resquest->input('mota'),
            'hinhanh' => $resquest->input('hinhanh'),
            'dvt' => $resquest->input('dvt'),
            'dongia' => $resquest->input('dongia'),
            'giakm' => $resquest->input('giakm'),
            'tgtao' => date('Y-m-d H:i:s', time()),
            'tgcapnhat' => date('Y-m-d H:i:s', time()),

        ]);
        if ($query) {
            return back()->with('thanhcong', 'Thêm sản phẩm thành công');
        } else {
            return back()->with('loi', 'Thêm không thành công');
        }
    }
}
