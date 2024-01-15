<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Announcement;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(){
        $announcements = Announcement::all();
        return view ('welcome', compact('announcements'));
    }

    public function all(){
        $announcements = Announcement::orderBy('created_at', 'DESC')->paginate(9);
        return view('announcements.all', compact('announcements'));
    }

    public function show(Announcement $announcement){
        return view('announcements.show', compact('announcement'));
    }

    //pagina Lavora con noi con form
    public function lavoraConNoi(){
        return view('lavora');
    }

    public function LavoraSave(Request $request){

    
    }
}
