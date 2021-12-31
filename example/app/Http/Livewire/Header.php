<?php

namespace App\Http\Livewire;

use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Header extends Component
{
    protected $listeners = ['resfreshHeader' => '$refresh'];
    public $price = "";
    public function render()
    {
        $this->price = number_format(Auth::user()->cart->total_price, 0, ",",  ".");
        return view('livewire.header');
    }
}
