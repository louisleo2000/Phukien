<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\URL;
use Livewire\Component;

class Header extends Component
{
    protected $listeners = ['resfreshHeader' => '$refresh'];
    public $price = "";
    public $search = "";
    public function render()
    {
        if (Auth::user() != null)
            $this->price = number_format(Auth::user()->cart->total_price, 0, ",",  ".");
        return view('livewire.header');
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
