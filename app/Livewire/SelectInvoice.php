<?php

namespace App\Livewire;

use Livewire\Component;

class SelectInvoice extends Component
{
    public $selectedOption1;
    public $options1;

    public function mount()
 {
        $this->options1 = [ 'By month', 'March', 'April', 'May','June','July' ];
    }
    public function render()
    {
        return view('livewire.select-invoice');
    }
}
