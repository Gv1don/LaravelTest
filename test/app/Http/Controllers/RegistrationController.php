<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class RegistrationController
{
    public function registration(Request $request){   

        $email = $request->input('email');
        $user = User::where('email', $email)->first();

        if($user){
            return redirect()->route('home');
        };

        $password = $request->input('password');
        $confirm = $request->input('confirm-password');

        if($password == $confirm){
            $user = new User();
            $user->email = $email;
            $user->password = $password;
            $user->save();
            return redirect()->route('login');
        }

        return redirect()->route('registration');
    }
}
