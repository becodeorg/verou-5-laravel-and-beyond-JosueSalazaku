@vite('resources/css/app.css')
        @extends('layouts')

@section('content')
    <!-- Your specific page content goes here -->
    <main class="h-full text-white flex flex-col justify-center items-center">
    <h1 class=" text-6xl flex justify-center items-center">Register</h1>
    <section class="bg-indigo-500 mt-20 w-96 h-9§ border border-indigo-500 rounded-2xl">
    <form class="flex  flex-col mt-5 justify-center items-center " action="">
        <label class="mt-5 mr-60" for="email">Name</label>
        <input class="w-80 bg-indigo-950 my-3 h-14 rounded-xl p-2 " type="text" placeholder="John">
        <label class="mt-5 mr-60" for="email">Email</label>
        <input class="w-80 bg-indigo-950 my-3 h-14 rounded-xl p-2 " type="text" placeholder="example@email.com">
        <label class="mt-3 mr-52" for="email">Password</label>
        <input class="w-80 bg-indigo-950 my-3 h-14 rounded-xl p-2" type="password">
        <label class="mt-3 mr-36" for="email">Confirm password</label>
        <input class="w-80 bg-indigo-950 my-3 h-14 rounded-xl p-2" type="password">
        <button class="w-72 h-12 rounded-2xl bg-white text-indigo-800 my-10 text-meduim font-semibold">Register</button>
    </form>
    </section>
    </main>
@endsection