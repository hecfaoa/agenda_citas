<?php

namespace App\Livewire;

use Livewire\Component;

class SelectLeaveStatus extends Component
{
    public $selectedOption1;
    public $options1;

    public function mount()
 {
        $this->options1 = [ 'Select Leave Status', 'Pending', 'Approved','Rejected' ];
    }
    public function render()
    {
        return view('livewire.select-leave-status');
    }
}
