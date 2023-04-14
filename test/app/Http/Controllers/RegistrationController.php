<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegistrationController
{
    public function registration(Request $request){   
        $user = new User();

        $user->email = $request->input('email');
        $user->password = $request->input('password');

        $user->save();

        return view('login');
    }
}
