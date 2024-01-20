<?php

namespace App\Livewire\Announcements;

use Livewire\Component;
use App\Models\Announcement;
use Livewire\Attributes\Validate;

class Create extends Component
{

    // public function rules(){
    //     return [
    //         'email'=> [
    //             'required',
    //             'email',
    //             Rule::unique('users')->ignore($this->user),
    //         ]
    //     ];
    // }
    
    #[Validate('required', message: 'Inserisci un titolo valido')]
    #[Validate('max:60', message: 'Titolo troppo lungo')]
    #[Validate('min:3', message: 'Titolo troppo corto')]
    public $title;
    
    #[Validate('required', message: 'Inserisci una descrizione valido')]
    #[Validate('min:3', message: 'Descrizione troppo corto')]
    public $description;
    
    #[Validate('required', message: 'Inserisci una categoria valida')]
    // #[Validate('selected', message: 'Inserisci una categoria valido')]
    public $category_id;
    
    #[Validate('required', message: 'Inserisci un prezzo valido')]
    #[Validate('min:1', message: 'Il prezzo non può essere nullo')]
    #[Validate('numeric', message: 'Il prezzo deve contenere numeri')]
    #[Validate('max:999999', message: 'Il prezzo è troppo alto')]
    public $price;
    
    public $image;




//     public function rules(): array
//     {
//         return  [
//        'title' => 'required|max:10',
//        'category_id' => 'required',
//         'description' => 'required|max:150',
//      ];

//   }

//     public function messages(){
//         return [
//             'title.max' => 'Hai inserito troppi caratteri',
//             'title.unique' => 'Hai inserito un titolo già presente',
//             'category_id.required' => 'Hai inserito troppi caratteri',
//         ];
//     }





    

    public function store(){
        
        $this->dispatch('refreshAnnouncements')->to('announcements.index');
        $this->validate();
        if($this->category_id == null){
            return;
        }else{
        Announcement::create([
            'title' => $this->title,
            'description' => $this->description,
            'category_id' => $this->category_id,
            'price' => $this->price,
            'image' => $this->image,
            'user_id' => auth()->user()->id,
        ]);
        } 
        session()->flash('success','Annuncio creato correttamente');
        $this->reset();
    }

    public function render()
    {
        return view('livewire.announcements.create');
    }
}
