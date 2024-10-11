<?php

namespace App\Livewire;

use Livewire\Component;

class SelectPaymentStatus extends Component
{
    public $selectedOption1;
    public $options1;

    public function mount()
 {
        $this->options1 = [ 'Select Payment Status', 'Paid', 'Patially Paid', 'Un Paid' ];
    }
    public function render()
    {
        return view('livewire.select-payment-status');
    }
}
