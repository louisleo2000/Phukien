<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function index(Request $request)
    {
        $listproducts =  Product::orderBy('name', 'ASC')->paginate(6);
        if ($request->ajax()) {
            if ($listproducts->lastPage())
                $view = view('pages.more-product', compact('listproducts'))->render();
            return response()->json(['html' => $view]);
        }
        return view('pages.products', compact('listproducts'));
    }

    function details($product_id)
    {
        $prod = Product::where('id', '=', $product_id)->first();
        if (!$prod)
            return 'Không tìm thấy trang';
        $loaisp = $prod->productTypes;
        // $danhmuc = DanhMuc::where("madm", '=', $loaisp->madm)->first();
        $mausac = explode(",", $prod->color);
        $products = array(
            'product' => $prod,
            'mausac' => $mausac,
            'loaisp' => $loaisp,
            // 'danhmuc' => $danhmuc
        );
        if ($prod)
            return view('pages.product-detail', $products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductRequest  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}