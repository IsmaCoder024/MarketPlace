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
        <form action="{{ route('register') }}" method="POST">
            @csrf    

            <article>
            <label>Name</label>
            <input type="text" name="firstName" id="firstName" placeholder="First name">
            <input type="text" name="lastName" id="lastName" placeholder="Last name"><br>
            </article>

            <article>
            <label>Email address</label>
            <input type="text" name="email" id="email" placeholder="Your email address"><br>
            </article>

            <article>
            <label>Registration number</label>
            <input type="text" name="regNumber" id="regNumber" placeholder="Your Registration number"><br>
            </article>

            <article>
            <label>Phone number</label>
            <input type="text" name="phoneNumber" id="phoneNumber" placeholder="Your Registration number"><br>
            </article>

            <article>
            <label>Password</label>
            <input type="password" name="password" id="password" placeholder="Atleast 8 characters"><br>
            </article>

            <article>
            <label>Confirm</label>
            <input type="password" name="password" id="password" placeholder="Confirm your password"><br>
            </article>
            
            
            <article>
            <label for="level">Education level</label>
            <select name="level" id="level">
                <option disabled selected></option>
                <option>Non-degree</option>
                <option>Undergraduate</option>
                <option>Post graduate</option>
                <option>PhD</option>
            </select><br>
            </article>

            <button>Submit</button>

        </form>
    </div>
</body>
</html>