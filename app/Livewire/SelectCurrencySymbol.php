<?php

namespace App\Livewire;

use Livewire\Component;

class SelectCurrencySymbol extends Component
 {
    public $selectedOption1;
    public $options1;

    public function mount()
 {
        $this->options1 = [ '$', '₹', '£', '€' ];
    }

    public function render()
 {
        return view( 'livewire.select-currency-symbol' );
    }
}
