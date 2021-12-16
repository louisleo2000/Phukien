<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\ProductType;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Request as HttpFoundationRequest;

class AdminProductTypeController extends Controller
{
    function viewAddProductType()
    {
        $data = array(
            'active' => 3,
            'title' => 'Loại sản Phẩm',
            'listCategories' => Category::all(),
            'listLsp' => ProductType::all(),

        );
        return view('admin.adminpages.admin-product-type', $data);
    }

    function addProductType(Request $resquest)
    {
        $resquest->validate([
            'name' => 'required',
            'category_id' => 'required',
            'descrip' => 'required',
            'img' => 'required',

        ]);
        $sp = new ProductType();
        $data = $resquest->all();
        $sp->name = $data['name'];
        $sp->category_id = $data['category_id'];
        $sp->img = $data['img'];
        $sp->descrip = $data['descrip'];

        if ($sp->save()) {
            return back()->with('success', 'Thêm loại sản phẩm thành công');
        } else {
            return back()->with('fail', 'Lỗi khi thêm loại sản phẩm');
        }
    }
}
