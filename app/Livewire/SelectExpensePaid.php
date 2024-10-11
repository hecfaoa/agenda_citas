<?php

namespace App\Livewire;

use Livewire\Component;

class SelectExpensePaid extends Component
{
    public $selectedOption1;
    public $options1;

    public function mount()
 {
        $this->options1 = [ 'Select Paid by', 'Paypal', 'Cheque', 'Debit Card' ];
    }
    public function render()
    {
        return view('livewire.select-expense-paid');
    }
}
