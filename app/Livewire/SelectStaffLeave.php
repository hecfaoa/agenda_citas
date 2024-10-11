<?php

namespace App\Livewire;

use Livewire\Component;

class SelectStaffLeave extends Component
{
    public $selectedOption1;
    public $options1;

    public function mount()
 {
        $this->options1 = [ 'Leave Status', 'Pending', 'Approved','Declined' ];
    }
    public function render()
    {
        return view('livewire.select-staff-leave');
    }
}
