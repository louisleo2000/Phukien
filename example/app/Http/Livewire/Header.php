<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use App\Models\CartDetails;

class Header extends Component
{
    protected $listeners = ['resfreshHeader' => '$refresh'];
    public $price = "";
    public $search = "";
    public function render()
    {
        $carts =null;
        if (Auth::user() != null) {
            $this->price = number_format(Auth::user()->cart->total_price, 0, ",",  ".");
            
            $carts =  CartDetails::where('cart_id','=',Auth::user()->cart->id)->orderBy('created_at', 'desc')->get();
        }
        return view('livewire.header',['carts'=>$carts]);
    }
    public function search()
    {
        $currentURL = url()->previous();

        if ($currentURL != route('products')) {

            $url = "/products?search=" . $this->search;

            return redirect($url);
        } else
            $this->emit('search', $this->search);
        // return view('pages.products');
    }
}
