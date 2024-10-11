<?php

namespace App\Livewire;

use Livewire\Component;

class SelectBlogSubCategory extends Component
 {
    public $selectedOption1;
    public $options1;

    public function mount()
 {
        $this->options1 = [ 'Choose Sub Blog Category', 'Health Care', 'Corona Virus' ];
    }

    public function render()
 {
        return view( 'livewire.select-blog-sub-category' );
    }
}
