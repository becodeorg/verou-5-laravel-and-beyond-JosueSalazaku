@vite('resources/css/app.css')
@extends('layouts')
@section('content')
<main class="min-h-screen flex-grow">
    <h1 class="text-2xl font-semibold text-gray-50">User's Notes</h1>
    <ul class="w-30 flex flex-row justify-center m-9">
        @foreach($notes as $note)
            <li class="my-5 border card-shine-effect rounded-lg drop-shadow-xl  text-gray-50 p-12 px-5 w-36 m-5">
                <strong>{{ $note->title }}</strong>
                <p>{{ $note->content }}</p>
                <p>{{ $note->created_at }}</p> 
            </li>
        @endforeach
    </ul>
</main>

@endsection