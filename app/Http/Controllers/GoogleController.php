<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class GoogleController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        try{
        $users = Socialite::driver('google')->user();
        
        $findusers = User::where('google_id', $users->getId())->first();
        if($finduser){
            Auth::login($finduser);
            return redirect()->intended('/dashboarduser');
        }else {
            $newUsers = User::create([
                'name' => $users->name,
                'username' => $users->username,
                'email' => $users->email,
                'google_id'=> $users->id,
                'password' => bcrypt('12345678')
            ]);

            Auth::login($newUsers);
            return redirect()->intended('/dashboarduser'); 
        }
    }catch(\Throwable $th){
        
    }
    }
}
