<?php

namespace App\Http\Controllers;

use App\Models\Sanpham;
use App\Models\LoaiSP;
use Illuminate\Support\Facades\Session;
use  App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

session_start();

class Admin extends Controller
{
    function index()
    {
        return view('admin.admin-login');
    }
    function showDashBoard(Request $resquest)
    {
        $resquest->validate([
            'admin_email' => 'required',
            'admin_password' => 'required',

        ]);
        $query = DB::table('admin')->where([
            'admin_email' => $resquest->input('admin_email'),
            'admin_password' => md5($resquest->input('admin_password')),
        ])->first();
        if ($query) {
            Session::put('admin_name', $query->admin_name);
            Session::put('admin_id', $query->admin_id);
            return Redirect::to('/addproduct');
        } else {
            return back()->with('loi', 'Sai tài khoản hoặc mật khẩu!!!');
        }
    }
    function logOut()
    {
        Session::put('admin_name', null);
        Session::put('admin_id', null);
        return Redirect::to('/admin');
    }
    function viewAddProduct()
    {
        $dataSP = array(
            'listLSP' => LoaiSP::all(),
            'listSP' => Sanpham::paginate(5),
        );
        return view('admin.add-product', $dataSP);
    }

    function viewAddProductType()
    {
        $data = array(
            'listLSP' => LoaiSP::paginate(5),
            'listSP' => Sanpham::paginate(5),
        );
        return view('admin.add-product-type', $data);
    }

    function addsp(Request $resquest)
    {
        //return $resquest->input();
        $resquest->validate([

            'tensp' => 'required',
            'motasp' => 'required',
            'hinhsp' => 'required',
            'dvt' => 'required',
            'dongia' => 'required',
            'giakm' => 'required',
        ]);
        $sp = new Sanpham();
        $data = $resquest->all();

        $sp->maloaisp = $data['loaisp'];
        $sp->tensp = $data['tensp'];
        $sp->motasp = $data['motasp'];
        $sp->hinhanh = $data['hinhsp'];
        $sp->dvt = $data['dvt'];
        $sp->dongia = $data['dongia'];
        $sp->giakm = $data['giakm'];


        // $data['masp'] = $resquest->input('masp');
        // $data['maloaisp'] = $resquest->input('loaisp');
        // $data['tensp'] = $resquest->input('tensp');
        // $data['motasp'] = $resquest->input('motasp');
        // $data['hinhanh'] = $resquest->input('hinhsp');
        // $data['dvt'] = $resquest->input('dvt');
        // $data['dongia'] = $resquest->input('dongia');
        // $data['giakm'] = $resquest->input('giakm');
        // $data['tgtao'] = date('Y-m-d H:i:s', time());
        // $data['tgcapnhat'] = date('Y-m-d H:i:s', time());
        // echo '<pre>';
        // print_r($data);
        // echo '</pre>';

        //        $query = DB::table('sanpham')->insert($data);
        if ($sp->save()) {
            return back()->with('thanhcong', 'Thêm sản phẩm thành công');
        } else {
            return back()->with('loi', 'Lỗi khi thêm sản phẩm');
        }
    }
    function addlsp(Request $resquest)
    {
        //return $resquest->input();
        $resquest->validate([
            'malsp' => 'required',
            'tenlsp' => 'required',
            'motalsp' => 'required',
            'hinhlsp' => 'required',
        ]);


        $lsp = new LoaiSP();
        $data = $resquest->all();

        $lsp->maloaisp = $data['malsp'];
        $lsp->tenLsp = $data['tenlsp'];
        $lsp->motaLsp = $data['motalsp'];
        $lsp->hinhanhLSP = $data['hinhlsp'];

        if ($lsp->save()) {
            return back()->with('thanhcong', 'Thêm sản phẩm thành công');
        } else {
            return back()->with('loi', 'Lỗi khi thêm sản phẩm');
        }
    }
}
