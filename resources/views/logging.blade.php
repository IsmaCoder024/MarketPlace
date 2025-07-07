<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="/build/css/RegStyle.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>log-in</title>
</head>
<body>

        <div class="cover">

        <div class="returnMessage">

        @if(session('logError'))
            <div class="alertMessage">
                {{ session('logError') }}
            </div>
            @endif

            @if(session('success'))
            <div class="successMessage">
                {{ session('success') }}
            </div>
            @endif

        </div>

        <div class="formStyle">
        <form action="{{ route('login') }}" method="POST">
            @csrf    

            <article>
            <label>Email</label>
            <input type="text" name="email" id="email" placeholder="Your email address"><br>
            </article>

            <article>
            <label>Password</label>
            <input type="password" name="password" id="password" ><br>
            </article>

        

            <button>
                Continue
            </button>

        </form>
    </div>
    

    <div class="reminder">
    <li class="alternation">Oops! you have no account yet, then <a href="{{ route('register')}}">create</a> one</li>
    <li class="forget"><a href="" class="forget">Forgot password</a></li>
    <li class="homing"><a href="{{ route('home') }}" class="homing">Home</a></li>
    </div>

    </div>

</body>
</html>