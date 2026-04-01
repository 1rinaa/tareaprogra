<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Library')</title>
    <style>
        * { box-sizing: border-box; margin: 0; padding: 0; }

        body {
            font-family: Arial, sans-serif;
            background: #f4f6f8;
            color: #333;
        }

        nav {
            background: #04203b;
            padding: 30px 40px;
            display: flex;
            gap: 35px;
            justify-content: center;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            font-size: 17px;
            letter-spacing: 1px;
            font-weight: 500;
        }

        nav a:hover {
            color: #7ed9e9;
            text-decoration: underline;
        }

        .container {
            max-width: 960px;
            margin: 40px auto;
            background: #fff;
            padding: 35px;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.08);
        }

        h1 {
            color: #1a252f;
            margin-bottom: 20px;
            font-size: 26px;
        }

        h2 {
            color: #2c3e50;
            margin: 20px 0 10px;
            font-size: 20px;
        }

        ul {
            list-style: none;
            padding: 0;
        }

        ul li {
            padding: 12px 0;
            border-bottom: 1px solid #eee;
        }

        ul li:last-child {
            border-bottom: none;
        }

        a {
            color: #2980b9;
            text-decoration: none;
        }

        a:hover {
            color: #e74c3c;
        }

        .badge {
            background: #1a252f;
            color: #fff;
            padding: 3px 10px;
            border-radius: 12px;
            font-size: 12px;
            margin-left: 8px;
        }

        .info-table {
            width: 100%;
            border-collapse: collapse;
            margin: 15px 0;
        }

        .info-table td {
            padding: 10px 15px;
            border-bottom: 1px solid #eee;
        }

        .info-table td:first-child {
            font-weight: bold;
            color: #1a252f;
            width: 160px;
        }

        .btn {
            display: inline-block;
            margin-top: 25px;
            padding: 10px 20px;
            background: #1a252f;
            color: #fff;
            border-radius: 5px;
        }

        .btn:hover {
            background: #e74c3c;
            color: #fff;
        }

        .subtitle {
            color: #888;
            font-size: 13px;
            margin-top: 3px;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 18px;
            max-width: 500px;
            margin-top: 20px;
        }

        form div {
            display: flex;
            flex-direction: column;
            gap: 6px;
        }

        form label {
            font-weight: bold;
            color: #1a252f;
            font-size: 14px;
        }

        form input[type="text"],
        form input[type="number"],
        form select {
            padding: 10px 12px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 15px;
            background: #fafafa;
            transition: border 0.2s;
        }

        form input[type="text"]:focus,
        form input[type="number"]:focus,
        form select:focus {
            border-color: #2980b9;
            outline: none;
            background: #fff;
        }

        form .btn {
            margin-top: 5px;
            width: fit-content;
            cursor: pointer;
            border: none;
            font-size: 15px;
        }

        form a.btn {
            background: #888;
        }

        form a.btn:hover {
            background: #555;
        }

        .error {
            color: #e74c3c;
            font-size: 12px;
        }

        .form-actions {
            display: flex;
            flex-direction: row;
            gap: 10px;
            margin-top: 5px;
        }

        .form-actions .btn {
            margin-top: 0;
        }

        .page-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .page-header .btn {
            margin-top: 0;
        }

        footer {
            color: #606060;
            text-align: center;
            padding: 20px;
            margin-top: 40px;
            font-size: 13px;
        }

        footer strong {
            color: #2e2e2e;
        }

        .special-subtitle {
            padding-top: 10px;
            padding-bottom: 10px;
            color: #2b2b2b;
        }
    </style>
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