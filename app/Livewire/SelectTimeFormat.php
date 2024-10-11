<?php

namespace App\Livewire;

use Livewire\Component;

class SelectTimeFormat extends Component
{
    public $selectedOption1;
    public $options1;

    public function mount()
 {
        $this->options1 = [ '12 Hours','24 Hours','36 Hours','48 Hours','60 Hours' ];
    }
    public function render()
    {
        return view('livewire.select-time-format');
    }
}
