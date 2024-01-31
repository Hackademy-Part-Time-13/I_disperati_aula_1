<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnnouncementController extends Controller
{
    public function index(){
        return view('announcements.index');
    }

    public function userAnn(){
        return view('announcements.user-ann');
    }

    public function edit(){

    }

    public function update(){

    }

    public function destroy(){

    }

}
