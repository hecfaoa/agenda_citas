<?php

namespace App\Livewire;

use Livewire\Component;

class SelectInvoicePayment extends Component
{
    public $selectedOption1;
    public $options1;

    public function mount()
 {
        $this->options1 = [ 'Select Payment Method', 'Debit Card', 'Gpay' ];
    }
    public function render()
    {
        return view('livewire.select-invoice-payment');
    }
}
