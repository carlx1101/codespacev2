<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/*------------------------------------------
--------------------------------------------
All Normal Learner Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:learner'])->group(function () {
    Route::get('/template', function () {
        return view('layouts.template');
    }); 
    Route::get('/home', [HomeController::class, 'index'])->name('home');
});
  
/*------------------------------------------
--------------------------------------------
All Tutor Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:tutor'])->group(function () {
  
    Route::get('/tutor/home', [HomeController::class, 'tutorHome'])->name('tutor.home');
});
  
/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:admin'])->group(function () {
    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');
});
