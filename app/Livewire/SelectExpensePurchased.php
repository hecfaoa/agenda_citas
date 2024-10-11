<?php

namespace App\Livewire;

use Livewire\Component;

class SelectExpensePurchased extends Component
{
    public $selectedOption1;
    public $options1;

    public function mount()
 {
        $this->options1 = [ 'Select Purchase by', 'Bernardo James', 'Galaviz Lalema', 'Tarah Williams' ];
    }
    public function render()
    {
        return view('livewire.select-expense-purchased');
    }
}
