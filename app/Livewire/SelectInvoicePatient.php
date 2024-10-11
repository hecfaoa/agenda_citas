<?php

namespace App\Livewire;

use Livewire\Component;

class SelectInvoicePatient extends Component
{
    public $selectedOption1;
    public $options1;

    public function mount()
 {
        $this->options1 = [ 'Select Patient', 'Bernardo Jame', 'Galaviz Lalema','Tarah Williams' ];
    }
    public function render()
    {
        return view('livewire.select-invoice-patient');
    }
}
