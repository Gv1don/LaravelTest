<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegistrationController
{
    public function registration(Request $request){   

        $email = $request->input('email');
        $user = User::where('email', $email);

        if($user){
            return redirect()->route('login');
        };

        $user = new User();

        $user->email = $email;
        $user->password = $request->input('password');
        $password = $request->input('passsword');
        $confirm = $request->input('confirm-password');
        $user->save();

        return redirect()->route('login');
    }
}
