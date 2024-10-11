<?php

namespace App\Livewire;

use Livewire\Component;

class SelectProvidentType extends Component
{
    public $selectedOption1;
    public $options1;

    public function mount()
 {
        $this->options1 = [ 'Select Provident Fund Type', 'Basic Salary', 'Month Salary' ];
    }
    public function render()
    {
        return view('livewire.select-provident-type');
    }
}
