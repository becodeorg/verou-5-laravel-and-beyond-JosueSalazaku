@vite('resources/css/app.css')
@extends('layouts')
@section('content')
<main class="min-h-screen flex-grow">
    <h1 class="text-2xl font-semibold text-gray-50">User's Notes</h1>

    <!-- Display existing notes -->
    <ul class="w-30 flex flex-row justify-center m-9">
        @foreach($notes as $note)
            <li class="my-5 border card-shine-effect rounded-lg drop-shadow-xl text-gray-50 p-12 px-5 w-36 m-5">
                <strong>{{ $note->title }}</strong>
                <p>{{ $note->content }}</p>
                <p>{{ $note->created_at }}</p> 
                <!-- Add delete button -->
                <form action="{{ route('notes.destroy', $note->id) }}" method="POST" class="mt-3">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-red-500 hover:text-red-700">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>

    <!-- Add a new note form -->
    <section class="text-white max-w-md mx-auto bg-indigo-500 p-8 rounded-md shadow-md mt-8">
        <h2 class="text-2xl font-semibold mb-4 text-white">Add a Note</h2>
        <form action="{{ route('notes.notes') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="title" class="block text-white text-sm font-medium mb-2">Title:</label>
                <input class="w-72 my-3 h-12 rounded-xl p-2 bg-indigo-950" type="text" name="title" id="title">
            </div>
            <div class="mb-4">
                <label for="content" class="block text-white text-sm font-medium mb-2">Content:</label>
                <textarea name="content" id="content" class="bg-indigo-950 p-2 w-full"></textarea>
            </div>
            <div class="flex justify-end">
                <button type="submit" class="rounded-2xl bg-white text-indigo-800 my-10 px-4 py-2">Add Note</button>
            </div>
        </form>
    </section>
</main>

@endsection
