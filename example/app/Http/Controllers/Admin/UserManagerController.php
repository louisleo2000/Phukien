<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Yajra\DataTables\Facades\DataTables;

class UserManagerController extends Controller
{
    function view()
    {
        $products = array(
            'active' => 5,
            'title' => 'Quản lý người dùng',
            // 'listProducts' => Product::paginate(5),
            // 'listLsp' => ProductType::all(),

        );
        return view('admin.adminpages.user-manager', $products);
    }
    public function get(Request $request)
    {
        if ($request->ajax()) {
            $data = User::latest()->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->editColumn('created_at', function ($sp) {
                    return $sp->created_at->diffForHumans();
                })
                ->editColumn('updated_at', function ($sp) {
                    return $sp->updated_at->diffForHumans();
                })
                ->addColumn('action', function ($sp) {
                    $url = route('user-manager.show', $sp->id);
                    $delurl = route('user-manager.del', $sp->id);
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
            'email' => 'required',
            'tel' => 'required',
            'role' => 'required',
            'adress' => 'required',

        ]);


        $sp = new User();
        $data = $resquest->all();
        $sp->name = $data['name'];
        $sp->email =  $data['email'];
        $sp->tel = $data['tel'];
        $sp->role = $data['role'];
        $sp->adress = $data['adress'];
        $sp->password = Hash::make('a12345678');
       // dd($sp);

       if ($sp->save()) {
        // $file->move(public_path('uploads'), $img);
        // $resquest->user()->sendEmailVerificationNotification();
        return back()->with('success', 'Thêm sản phẩm thành công');

        } else {
            return back()->with('fail', 'Lỗi khi thêm sản phẩm');
        }

    }
    function edit(Request $resquest, $id)
    {
        $resquest->validate([
            'name' => 'required',
            'email' => 'required',
            'tel' => 'required',
            'role' => 'required',
            'adress' => 'required',
        ]);

        $sp = User::find($id);
        $data = $resquest->all();
        $sp->name = $data['name'];
        $sp->email =  $data['email'];
        $sp->tel = $data['tel'];
        $sp->role = $data['role'];
        $sp->adress = $data['adress'];
       // dd($sp);

       if ($sp->save()) {
        // $file->move(public_path('uploads'), $img);
        // $resquest->user()->sendEmailVerificationNotification();
        return back()->with('success', 'Thêm sản phẩm thành công');

        }
        else {
            return back()->with('fail', 'Lỗi khi thêm sản phẩm');
        }
    }
    function del($id)
    {
        $sp = User::find($id);
        $sp->delete();
        return back()->with('del-success', 'Xóa thành công!');
    }
    function showData($id)
    {
        $sp = User::find($id);
        return response()->json(['data' => $sp], 200);
    }
}
