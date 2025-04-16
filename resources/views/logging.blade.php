<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="/build/css/RegStyle.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <form action="{{ route('login') }}" method="POST">
            @csrf    

            <article>
            <label>Email address</label>
            <input type="text" name="email" id="email" placeholder="Your email address"><br>
            </article>

            <article>
            <label>Password</label>
            <input type="password" name="password" id="password" placeholder="Atleast 8 characters"><br>
            </article>

        

            <button>Log in</button>

        </form>
    </div>
</body>
</html>