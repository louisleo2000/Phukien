<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\ProductType;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Request as HttpFoundationRequest;

class AdminProductTypeController extends Controller
{
    function view()
    {
        $data = array(
            'active' => 3,
            'title' => 'Loại sản Phẩm',
            'listCategories' => Category::all(),
            'listLsp' => ProductType::paginate(5),

        );
        return view('admin.adminpages.admin-product-type', $data);
    }

    function add(Request $resquest)
    {
        $resquest->validate([
            'name' => 'required',
            'category_id' => 'required',
            'descrip' => 'required',
            'img' => 'required',

        ]);

        // $file = $resquest->img;
        // $img = "img-" . time() . "." . $file->extension();
        // $img_name = "uploads/" . $img;
        $sp = new ProductType();
        $data = $resquest->all();
        $sp->name = $data['name'];
        $sp->category_id = $data['category_id'];
        $sp->img =  $data['img'];
        $sp->descrip = $data['descrip'];

        if ($sp->save()) {
            // $file->move(public_path('uploads'), $img);
            return back()->with('success', 'Thêm loại sản phẩm thành công');
        } else {
            return back()->with('fail', 'Lỗi khi thêm loại sản phẩm');
        }
    }

    function edit(Request $resquest, $id)
    {
        $resquest->validate([
            'name' => 'required',
            'category_id' => 'required',
            'descrip' => 'required',
            'img' => 'required',

        ]);

        // $file = $resquest->img;
        // $img = "img-" . time() . "." . $file->extension();
        // $img_name = "uploads/" . $img;
        $sp = ProductType::find($id);
        $data = $resquest->all();
        $sp->name = $data['name'];
        $sp->category_id = $data['category_id'];
        $sp->img =  $data['img'];
        $sp->descrip = $data['descrip'];

        if ($sp->save()) {
            // $file->move(public_path('uploads'), $img);
            return back()->with('success', 'Sửa loại sản phẩm thành công');
        } else {
            return back()->with('fail', 'Lỗi khi sửa loại sản phẩm');
        }
    }
    function del($id)
    {
        $sp = ProductType::find($id);
        $sp->delete();
        return back()->with('del-success', 'Xóa thành công!');
    }
    function showData($id)
    {
        $sp = ProductType::find($id);
        return response()->json(['data' => $sp], 200);
    }
}
