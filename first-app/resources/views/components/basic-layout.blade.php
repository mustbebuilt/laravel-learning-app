<!-- resources/views/components/basic-layout.blade.php -->

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>
</head>

<body>
    <header>
        <!-- Your header content goes here -->
        <h1>{{ $header }}</h1>
    </header>

    <main>
        <!-- The dynamic main content goes here -->
        {{ $slot }}
    </main>

    <footer>
        <!-- Your footer content goes here -->
        <p>&copy; {{ date('Y') }} My Laravel App</p>
    </footer>
</body>

</html>