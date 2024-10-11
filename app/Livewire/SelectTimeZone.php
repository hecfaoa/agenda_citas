<?php

namespace App\Livewire;

use Livewire\Component;

class SelectTimeZone extends Component
{
    public $selectedOption1;
    public $options1;

    public function mount()
 {
        $this->options1 = ['(UTC +5:30) Antarctica/Palmer','(UTC+05:30) India'];
    }
    public function render()
    {
        return view('livewire.select-time-zone');
    }
}
