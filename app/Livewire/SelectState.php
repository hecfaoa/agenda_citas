<?php

namespace App\Livewire;

use Livewire\Component;

class SelectState extends Component
{
    public $selectedOption1;
    public $options1;

    public function mount()
 {
        $this->options1 = [ 'Select', 'California','Tasmania','Auckland','Marlborough' ];
    }
    public function render()
    {
        return view('livewire.select-state');
    }
}
