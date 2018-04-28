<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Events\ModuleChange;
use App\User;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {

    if(Auth::check()){

        return redirect("/home");

    }

    return view('auth.login');

});

Route::get('/broadcastTest',function(){

    $user = User::all()->first();
    $room = $user->room();
    $module = $room->modules()->first();
    event(new ModuleChange($module));

    return redirect("/home");

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');