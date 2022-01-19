<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use App\Models\CartDetails as CartDetail;

class CartDetails extends Component
{
    protected $listeners = ['resfreshCart' => '$refresh'];

    public function render()
    {
        $carts =  CartDetail::where('cart_id','=',Auth::user()->cart->id)->orderBy('created_at', 'desc')->get();
        return view('livewire.cart-details', ['list' => $carts]);
    }
}
