<?php

namespace App\Livewire;

use Livewire\Component;

class SelectSchedule extends Component
{
    public $selectedOption1;
    public $options1;

    public function mount()
    {
        $this->options1 = ['Choose Department', 'Cardiology', 'Urology', 'Radiology'];
    }

    public function render()
    {
        return view('livewire.select-schedule');
    }
}
