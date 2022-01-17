<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\ProductType;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

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

    public function get(Request $request)
    {
        if ($request->ajax()) {
            $data = ProductType::latest()->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->editColumn('img', '<img src="{{$img}}" class="avatar " alt="user1">')
                ->editColumn('created_at', function ($sp) {

                    return $sp->created_at->diffForHumans();
                })
                ->editColumn('updated_at', function ($sp) {

                    return $sp->updated_at->diffForHumans();
                })
                ->addColumn('categories', function ($sp) {

                    return $sp->category->name;
                })
                ->addColumn('action', function ($sp) {
                    $url = route('admin-product-type.show', $sp->id);
                    $delurl = route('admin-product-type.del', $sp->id);
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
                ->rawColumns(['action', 'img'])
                ->make(true);
        }
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
