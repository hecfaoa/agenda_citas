<?php

namespace App\Livewire;

use Livewire\Component;

class SelectInvoiceTax extends Component
{
    public $selectedOption1;
    public $options1;

    public function mount()
 {
        $this->options1 = [ 'Select Tax', 'VAT', 'GST', 'No GST' ];
    }
    public function render()
    {
        return view('livewire.select-invoice-tax');
    }
}
