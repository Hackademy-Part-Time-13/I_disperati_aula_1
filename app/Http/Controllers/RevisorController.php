<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;

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

//       public function becomeRevisor(){
//       Mail::to('administrator@gmail.com')->send(new BecomeRevisor(Auth::user()));
//       return redirect()->back()->with('message', 'La tua richiesta per diventare Revisore è stata inviata correttamente');
//     }


//      public function makeRevisor(User $user){
//      Artisan::call('presto:makeUserRevisor', ["email"=>$user->email]);
//      return redirect()->back()->with('message', 'Complimenti! L'\Utente è diventato Revisore!');
//     }





}
