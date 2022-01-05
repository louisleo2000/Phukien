<?php

namespace App\Http\Controllers;

use App\Models\CartDetails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckOutController extends Controller
{
    //
    public function index()
    {
        $data =['cart'=>Auth::user()->cart->cartdetails];
        return view('pages.checkout',$data);
    }

}
