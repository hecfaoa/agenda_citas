<?php

namespace App\Livewire;

use Livewire\Component;

class SelectSettingCountry extends Component
 {
    public $selectedOption1;
    public $options1;

    public function mount()
 {
        $this->options1 = [ 'USA', 'United Kingdom' ];
    }

    public function render()
 {
        return view( 'livewire.select-setting-country' );
    }
}
