<?php

namespace App\Livewire;

use Livewire\Component;

class SelectPatientCountry extends Component
{
    public $selectedOption1;
    public $options1;

    public function mount()
 {
        $this->options1 = [ 'Select Country', 'Usa', 'Uk', 'Italy' ];
    }
    public function render()
    {
        return view('livewire.select-patient-country');
    }
}
