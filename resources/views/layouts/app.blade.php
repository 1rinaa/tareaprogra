<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Library')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

    <nav>
        <a href="{{ url('/') }}">Home</a>
        <a href="{{ route('books.index') }}">Books</a>
        <a href="{{ route('authors.index') }}">Authors</a>
        <a href="{{ route('publishers.index') }}">Publishers</a>
    </nav>

    <div class="container">
        @yield('content')
    </div>

    <footer>
        <p>Desarrollado por <strong>Irina Rivera Chavarría</strong></p>
    </footer>

</body>
</html>