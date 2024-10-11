<?php

namespace App\Livewire;

use Livewire\Component;

class SelectRole extends Component
{
    public $selectedOption1;
    public $options1;

    public function mount()
 {
        $this->options1 = ['Select Role','Accountant','Nurse','Pharmacist'];
    }
    public function render()
    {
        return view('livewire.select-role');
    }
}
