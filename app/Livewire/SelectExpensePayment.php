<?php

namespace App\Livewire;

use Livewire\Component;

class SelectExpensePayment extends Component
{
    public $selectedOption1;
    public $options1;

    public function mount()
 {
        $this->options1 = [ 'Select Payment Status', 'Approved', 'Rejected', 'Pending' ];
    }
    public function render()
    {
        return view('livewire.select-expense-payment');
    }
}
