<?php

namespace App\Livewire;

use Livewire\Component;

class SelectPaymentDoctor extends Component
{
    public $selectedOption1;
    public $options1;

    public function mount()
 {
        $this->options1 = [ 'Enter Doctor Name', 'Dr.Galaviz Lalema', 'Dr.Bernardo James', 'Dr.Mark Hay Smith' ];
    }
    public function render()
    {
        return view('livewire.select-payment-doctor');
    }
}
