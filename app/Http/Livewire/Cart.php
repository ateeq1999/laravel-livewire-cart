<?php

namespace App\Http\Livewire;

use App\Facades\Cart as CartFacade;
use Livewire\Component;

class Cart extends Component
{
    public $cart;

    public function mount(): void
    {
        $this->cart = CartFacade::get();
    }

    public function render()
    {
        return view('livewire.cart');
    }
}
