<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{


  public function edit(){
    // dd(Auth::user());
    return view('user.edit');

  }

  public function update(Request $request){
    Auth::user()->update([
        'name' => $request->name,
        'phone' => $request->phone,
    ]);

    return redirect()->route('user.announcements');

  }

}
