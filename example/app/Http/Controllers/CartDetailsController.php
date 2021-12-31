<?php

namespace App\Http\Controllers;

use App\Models\CartDetails;
use App\Http\Requests\StoreCartDetailsRequest;
use App\Http\Requests\UpdateCartDetailsRequest;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use SebastianBergmann\Environment\Console;

class CartDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $details = Auth::user()->cart->cartdetails;
        //dd($details[0]->product);
        $data = array(
            'list' => $details
        );
        if ($request->ajax()) {

            $view = view('layouts.cart-details', $data)->render();
            return response()->json(['html' => $view]);
        }
        return view('pages.cart', $data);
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

    function add(Request $request, $id)
    {
        if ($request->ajax()) {
            $request->validate([
                'color' => 'required',
                'quantity' => 'required',
            ]);
            $sp = Product::find($id);
            $current = CartDetails::where('cart_id', "=", Auth::user()->id)->where('product_id', '=', $id)->first();

            if ($current == null) {
                $cartdetail = new CartDetails();
                $cartdetail->cart_id = Auth()->user()->id;
                $cartdetail->product_id = $id;
                $cartdetail->quantity = $request->quantity;
                $cartdetail->color = $request->color;
                $cartdetail->total = $sp->promo_price * $request->quantity;
                if ($cartdetail->save())
                    return response()->json(['success', $cartdetail], 200);
            } else {
                $current->total =  $current->total + $sp->promo_price * $request->quantity;
                $current->quantity = $current->quantity + $request->quantity;
                if ($current->save())
                    return response()->json(['success', $current], 200);
            }


            return response()->json(['fail' => 'không thành công,sản phẩm đã có trong giỏ']);
        }
    }

    function update(Request $request, $id, $quantity)
    {
        $details = Auth::user()->cart->cartdetails;

        $data = array(
            'list' => $details
        );
        if ($request->ajax()) {
            $sp = Product::find($id);
            $current = CartDetails::where('cart_id', "=", Auth::user()->id)->where('product_id', '=', $id)->first();

            if ($current != null) {
                $current->quantity = $quantity;
                $current->total = $sp->promo_price * $quantity;
                if ($current->save()) {
                    $details = CartDetails::where('cart_id', "=", Auth::user()->id)->get();;
                    $data = array(
                        'list' => $details
                    );
                    $view = view('layouts.cart-details', $data)->render();
                    return response()->json(['html' => $view]);
                }
            }
            return view('pages.cart', $data);
        }
    }

    function remove(Request $request, $id)
    {
        $sp = CartDetails::where('cart_id', Auth::user()->id)->where('product_id', $id)->first();
        if ($sp != null)
            if ($request->ajax()) {
                if ($sp->delete()) {
                    return response()->json(['success', $sp], 200);
                } else
                    return response()->json(['fail'  => 'không thành công'], 200);
            }
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCartDetailsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCartDetailsRequest $request, $id)
    {
        //



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CartDetails  $cartDetails
     * @return \Illuminate\Http\Response
     */
    public function show(CartDetails $cartDetails)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CartDetails  $cartDetails
     * @return \Illuminate\Http\Response
     */
    public function edit(CartDetails $cartDetails)
    {
        //
    }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \App\Http\Requests\UpdateCartDetailsRequest  $request
    //  * @param  \App\Models\CartDetails  $cartDetails
    //  * @return \Illuminate\Http\Response
    //  */
    // public function update(UpdateCartDetailsRequest $request, CartDetails $cartDetails)
    // {
    //     //
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CartDetails  $cartDetails
     * @return \Illuminate\Http\Response
     */
    public function destroy(CartDetails $cartDetails)
    {
        //
    }
}
