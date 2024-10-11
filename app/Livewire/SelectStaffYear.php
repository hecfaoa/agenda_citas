<?php

namespace App\Livewire;

use Livewire\Component;

class SelectStaffYear extends Component
{
    public $selectedOption1;
    public $options1;

    public function mount()
 {
        $this->options1 = [ 'Select Year', '2023','2022','2021','2020','2019','2018' ];
    }
    public function render()
    {
        return view('livewire.select-staff-year');
    }
}
