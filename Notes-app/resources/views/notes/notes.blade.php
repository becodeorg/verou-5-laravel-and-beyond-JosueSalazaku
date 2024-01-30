@vite('resources/css/app.css')
@extends('layouts')
@section('content')
    <div class="container mx-auto mt-8">
        <h1>Notes Page</h1>

        <!-- Display existing notes -->
        <ul>
            @foreach($notes as $note)
                <li>
                    <strong>{{ $note->title }}</strong>
                    <p>{{ $note->content }}</p>
                </li>
            @endforeach
        </ul>
    </div>
@endsection