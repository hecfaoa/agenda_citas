<?php

namespace App\Livewire;

use Livewire\Component;

class SelectAsset extends Component
 {
    public $selectedOption1;
    public $options1;

    public function mount()
 {
        $this->options1 = [ 'Select Asset User', 'Williams Bruk', 'Galaviz Lalema' ];
    }

    public function render()
 {
        return view( 'livewire.select-asset' );
    }
}
