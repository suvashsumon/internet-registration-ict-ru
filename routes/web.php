<?php

use App\Http\Controllers\RequestsController;
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
    Route::get('/requests',[RequestsController::class,'index'])->name('requests.index');
    Route::get('/requests/users',[RequestsController::class,'users'])->name('requests.users');
    Route::get('/requests/deleted_users',[RequestsController::class,'deletedUsers'])->name('requests.deleted.users');
    Route::get('/requests/approve/{id}',[RequestsController::class,'approve'])->name('requests.approve');
    Route::get('/requests/cancel/{id}',[RequestsController::class,'cancel'])->name('requests.cancel');
    Route::get('/requests/information/{id}',[RequestsController::class,'getInformation'])->name('requests.getInformation');
});