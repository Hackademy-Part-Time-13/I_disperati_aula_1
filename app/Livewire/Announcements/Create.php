<?php

namespace App\Livewire\Announcements;

use Livewire\Component;

class Create extends Component
{

    public $categories;
    
    public function store(){
        // $categories = Category::all();
    }

    public function render()
    {
        return view('livewire.announcements.create');
    }
}
