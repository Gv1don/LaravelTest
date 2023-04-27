<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController
{
    public function index(){
        $users = DB::table('visits')->get();
        return view('data', ['users' => $users]);
    }
}
