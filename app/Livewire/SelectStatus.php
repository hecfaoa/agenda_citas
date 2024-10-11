<?php

namespace App\Livewire;

use Livewire\Component;

class SelectStatus extends Component
{
    public $selectedOption1;
    public $options1;

    public function mount()
 {
        $this->options1 = [ 'Select Status', 'Pending', 'Approved', 'Returned' ];
    }
    public function render()
    {
        return view('livewire.select-status');
    }
}
