<?php

namespace App\Livewire;

use Livewire\Component;

class SelectSalary extends Component
{
    public $selectedOption1;
    public $options1;

    public function mount()
 {
        $this->options1 = [ 'Select Staff', 'Williams Bruk', 'Galaviz Lalema' ];
    }
    public function render()
    {
        return view('livewire.select-salary');
    }
}
