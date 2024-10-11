<?php

namespace App\Livewire;

use Livewire\Component;

class SelectGender extends Component
{
    public $selectedOption1;
    public $options1;

    public function mount()
 {
        $this->options1 = [ 'Select Gender', 'Male', 'Female' ];
    }
    public function render()
    {
        return view('livewire.select-gender');
    }
}
