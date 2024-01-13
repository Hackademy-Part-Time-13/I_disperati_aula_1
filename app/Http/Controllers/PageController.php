<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(){
        return view ('welcome');
    }

    public function all(){
        $announcements = Announcement::orderBy('created_at', 'DESC')->paginate(9);
        return view('announcements.all', compact('announcements'));
    }

    public function show(Announcement $announcement){

        return view('announcements.show', compact('announcement'));
    }
}
