<?php

namespace App\Livewire;

use App\Models\Medico;
use Livewire\Component;

class SelectDoctor extends Component
{
    public function render()
    {
        return view('livewire.select-doctor',[
            'medicos'=>Medico::all()
        ]);
    }
}
