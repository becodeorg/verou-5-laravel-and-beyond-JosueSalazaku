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

Route::get('/notes', [NoteController::class, 'notes'])->name('notes.notes');
Route::post('/notes', [NoteController::class, 'store'])->name('notes.store');

Route::get('/showRegister', function() {
    return view('showRegister');
})->name('showRegister');;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

