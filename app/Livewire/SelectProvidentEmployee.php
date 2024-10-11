<?php

namespace App\Livewire;

use Livewire\Component;

class SelectProvidentEmployee extends Component
{
    public $selectedOption1;
    public $options1;

    public function mount()
 {
        $this->options1 = [ 'Select Employee Name', 'Bernardo James', 'Galaviz Lalema', 'Tarah Williams' ];
    }
    public function render()
    {
        return view('livewire.select-provident-employee');
    }
}
