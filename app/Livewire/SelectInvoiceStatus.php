<?php

namespace App\Livewire;

use Livewire\Component;

class SelectInvoiceStatus extends Component
{
    public $selectedOption1;
    public $options1;

    public function mount()
 {
        $this->options1 = [ 'Select Tax', 'Paid', 'Un Paid', 'Patially Paid' ];
    }
    public function render()
    {
        return view('livewire.select-invoice-status');
    }
}
