<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="/build/css/RegStyle.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>

     <div class="returnMessage">

             @if(session('error'))
                <div class="alertMessage">
                {{ session('error') }}
                </div>

            @endif
        </div>
       

    <div class="cover">
       <div class="formStyle">
        <form action="{{ route('register') }}" method="POST">
            @csrf    

            <article>
            <label>Name</label>
            <input type="text" name="firstName" id="firstName" placeholder="First name">
            <input type="text" name="lastName" id="lastName" placeholder="Last name"><br>
            </article>

            <article>
            <label>Email</label>
            <input type="text" name="email" id="email" placeholder="Your email address"><br>
            </article>

            <article>
            <label>Registration number</label>
            <input type="text" name="regNumber" id="regNumber" placeholder="Optional"><br>
            </article>

            <article>
            <label>Phone number</label>
            <input type="text" name="phoneNumber" id="phoneNumber" placeholder="Valid phone number only"><br>
            </article>

            <article>
            <label>Password</label>
            <input type="password" name="password" id="password" placeholder="Atleast 8 characters"><br>
            </article>

        
            <button>Submit</button>

        </form>
    </div>

    <div class="reminder">
    <li class="alternation">Oops! you have an account, then <a href="{{ route('login')}}">log in</li>
    <li class="homing"><a href="{{ route('home') }}" class="homing">Home</a></li>
    </div>
    </div>
</body>
</html>