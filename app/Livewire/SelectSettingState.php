<?php

namespace App\Livewire;

use Livewire\Component;

class SelectSettingState extends Component
 {
    public $selectedOption1;
    public $options1;

    public function mount()
 {
        $this->options1 = [ 'California', 'Alaska', 'Alabama' ];
    }

    public function render()
 {
        return view( 'livewire.select-setting-state' );
    }
}
