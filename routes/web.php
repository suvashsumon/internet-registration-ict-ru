<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use PhpParser\Node\Expr\FuncCall;

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

Route::get('/', function () {
    return view('layouts.users.registration');
});


Auth::routes();

Route::get('/home',function(){
    return redirect('/admin');
})->name('home');

Route::prefix('admin')->group(function () {
    Route::get('/users',function(){
        return view('vendor.index');
    })->name('users.index');
});
