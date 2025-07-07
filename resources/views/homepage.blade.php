<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="/build/css/hometest.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    

    <div class="header">
        <nav class="page">
            <li><a>Home</a></li>
            <li><a href="{{ route('register') }}">Signup</a></li>
            <li><a href="{{ route('login') }}">Login</a></li>
            <li><a href="{{ route('about') }}">About</a></li>
            <li><a href="">Contact</a></li>
            <li><a href="">Feedbacks</a></li>
        

        </nav>

        <nav class="serviceSelect">
                <li><a class="explore">Explore now</a></li>
                <nav class="services">
                    <li><a href="{{ route('display') }}">Customer</a></li>
                    <li><a href="{{ route('upload') }}">Seller</a></li>
                    <li><a href="{{ route('admin') }}">Admin</a></li>
               
                </nav>

            </nav>

    </div>

    
            

    

   
    <diV class="note"> 
            <h1>Still catching up with the digital world?<br></h1>
            <div class="fingertips">
            <img src="{{ asset('images/pexels-karolina-grabowska.jpg') }}" style="">
            <img src="{{ asset('images/pexels-danbuilds-633409.jpg') }}" style="">
            <img src="{{ asset('images/pexels-ifreestock-585752.jpg') }}" style="">
            <img src="{{ asset('images/pexels-danbuilds-633409.jpg') }}" style="">
            <img src="{{ asset('images//PSX_20240716_200731.jpg') }}" style="">
            <img src="{{ asset('images/pexels-danbuilds-633409.jpg') }}">
            
            <div>
            <p>We bring the marketplace right to your fingertips; simple, smart, and seamless.</p>
            </div>
     
            
        </div>
    </diV>

     
       
        <br><br>
    

   



    <div class="tray">
                <p>
            Are you a retailer struggling to connect with your customers?<br>
            <span>Don't worry, we've got you covered.</span><br><br>
            Are you a buyer missing that personal touch with your favorite retailers?<br>
            <span>Say less. We are making it personal.</span>
                </p>
            <img src="{{ asset('images/pexels-karolina.jpg') }}">
    </div>
    
</body>
</html>