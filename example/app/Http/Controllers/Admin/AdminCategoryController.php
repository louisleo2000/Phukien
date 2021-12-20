<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Request as HttpFoundationRequest;

class AdminCategoryController extends Controller
{
    function view()
    {
        $data = array(
            'active' => 4,
            'title' => 'Danh mục sản Phẩm',
            'list' => Category::paginate(5)
        );
        return view('admin.adminpages.admin-categories', $data);
    }

    function add(Request $resquest)
    {
        $resquest->validate([
            'name' => 'required',
        ]);
        $sp = new Category();
        $data = $resquest->all();
        $sp->name = $data['name'];

        if ($sp->save()) {
            return back()->with('success', 'Thêm danh mục sản phẩm thành công');
        } else {
            return back()->with('fail', 'Lỗi khi thêm danh mục sản phẩm');
        }
    }
    function edit(Request $resquest, $id)
    {
        $resquest->validate([
            'name' => 'required',
        ]);
        $sp = Category::find($id);
        $data = $resquest->all();
        $sp->name = $data['name'];

        if ($sp->save()) {
            return back()->with('success', 'Sửa danh mục sản phẩm thành công');
        } else {
            return back()->with('fail', 'Lỗi khi sửa danh mục sản phẩm');
        }
    }
    function del($id)
    {
        $sp = Category::find($id);
        $sp->delete();
        return back()->with('del-success', 'Xóa thành công!');
    }
    function showData($id)
    {
        $sp = Category::find($id);
        return response()->json(['data' => $sp], 200);
    }
}
