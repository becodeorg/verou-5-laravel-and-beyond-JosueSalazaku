@vite('resources/css/app.css')
@extends('layouts')
@section('content')
    <main class="w-screen h-screen bg-black">
        <h1 class="text-2xl font-semibold">User's Notes</h1>
        <ul class="w-30 flex flex-row justify-center m-9">
            @foreach($notes as $note)
                <li class="my-5 border border-blue-700 rounded-lg text-gray-50 p-12 px-5 w-36 m-5">
                    <strong>{{ $note->title }}</strong>
                    <p>{{ $note->content }}</p>
                    <p>{{ $note->created_at }}</p> 
                </li>
            @endforeach
        </ul>
        
    </main>
@endsection