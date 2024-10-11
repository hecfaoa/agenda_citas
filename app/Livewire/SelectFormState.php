<?php

namespace App\Livewire;

use Livewire\Component;

class SelectFormState extends Component
{
    public $selectedOption1;
    public $options1;

    public function mount()
 {
        $this->options1 = [ 'Select State', 'California', 'Texas','Florida' ];
    }
    public function render()
    {
        return view('livewire.select-form-state');
    }
}
