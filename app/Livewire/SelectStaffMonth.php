<?php

namespace App\Livewire;

use Livewire\Component;

class SelectStaffMonth extends Component
{
    public $selectedOption1;
    public $options1;

    public function mount()
 {
        $this->options1 = [ 'Select Month', 'December', 'November','October','September' ];
    }
    public function render()
    {
        return view('livewire.select-staff-month');
    }
}
