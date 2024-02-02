@vite('resources/css/app.css')
@extends('layouts')

@section('content')
    <!-- Your specific page content goes here -->
    <main class="h-full text-white flex flex-col justify-center items-center">
        <h1 class="text-6xl flex justify-center items-center">Register</h1>
        <section class="bg-indigo-500 mt-20 w-96 border border-indigo-500 rounded-2xl p-5">
            <form class="flex flex-col mt-5 justify-center items-center" action="{{ route('handleRegister') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="name" class="mr-60">Name</label>
                    <input class="w-80 bg-indigo-950 my-3 h-14 rounded-xl p-2 @error('name') border border-red-500 @enderror" type="text" name="name" placeholder="John" value="{{ old('name') }}">
                    @error('name')
                        <div class="text-red-500 text-sm">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="email" class="mr-60">Email</label>
                    <input class="w-80 bg-indigo-950 my-3 h-14 rounded-xl p-2 @error('email') border border-red-500 @enderror" type="text" name="email" placeholder="example@email.com" value="{{ old('email') }}">
                    @error('email')
                        <div class="text-red-500 text-sm">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="password" class="mr-36">Password</label>
                    <input class="w-80 bg-indigo-950 my-3 h-14 rounded-xl p-2 @error('password') border border-red-500 @enderror" type="password" name="password">
                    @error('password')
                        <div class="text-red-500 text-sm">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="password_confirm" class="mr-36">Confirm password</label>
                    <input class="w-80 bg-indigo-950 my-3 h-14 rounded-xl p-2 @error('password_confirm') border border-red-500 @enderror" type="password" name="password_confirm">
                    @error('password_confirm')
                        <div class="text-red-500 text-sm">{{ $message }}</div>
                    @enderror
                </div>

                <button class="w-72 h-12 rounded-2xl bg-white text-indigo-800 my-10 text-medium font-semibold">Register</button>
            </form>
        </section>
    </main>
@endsection
