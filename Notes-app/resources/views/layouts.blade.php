<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <title>Crud App</title>
    <!-- Additional head elements such as stylesheets, scripts, etc. -->
</head>
<body class="font-sans flex flex-col min-h-screen">
    <header class="w-full h-20 flex items-center justify-around bg-sky-800 text-white">
        <!-- Your header content goes here -->
        <nav class="w-full">
            <ul class="flex flex-row justify-around">
                <li class="mx-4"><a href="#">Home</a></li>
                <li class="mx-4"><a href="#">About</a></li>
                <li class="mx-4"><a href="#">Contact</a></li>
                <!-- Add more navigation links as needed -->
            </ul>
        </nav>
    </header>

    <main class="container mx-auto mt-8 flex-grow">
        <!-- Your main content goes here -->
        @yield('content')
    </main>

    <footer class="mt-8 bg-gray-800 text-white py-4">
        <!-- Your footer content goes here -->
        <p class="text-center">&copy; {{ date('Y') }} Your Website</p>
    </footer>
</body>
</html>
