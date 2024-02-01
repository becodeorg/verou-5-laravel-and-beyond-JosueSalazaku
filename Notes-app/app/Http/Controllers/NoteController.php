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

    public function store(Request $request)
    {
        //validate the incomiong data request
        $validateData = $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
        ]);

        //create new not using the validation data
        Note::create([
            'title' => $validateData['title'],
            'content' => $validateData['content'],
        ]);

        return redirect()->route('notes.notes')->with('Note Added J!');
    }

    public function destroy($id)
    {
        $note = Note::findOrFail($id);
        $note->delete();

        return redirect()->route('notes.notes')->with("Note Deleted Bro!");
    }


}
