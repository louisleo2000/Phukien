<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductType;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Request as HttpFoundationRequest;

class AdminProductController extends Controller
{
    function viewAddProduct()
    {
        $products = array(
            'active' => 2,
            'title' => 'Sản Phẩm',
            'listProducts' => Product::all(),
            'listLsp' => ProductType::all(),

        );
        return view('admin.adminpages.admin-product', $products);
    }

    function addProduct(Request $resquest)
    {
        $resquest->validate([
            'name' => 'required',
            'product_type_id' => 'required',
            'descrip' => 'required',
            'img' => 'required',
            'unit' => 'required',
            'unit_price' => 'required',
            'promo_price' => 'required',
            'color' => 'required',
        ]);
        $sp = new Product();
        $data = $resquest->all();
        $sp->name = $data['name'];
        $sp->product_type_id = $data['product_type_id'];
        $sp->img = $data['img'];
        $sp->descrip = $data['descrip'];
        $sp->rating = 0;
        $sp->unit = $data['unit'];
        $sp->color = $data['color'];
        $sp->unit_price = $data['unit_price'];
        $sp->promo_price = $data['promo_price'];

        if ($sp->save()) {
            return back()->with('success', 'Thêm sản phẩm thành công');
        } else {
            return back()->with('fail', 'Lỗi khi thêm sản phẩm');
        }
    }
}
