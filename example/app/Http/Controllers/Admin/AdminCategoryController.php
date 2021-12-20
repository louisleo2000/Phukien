<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use DataTables;
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

    public function get(Request $request)
    {
        if ($request->ajax()) {
            $data = Category::latest()->get();
            return DataTables::of($data)
                ->addIndexColumn()

                ->editColumn('created_at', function ($sp) {

                    return $sp->created_at->diffForHumans();
                })
                ->editColumn('updated_at', function ($sp) {

                    return $sp->updated_at->diffForHumans();
                })

                ->addColumn('action', function ($sp) {
                    $url = route('admin-categories.show', $sp->id);
                    $delurl = route('admin-categories.del', $sp->id);
                    $action =
                        '<a id="edit' . $sp->id . '" onclick="edit(' . $sp->id . ')" data-url="' . $url . '" class="font-weight-bold text-xs badge badge-sm bg-gradient-success" data-toggle="tooltip" data-original-title="Edit user">
                        Sửa
                        </a>
                        <br>
                        <a  id="del' . $sp->id . '" onclick="del(' . $sp->id . ')" data-url="' . $delurl . '" class=" font-weight-bold text-xs badge badge-sm bg-gradient-danger" style="margin-top: 2px;" data-toggle="tooltip" data-original-title="Edit user">
                        Xóa
                    </a>';
                    return $action;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
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
