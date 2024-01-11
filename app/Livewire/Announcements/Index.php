<?php

namespace App\Livewire\Announcements;

use Livewire\Component;
use Livewire\Attributes\On;
use App\Models\Announcement;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    #[On('refreshAnnouncements')]
    public function render()
    {
        $announcements = Announcement::orderBy('created_at', 'DESC')->paginate(8);
        return view('livewire.announcements.index', compact('announcements'));
    }
}
