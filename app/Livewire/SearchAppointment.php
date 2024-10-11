<?php

namespace App\Livewire;

use App\Models\Cita;
use Livewire\Component;

class SearchAppointment extends Component
{
    public $search;



    public function render()
    {
      
        return view('livewire.search-appointment',[
            'Citas'=>Cita::where('id',5)->get()
        ]);
    }
}
