<?php
namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    public function notes()
    {
        $notes = Note::latest()->get();
        return view('notes.notes', compact('notes'));

    }


}
