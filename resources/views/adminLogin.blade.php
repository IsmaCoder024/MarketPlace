<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="/build/css/admin/login.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>
<body>
    <div class="admin">
        
    <li><a href="{{ route('home') }}">Home</a></li> 

    <form method="POST" action =" {{ route('admin') }} ">
    @csrf
    
    <input type="text" name="username" placeholder="Username"></input><br><br>

    <input type="password" name="password" placeholder="Password"></body><br><br>

    <button type="submit">Continue</button>
    </form>

    </div>
</body>
</html>