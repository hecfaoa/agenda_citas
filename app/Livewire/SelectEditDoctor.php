<?php

namespace App\Livewire;

use App\Models\Medico;
use Livewire\Component;

class SelectEditDoctor extends Component
{
    public $id_medico;

    public function mount($valor)
    {
        // Asignar el valor recibido a la propiedad
        $this->id_medico = $valor;
    }

    public function render()
    {
        return view('livewire.select-edit-doctor', [
            'medicos' => Medico::all()
        ]);
    }
}
