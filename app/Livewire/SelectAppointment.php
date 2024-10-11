<?php

namespace App\Livewire;

use Livewire\Component;

class SelectAppointment extends Component
 {
    public $selectedOption1;
    public $options1;

    public function mount()
 {
        $this->options1 = [ 'Select Doctor', 'Dr.Bernardo James', 'Dr.Andrea Lalema', 'Dr.William Stephin' ];
    }

    public function render()
 {
        return view( 'livewire.select-appointment' );
    }
}
