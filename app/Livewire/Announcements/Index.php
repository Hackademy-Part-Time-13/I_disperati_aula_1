<?php

namespace App\Livewire\Announcements;

use Livewire\Component;
use Livewire\Attributes\On;
use App\Models\Announcement;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Auth;

class Index extends Component
{
    use WithPagination;
    #[On('refreshAnnouncements')]
    public function render()
    {

        $acceptedAnnouncements = Announcement::where([['is_accepted',true],['user_id',Auth::id()]])->orderBy('created_at', 'DESC')->paginate(8);
        $rejectedAnnouncements = Announcement::where([['is_accepted',false],['user_id',Auth::id()]])->orderBy('created_at', 'DESC')->paginate(8);
        $pendingAnnouncements = Announcement::where([['is_accepted',null],['user_id',Auth::id()]])->orderBy('created_at', 'DESC')->paginate(8);

        return view('livewire.announcements.index', compact('acceptedAnnouncements','rejectedAnnouncements','pendingAnnouncements'));
    }

    public function edit(Announcement $announcement){
        $this->dispatch('edit', $announcement)->to('announcements.create');

    }

    public function destroy(Announcement $announcement){
        $announcement->delete();
            session()->flash('success','Annuncio eliminato correttamente');

    }


}
