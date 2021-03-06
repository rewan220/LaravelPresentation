<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ProfilController;
use App\Models\Profile;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MailController;

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
    return view('welcome');
});
Auth::routes();


Route::group(['middleware' => ['admin']], function () {

    Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin');
<<<<<<< HEAD
    Route::get('/admin/delete/{id}', [App\Http\Controllers\AdminController::class, 'destroy'])->name('admin.delete');
    Route::get('/job', [App\Http\Controllers\HomeController::class, 'sendaddmail'])->name('admin.job');
    Route::get('/addusers', [App\Http\Controllers\AdminController::class, 'showadduser'])->name('admin.addusers');
=======
    Route::get('/admin/delete/{id}' , [App\Http\Controllers\AdminController::class,'destroy'])->name('admin.delete');
    Route::get('/job' , [App\Http\Controllers\HomeController::class,'sendaddmail'])->name('admin.job');
    Route::get('/addusers' , [App\Http\Controllers\AdminController::class,'showadduser'])->name('admin.addusers');



>>>>>>> 657f72063665d84ad55de0a6a2e280a851895f98
});



Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
<<<<<<< HEAD
    Route::get('/users/{user}/profile', [App\Http\Controllers\ProfilController::class, 'index'])->name('user.index');
    Route::post('/users/{user}/profile', [App\Http\Controllers\ProfilController::class, 'update'])->name('user.update');
    Route::get('/users/{user}/mail', [App\Http\Controllers\MailController::class, 'index'])->name('user.mail');
    Route::post('/sendet', [App\Http\Controllers\MailController::class, 'sendEmailToUser'])->name('user.sendet');
});
=======
    Route::get('/users/{user}/profile',[App\Http\Controllers\ProfilController::class,'index'])->name('user.index');
    Route::post('/users/{user}/profile', [App\Http\Controllers\ProfilController::class,'update'])->name('user.update');
    Route::get('/users/{user}/mail', [App\Http\Controllers\MailController::class,'index'])->name('user.mail');
    Route::get('/sendet',[App\Http\Controllers\MailController::class,'sendEmailToUser'])->name('user.sendet');
});


>>>>>>> 657f72063665d84ad55de0a6a2e280a851895f98
