<?php

namespace App\Livewire;

use App\Models\Like;
use Livewire\Component;

class Likes extends Component
{

    public $announcement;
    public $like;

    // implementazione Like
    public function createLike(){
        Like::create([
            'user_id' => auth()->user()->id,
            'announcement_id' => $this->announcement->id,
        ]);
    }

    // togliere Like
    public function deleteLike(){
        $announcements = Like::where('announcement_id', $this->announcement->id)->where('user_id', auth()->user()->id)->get();
        foreach($announcements as $announcement){
            $announcement->delete();
        }
    }


    public function render()
    {
        return view('livewire.likes');
    }
}
