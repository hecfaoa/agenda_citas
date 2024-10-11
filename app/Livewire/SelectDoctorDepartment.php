<?php

namespace App\Livewire;

use Livewire\Component;

class SelectDoctorDepartment extends Component
 {
    public $selectedOption1;
    public $options1;

    public function mount()
 {
        $this->options1 = [ 'Select Department', 'Orthopedics', 'Radiology', 'Dentist' ];
    }

    public function render()
 {
        return view( 'livewire.select-doctor-department' );
    }
}
