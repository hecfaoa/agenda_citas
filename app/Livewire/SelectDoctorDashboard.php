<?php

namespace App\Livewire;

use Livewire\Component;

class SelectDoctorDashboard extends Component
 {
    public $selectedOption1;
    public $options1;

    public function mount()
 {
        $this->options1 = [ 'This Week', 'Last Week', 'This Month', 'Last Month' ];
    }

    public function render()
 {
        return view( 'livewire.select-doctor-dashboard' );
    }
}
