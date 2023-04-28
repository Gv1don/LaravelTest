<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController
{
    public function index(){
        $sort_order = 'asc';
        $users = DB::table('visits')->get();
        return view('data', ['users' => $users, 'sort_order' => $sort_order]);
    }

    public function sortIP(Request $request){
        $sort_order = $request->input('sort_order', 'asc');
        $users = DB::table('visits')->orderBy('ip', $sort_order)->get();
        $next_sort_order = ($sort_order == 'asc') ? 'desc' : 'asc';
        return view('data', ['users' => $users, 'sort_order' => $next_sort_order]);
    }

    public function sortVisit(Request $request){
        $sort_order = $request->input('sort_order', 'asc');
        $users = DB::table('visits')->orderBy('visit_time', $sort_order)->get();
        $next_sort_order = ($sort_order == 'asc') ? 'desc' : 'asc';
        return view('data', ['users' => $users, 'sort_order' => $next_sort_order]);
    }
}
