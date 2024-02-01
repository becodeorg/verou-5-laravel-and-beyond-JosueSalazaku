<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <title>Notes App</title>
    <!-- Additional head elements such as stylesheets, scripts, etc. -->
</head>
<body class="font-sans flex flex-col min-h-screen bg-black absolute inset-0 h-full w-full bg-[linear-gradient(to_right,#80808012_1px,transparent_1px),linear-gradient(to_bottom,#80808012_1px,transparent_1px)] bg-[size:24px_24px]">
    <div class="bg-gradient-to-br from-[rgba(128,128,128,0.1)] via-transparent to-[rgba(128,128,128,0.1)] relative z-10">
        <header class="w-full h-20 flex items-center justify-around bg-black border-b-4 border-indigo-500  text-white">
            <nav class="w-full flex flex-row">
                <ul class="flex flex-row mx-72 ">
                    <li class="mx-2"><a href="{{ route('welcome') }}">Home</a></li>
                </ul>
                <ul class="flex flex-row">
                    <li class="mx-10"><a href="">Users</a></li>
                    <li class="mx-10"><a href="{{ route('notes.notes') }}">Notes</a></li>
                </ul>
                <ul class="flex flex-row ml-40">
                    <li class=" w-24 border-b-4 border-indigo-500 "><a href="#">Login</a></li>
                    <li class="w-24 border-b-4 border-indigo-500 mx-10"><a href="{{ route('showRegister') }}">Register</a></li>
                </ul>
            </nav>
        </header>
    </div>

    <main class="container mx-auto mt-8 flex-grow">
        @yield('content')
    </main>

    <footer class="mt-8 bg-indigo-950 text-white py-4">
        <!-- Your footer content goes here -->
        <p class="text-center">&copy; {{ date('Y') }} Your Website</p>
    </footer>
</body>
</html>
