<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Tasks for Today')</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fff0f6;
            color: #3b2447;
            margin: 0;
        }

        .container {
            width: 80%;
            max-width: 900px;
            margin: 40px auto;
            background-color: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 3px 10px rgba(126, 34, 122, 0.2);
        }

        h1 {
            color: #9d174d;
        }

        h2 {
            color: #7e22ce;
        }

        nav {
            background-color: #7e22ce;
            padding: 15px;
            border-radius: 8px;
            margin: 20px 0;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin-right: 18px;
            font-weight: bold;
        }

        nav a:hover {
            color: #fbcfe8;
            text-decoration: underline;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th {
            background-color: #9d174d;
            color: white;
            padding: 12px;
            text-align: left;
        }

        td {
            padding: 12px;
            border-bottom: 1px solid #f3c4df;
        }

        tr:hover {
            background-color: #fdf2f8;
        }

        .task-list {
            list-style: none;
            padding: 0;
        }

        .task-list li {
            background-color: #fdf2f8;
            border-left: 5px solid #ec4899;
            margin: 10px 0;
            padding: 14px;
            border-radius: 6px;
        }

        .status {
            color: #9333ea;
            font-weight: bold;
        }
    </style>
</head>
<body>

    <div class="container">

        <h1>Tasks for Today Management System</h1>

        <nav>
            <a href="{{ route('welcome') }}">Welcome</a>
            <a href="{{ route('tasks.index') }}">All Tasks</a>
            <a href="{{ route('profile') }}">Profile</a>
            <a href="{{ route('about') }}">About</a>
        </nav>

        @yield('content')

    </div>

</body>
</html>