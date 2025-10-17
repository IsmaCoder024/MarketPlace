<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="/build/css/market/marketDisplay.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deleted Markets</title>
</head>
<body>
<header>
        <nav>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('register') }}">Signup</a></li>
            <li><a href="{{ route('login') }}">Login</a></li>
            <li><a href="{{ route('about') }}">About</a></li>
            <li><a>Contact us</a></li>
            <li><a>Others</a></li>   
        </nav>
</header>


<main class="content">
    
        @foreach ($approvedMarkets as $market)

        <div class="advert">

            <h2>{{ $market->title }}.</h2>
            
            <section>
            <img src="{{ asset('storage/' . $market->image_path) }}" alt="Advert image here">
            
            <span class="details">
            <li>Price : TZS {{ $market->price }}</li>
            <li>SellerID : {{ $market->user_id }}</li>
            
           
           
            </span>
            
            </section>

            <p>{{ $market->description }}.</p>
            
        

            
        
        </div>

        @endforeach
    
</main>
</body>
</html>