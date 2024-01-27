<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Mail\LavoraMail;
use App\Models\Category;
use App\Models\Announcement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\App;

class PageController extends Controller
{
    public function home(){
        $announcements = Announcement::all();
        // ultimi 6 annunci
        $last_announcements = Announcement::where('is_accepted',true)->latest()->take(4)->get();
        return view ('welcome', compact('announcements','last_announcements'));
    }

    public function all(){
        $announcements = Announcement::orderBy('created_at', 'DESC')->where('is_accepted', true)->paginate(9);
        return view('announcements.all', compact('announcements'));
    }

    public function show(Announcement $announcement){
        return view('announcements.show', compact('announcement'));
    }

    //pagina Lavora con noi con form
    public function lavoraConNoi(){
        return view('lavora');
    }

    public function searchAnnouncements(Request $request){
        $announcements = Announcement::search($request->searched)->orderBy('created_at', 'DESC')->where('is_accepted', true)->paginate(10);

        //mostra solo gli annunci revisionati ed accettati

        return view('announcements.all', compact('announcements'));

    }

    public function setLanguage($lang){

        $language = App::setLocale($lang);

        // dd(App::getLocale());




		session()->put('locale', $lang);

        // dd(session('locale'));

		 return redirect()->back();
	}



}
