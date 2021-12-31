<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CartDetails extends Component
{
    protected $listeners = ['resfreshCart' => '$refresh'];

    public function render()
    {

        return view('livewire.cart-details', ['list' => Auth::user()->cart->cartdetails]);
    }
}
