<?php

namespace App\Livewire;

use Livewire\Component;

class SelectPatientState extends Component
{
    public $selectedOption1;
    public $options1;

    public function mount()
 {
        $this->options1 = [ 'Select State', 'Alaska', 'California' ];
    }
    public function render()
    {
        return view('livewire.select-patient-state');
    }
}
