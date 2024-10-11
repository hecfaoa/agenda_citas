<?php

namespace App\Livewire;

use App\Models\Medico;
use App\Models\Paciente;
use Livewire\Component;

class SelectPatient extends Component
{

   

    public function render()
    {

        return view('livewire.select-patient', [
            'pacientes' => Paciente::orderBy('pacientes.apellido','asc')
            ->get()
        ]);
    }
}
