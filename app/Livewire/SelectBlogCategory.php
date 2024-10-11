<?php

namespace App\Livewire;

use Livewire\Component;

class SelectBlogCategory extends Component
{
    public $selectedOption1;
    public $options1;

    public function mount()
 {
        $this->options1 = [ 'Choose Blog Category', 'Health Care', 'Child', 'Safety' ];
    }
    public function render()
    {
        return view('livewire.select-blog-category');
    }
}
