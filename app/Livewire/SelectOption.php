<?php

namespace App\Livewire;

use Livewire\Component;

class SelectOption extends Component
 {
    public $selectedOption1;
    public $options1;

    public function mount()
 {
        $this->options1 = [ '-- Select --', 'Option 1', 'Option 2', 'Option 3', 'Option 4', 'Option 5' ];
    }

    public function render()
 {
        return view( 'livewire.select-option' );
    }
}
