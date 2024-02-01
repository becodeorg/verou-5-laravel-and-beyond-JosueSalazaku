@vite('resources/css/app.css')
        @extends('layouts')

@section('content')
    <!-- Your specific page content goes here -->
    <main class="text-white flex flex-col justify-center items-center">
    <h1 class=" text-6xl flex justify-center items-center">Notes!</h1>
    <p class="flex justify-center items-center"">This is the home page content.</p>
    <section class="bg-indigo-500 mt-32 w-96 h-full border border-indigo-500 rounded-2xl">
    <form class="flex  flex-col mt-5 justify-center items-center" action="">
        <label class="mt-10 mr-60" for="email">Email</label>
        <input class="w-72 bg-indigo-950 my-3 h-14 rounded-xl " type="text">
        <label class="mt-3 mr-52" for="email">Password</label>
        <input class="w-72 bg-indigo-950 my-3 h-14 rounded-xl " type="password">
        <label class="mt-3 mr-36" for="email">Confirm password</label>
        <input class="w-72 bg-indigo-950 my-3 h-14 rounded-xl " type="password">
        <button class="w-72 h-12 rounded-2xl bg-indigo-900 my-8 text-2xl font-semibold">Register</button>
    </form>
    </section>
    </main>
@endsection