<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductType;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class AdminProductController extends Controller
{
    function view()
    {
        $products = array(
            'active' => 2,
            'title' => 'Sản Phẩm',
            'listProducts' => Product::paginate(5),
            'listLsp' => ProductType::all(),

        );
        return view('admin.adminpages.admin-product', $products);
    }
    public function get(Request $request)
    {
        if ($request->ajax()) {
            $data = Product::latest()->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->editColumn('img', '<img src="{{$img}}" class="avatar" alt="user1">')
                ->editColumn('unit_price', function ($sp) {

                    return number_format($sp->unit_price, 0, ",", ".");
                })
                ->editColumn('promo_price', function ($sp) {

                    return number_format($sp->promo_price, 0, ",", ".");
                })
                ->editColumn('created_at', function ($sp) {

                    return $sp->created_at->diffForHumans();
                })
                ->editColumn('updated_at', function ($sp) {

                    return $sp->updated_at->diffForHumans();
                })
                ->addColumn('type', function ($sp) {

                    return $sp->productTypes->name;
                })
                ->addColumn('action', function ($sp) {
                    $url = route('admin-product.show', $sp->id);
                    $delurl = route('admin-product.del', $sp->id);
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
            'product_type_id' => 'required',
            'descrip' => 'required',
            'unit' => 'required',
            'unit_price' => 'required',
            'promo_price' => 'required',
            'color' => 'required',
        ]);

        // $file = $resquest->img;
        // $img = "img-" . time() . "." . $file->extension();
        // $img_name = "uploads/" . $img;
        $sp = new Product();
        $data = $resquest->all();
        $sp->name = $data['name'];
        $sp->product_type_id = $data['product_type_id'];
        $sp->img =  $data['img'];
        $sp->descrip = $data['descrip'];
        $sp->rating = 0;
        $sp->unit = $data['unit'];
        $sp->color = $data['color'];
        $sp->unit_price = $data['unit_price'];
        $sp->promo_price = $data['promo_price'];

        if ($sp->save()) {
            // $file->move(public_path('uploads'), $img);
            return back()->with('success', 'Thêm sản phẩm thành công');
        } else {
            return back()->with('fail', 'Lỗi khi thêm sản phẩm');
        }
    }
    function edit(Request $resquest, $id)
    {

        $resquest->validate([
            'name' => 'required',
            'product_type_id' => 'required',
            'descrip' => 'required',
            'unit' => 'required',
            'unit_price' => 'required',
            'promo_price' => 'required',
            'color' => 'required',
        ]);
        // dd($resquest->all());
        // $file = $resquest->img;
        // $img = "img-" . time() . "." . $file->extension();
        // $img_name = "uploads/" . $img;
        $sp = Product::find($id);
        $data = $resquest->all();
        $sp->name = $data['name'];
        $sp->product_type_id = $data['product_type_id'];
        $sp->img =  $data['img'];
        $sp->descrip = $data['descrip'];
        $sp->unit = $data['unit'];
        $sp->color = $data['color'];
        $sp->unit_price = $data['unit_price'];
        $sp->promo_price = $data['promo_price'];

        if ($sp->save()) {
            // $file->move(public_path('uploads'), $img);
            return back()->with('success', 'Sửa sản phẩm thành công');
        } else {
            return back()->with('fail', 'Lỗi khi sửa sản phẩm');
        }
    }
    function del($id)
    {
        $sp = Product::find($id);
        $sp->delete();
        return back()->with('del-success', 'Xóa thành công!');
    }
    function showData($id)
    {
        $sp = Product::find($id);
        return response()->json(['data' => $sp], 200);
    }
}
