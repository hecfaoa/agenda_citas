<?php

namespace App\Livewire;

use Livewire\Component;

class SelectFormBloodGroup extends Component
 {
    public $selectedOption1;
    public $options1;

    public function mount()
 {
        $this->options1 = [ 'Select', 'A+', 'O+', 'B+', 'AB+' ];
    }

    public function render()
 {
        return view( 'livewire.select-form-blood-group' );
    }
}
