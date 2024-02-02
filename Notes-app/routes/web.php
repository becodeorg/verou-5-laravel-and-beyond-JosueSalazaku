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

//Notes
Route::get('/notes', [NoteController::class, 'notes'])->name('notes.notes');
Route::post('/notes', [NoteController::class, 'store'])->name('notes.store');
Route::delete('/notes{id}', [NoteController::class, 'destroy'])->name('notes.destroy');

Route::get('/handleRegister', function()
{
    return view('handleRegister');
})->name('handleRegister');;

Route::get('/', function () 
{
    return view('welcome');
})->name('welcome');

