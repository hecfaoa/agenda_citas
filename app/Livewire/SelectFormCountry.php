<?php

namespace App\Livewire;

use Livewire\Component;

class SelectFormCountry extends Component
 {
    public $selectedOption1;
    public $options1;

    public function mount()
 {
        $this->options1 = [ 'Select Country', 'USA', 'France', 'India', 'Spain' ];
    }

    public function render()
 {
        return view( 'livewire.select-form-country' );
    }
}
