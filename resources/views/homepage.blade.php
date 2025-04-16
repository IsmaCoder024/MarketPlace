<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="/build/css/homeStyle.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="header">
        <nav>
            <li>Home</li>
            <li><a href="{{ route('register') }}">Signup</a></li>
            <li><a href="{{ route('login') }}">Login</a></li>
            <li><a href="{{ route('about') }}">About</a></li>
            <li>Others</li>
        </nav>
    </div>
</body>
</html>