<div>
    <!-- No surplus words or unnecessary actions. - Marcus Aurelius -->
</div>
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
<body class="font-sans">
    <header>
        <!-- Your header content goes here -->
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
                <!-- Add more navigation links as needed -->
            </ul>
        </nav>
    </header>

    <main class="container mx-auto mt-8">
        <!-- Your main content goes here -->
        @yield('content')
    </main>

    <footer class="mt-8">
        <!-- Your footer content goes here -->
        <p>&copy; {{ date('Y') }} Your Website</p>
    </footer>
</body>
</html>
