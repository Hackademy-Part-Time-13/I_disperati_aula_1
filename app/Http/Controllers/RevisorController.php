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
      $announcement_to_check = Announcement::where('is_accepted', null)->where('user_id', '!=', Auth::user()->id)->first();
      // $announcement_to_check = Announcement::where('is_accepted', null)->first();
      return view ('revisor.index', compact('announcement_to_check'));
    }

   // accetta e rifiuta annuncio
      public function acceptAnnouncement(Announcement $announcement){
         $announcement->setAccepted(true);
         return redirect()->back()->with('success', 'Complimenti, hai accettato l\'annuncio');
      }
      public function rejectAnnouncement(Announcement $announcement){
         $announcement->setAccepted(false);
         return redirect()->back()->with('success', 'Complimenti, hai rifiutato l\'annuncio');
      }


      // per chiedere di diventare revisore
      public function becomeRevisor(){
         $message = 'Sistem message: Quick application';
         $user= User::where('id',auth()->user()->id);

         if (auth()->user()->is_revisor) {
            return redirect()->back()->with('error','Attenzione, sei già revisore!');
         } elseif (auth()->user()->is_ongoing) {
            return redirect()->back()->with('error','La tua richiesta è in corso, attendi la conferma!');
         } else {
            Mail::to('administrator@gmail.com')->send(new becomeRevisor(Auth::user(), $message));
         $user->update(['is_ongoing'=>true,]);
         return redirect()->back()->with('message', 'La tua richiesta per diventare Revisore è stata inviata correttamente');
         }


      }

      // per rendere revisore
     public function makeRevisor(User $user){
      Artisan::call('presto:makeUserRevisor', ["email"=>$user->email]);
      return redirect()->route('home')->with('message', 'Complimenti! L\'utente è diventato Revisore!');
      }


      // funzione rotta post per mail form LAVORA CON NOI
      public function lavoraSave(User $user){

         $user= User::where('id',auth()->user()->id);

         if (auth()->user()->is_revisor) {
            return redirect()->back()->with('error','Attenzione! Sei già revisore!');
         } elseif (auth()->user()->is_ongoing) {
            return redirect()->back()->with('error','La tua richiesta è in corso, attendi la conferma!');
         } else {
            $mail = new LavoraMail(Auth::user());
            Mail::to('administrator@gmail.com')->send($mail);
            $user->update(['is_ongoing'=>true,]);
            return redirect()->back()->with('message', 'La tua richiesta per diventare Revisore è stata inviata correttamente');
         }

      }

}
