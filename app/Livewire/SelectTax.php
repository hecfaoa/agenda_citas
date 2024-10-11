<?php

namespace App\Livewire;

use Livewire\Component;

class SelectTax extends Component
{
    public $selectedOption1;
    public $options1;

    public function mount()
 {
        $this->options1 = [ 'Select Tax Method', 'Active', 'In Active' ];
    }
    public function render()
    {
        return view('livewire.select-tax');
    }
}
