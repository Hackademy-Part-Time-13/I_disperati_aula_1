<?php

namespace App\Livewire\Announcements;

use Livewire\Component;
use App\Models\Announcement;
use Livewire\Attributes\Validate;

class Create extends Component
{
    #[Validate('required', message: 'Inserisci un titolo valido')]
    #[Validate('min:3', message: 'Titolo troppo corto')]
    public $title;

    #[Validate('required', message: 'Inserisci una descrizione valido')]
    #[Validate('min:3', message: 'Descrizione troppo corto')]
    public $description;

    #[Validate('required', message: 'Inserisci una categoria valido')]
    public $category_id;

    #[Validate('required', message: 'Inserisci un prezzo valido')]
    #[Validate('min:0', message: 'Inserisci un prezzo valido')]
    public $price;

    public $image;
    

    public function store(){
        
        $this->dispatch('refreshAnnouncements')->to('announcements.index');
        $this->validate();
        Announcement::create([
            'title' => $this->title,
            'description' => $this->description,
            'category_id' => $this->category_id,
            'price' => $this->price,
            'image' => $this->image,
        ]);
        session()->flash('success','Annuncio creato correttamente');
        $this->reset();
    }

    public function render()
    {
        return view('livewire.announcements.create');
    }
}
