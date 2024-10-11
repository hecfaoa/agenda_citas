<?php

namespace App\Livewire;


use App\Models\Cita;
use Livewire\Component;

class SearchUsers extends Component
{
    public $search;

    public function mount($search)
    {
        $this->search = $search;
    }

    public function render()
    {
        if ($this->search == '') {
            return view('livewire.search-users', [
                'users' => Cita::all(),
            ]);
        }
        return view('livewire.search-users', [
            'users' => Cita::where('id', $this->search)->get(),
        ]);
    }
}
