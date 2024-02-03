<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NoteController extends Controller
{
    public function notes()
    {
        // Check if the user is authenticated
        if (auth()->check()) {
            // Get the authenticated user
            $user = auth()->user();

            // Fetch notes only for the authenticated user
            $notes = $user->notes()->latest()->get();

            return view('notes.notes', compact('notes'));
        }

        // Handle the case when the user is not authenticated (e.g., redirect to login)
        return redirect()->route('login');
    }

    public function store(Request $request)
    {
        // Validate the incoming data request
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
        ]);

        // Create a new note associated with the authenticated user
        $user = Auth::user();

        $note = $user->notes()->create([
            'title' => $validatedData['title'],
            'content' => $validatedData['content'],
        ]);

        return redirect()->route('notes.notes')->with('Note Added Successfully!');
    }

    public function destroy($id)
    {
        $note = Note::findOrFail($id);
        $note->delete();

        return redirect()->route('notes.notes')->with("Note Deleted Successfully!");
    }
}
