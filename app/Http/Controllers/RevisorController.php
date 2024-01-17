<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Mail\LavoraMail;
use App\Mail\becomeRevisor;
use App\Models\Announcement;
use Illuminate\Http\Request;
use App\Console\MakeUserRevisor;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Artisan;

class RevisorController extends Controller
{
    public function index(){

        $announcement_to_check = Announcement::where('is_accepted', null)->first();
        return view ('revisor.index', compact('announcement_to_check'));

    }

      public function acceptAnnouncement(Announcement $announcement){
         $announcement->setAccepted(true);
         return redirect()->back()->with('success', 'Complimenti, hai accettato l\'annuncio');
      }

      public function rejectAnnouncement(Announcement $announcement){
         $announcement->setAccepted(false);
         return redirect()->back()->with('error', 'Complimenti, hai rifiutato l\'annuncio');
      }

      public function becomeRevisor(){
         Mail::to('administrator@gmail.com')->send(new becomeRevisor(Auth::user()));
         return redirect()->back()->with('message', 'La tua richiesta per diventare Revisore è stata inviata correttamente');
      }


     public function makeRevisor(User $user){
      Artisan::call('presto:makeUserRevisor', ["email"=>$user->email]);
      return redirect()->route('home')->with('message', 'Complimenti! L\'utente è diventato Revisore!');
      }


      // funzione rotta post per mail form LAVORA CON NOI
      public function lavoraSave(User $user){
        
         $mail = new LavoraMail(Auth::user());
         Mail::to('administrator@gmail.com')->send($mail);
 
         return redirect()->back()->with('message', 'La tua richiesta per diventare Revisore è stata inviata correttamente');
      }


}
