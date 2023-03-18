<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function(){
    return view('home');
})->name('home');

Route::get('/login', function(){
    if (Auth::check()){
        return redirect(route('data'));
    }
    return view('login');
})->name('login');

Route::post('/login', [LoginController::class, 'login']);

Route::get('/data', function(){
    return view('data');
})->middleware('auth')->name('data');