<?php

use Illuminate\Support\Facades\Route;

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
use App\Http\Controllers\NoteController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\loginController;

//Notes
Route::get('/notes', [NoteController::class, 'notes'])->name('notes.notes');
Route::post('/notes', [NoteController::class, 'store'])->name('notes.store');
Route::delete('/notes{id}', [NoteController::class, 'destroy'])->name('notes.destroy');

Route::get('/handleRegister', [RegisterController::class, 'create'])->name('handleRegister');
Route::post('/handleRegister', [RegisterController::class, 'create'])->name('handleRegister');

Route::get('/login', [loginController::class, 'showLoginForm'])->name('login');
Route::get('/login', 'loginController@showLoginForm')->name('login');
Route::post('/login', 'loginController@login');

Route::get('/handleRegister', function()
{
    return view('handleRegister');
})->name('handleRegister');


Route::get('/', function () 
{
    return view('welcome');
})->name('welcome');





