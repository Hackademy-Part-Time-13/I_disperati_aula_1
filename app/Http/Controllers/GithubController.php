<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class GithubController extends Controller
{
    public function redirectToGithub(){
        return Socialite::driver('github')->redirect();
    }

    public function handleGithubCallback(){
        $userGithub = Socialite::driver('github')->stateless()->user();

        $findUser = User::where('github_id', $userGithub->id)->first();
        if($findUser){
            Auth::login($findUser);
            return redirect('/announcements');
        } else {
            $findUser = User::where('email', $userGithub->email)->first();
            if($findUser){
                $findUser->github_id = $userGithub->id;
                $findUser->save();
                Auth::login($findUser);
                return redirect('/announcements');
            } else {
                $newUser = User::create([
                    'name' => $userGithub->name,
                    'email' => $userGithub->email,
                    'password' => encrypt(''),
                    'github_id' => $userGithub->id
                ]);
                Auth::login($newUser);
                return redirect('/announcements');
            }
        }
    }
}
