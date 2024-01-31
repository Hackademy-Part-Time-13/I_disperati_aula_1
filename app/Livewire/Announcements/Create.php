<?php

namespace App\Livewire\Announcements;

use App\Jobs\AddWatermark;
use Livewire\Component;
use App\Jobs\RemoveFaces;

use App\Jobs\ResizeImage;
use App\Models\Announcement;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;
use App\Jobs\GoogleVisionLabelImage;
use App\Jobs\GoogleVisionSafeSearch;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Livewire\Attributes\On;

class Create extends Component
{

    use WithFileUploads;

    #[Validate('required', message: 'Inserisci un titolo valido')]
    #[Validate('max:60', message: 'Titolo troppo lungo')]
    #[Validate('min:3', message: 'Titolo troppo corto')]
    public $title;

    #[Validate('required', message: 'Inserisci una descrizione valido')]
    #[Validate('min:3', message: 'Descrizione troppo corto')]
    public $description;

    #[Validate('required', message: 'Inserisci una categoria valida')]
    // #[Validate('selected', message: 'Inserisci una categoria valido')]
    #[Validate('gt:0', message: 'Seleziona una categoria valida')]
    public $category_id;

    #[Validate('required', message: 'Inserisci un prezzo valido')]
    #[Validate('min:1', message: 'Il prezzo non può essere nullo')]
    #[Validate('numeric', message: 'Il prezzo deve contenere numeri')]
    #[Validate('max:999999', message: 'Il prezzo è troppo alto')]
    public $price;
    public $announcement;

    public $images = [];
    public $image;
    public $temporary_images;

    protected $rules = [
        'images.*' => 'image|max:3000',
        'temporary_images.*' => 'image|max:3000',
    ];

    protected $messages = [

        'temporary_images.required' => 'L\'immagine è richiesta',
        'temporary_images.*.image' => 'I file devono essere immagini',
        'temporary_images.*.max' => 'L\'immagine dev\' essere massimo di 3 MG',
        'images.image' => 'L\'immagine dev\'essere un\'immagine',
        'images.max' => 'L\'immagine dev\'essere massimo di 3 MG',

    ];

    public function removeImage($key) {
        if (in_array($key, array_keys($this->images))) {
            unset($this->images[$key]);
        }
    }






    public function store(){

        $this->dispatch('refreshAnnouncements')->to('announcements.index');
        $this->validate();


        if($this->category_id == null){
            return;
        }else{
            $this->announcement=Announcement::create([
                'title' => $this->title,
                'description' => $this->description,
                'category_id' => $this->category_id,
                'price' => $this->price,
                'user_id' => auth()->user()->id,
            ]);

            // if(count($this->images)){
            //     foreach ($this->images as $image){
            //         $this->announcement->images()->create(['path'=>$image->store('images', 'public')]);
            //     }
            // }
            if(count($this->images)){
                foreach ($this->images as $image) {


                $newFileName = "announcements/{$this->announcement->id}";
                $newImage = $this->announcement->images()->create(['path'=>$image->store($newFileName, 'public')]);

               

                RemoveFaces::withChain([
                    new ResizeImage($newImage->path , 300 , 300),
                    new GoogleVisionSafeSearch($newImage->id),
                    new GoogleVisionLabelImage($newImage->id),
                    // new AddWatermark($newImage->id)

                    ])->dispatch($newImage->id);
                }

                File::deleteDirectory(storage_path('/app/livewire-tmp'));

            }

        session()->flash('success','Annuncio creato correttamente, sarà pubblicato dopo la revisione');
        $this->reset();
    }
    }

    #[On('edit')]
    public function edit(Announcement $announcement){
    }



    public function updated($propertyName){
        $this->validateOnly($propertyName);
    }

    public function updatedTemporaryImages() {
        if ($this->validate([
            'temporary_images.*'=>'image|max:2400',
            ])) {
                foreach ($this->temporary_images as $image) {
                    $this->images[] = $image;
                }
            }
        }

        public function render()
        {
            return view('livewire.announcements.create');
        }


    }
