<?php

namespace App\Livewire;

use Livewire\Component;

class SelectPaymentMethod extends Component
{
    public $selectedOption1;
    public $options1;

    public function mount()
 {
        $this->options1 = [ 'Select Payment Method', 'Credit Card', 'Debit Card', 'Pay Pal' ];
    }
    public function render()
    {
        return view('livewire.select-payment-method');
    }
}
