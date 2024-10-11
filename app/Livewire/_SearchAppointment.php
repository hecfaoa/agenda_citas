<?php

namespace App\Livewire;

use App\Models\Cita;
use Livewire\Component;

class SearchAppointment extends Component
{
    public $search='';
    //public $resultados = [];

    // public function updatedSearch()
    // {
    //     // Simular la búsqueda en una base de datos o un array local
    //     $data = [
    //         'Laravel', 'Livewire', 'Vue.js', 'React', 'Alpine.js', 'Tailwind CSS'
    //     ];

    //     $this->resultados = array_filter($data, function ($item) {
    //         return str_contains(strtolower($item), strtolower($this->search));
    //     });
    // }
    public function render()
    {
      
        return view('livewire.search-appointment',[
            'Citas'=>Cita::where('id',$this->search)->get()
        ]);
    }
}
