<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="/build/css/market/marketDisplay.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Markets</title> 
</head>
<body>
<header>
        <nav>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('about') }}">About</a></li>
            <li><a href="{{ route('logout') }}">Logout</a></li>
            <li><a>Contact us</a></li>
            <li><a>Others</a></li>   
        </nav>
</header>


<main class="content">
    
        @foreach ($markets as $market)

        <div class="advert">

            <h2>{{ $market->title }}.</h2>
            
            <section>
            <img src="{{ asset('storage/' . $market->image_path) }}" alt="Advert image here">
            
            <span class="details">
            <li>Price : <span>TZS {{ $market->price }}</span></li>
            <li>Contacts : <span>{{ $market->user->phoneNumber }}</span></li>
            <li>Posted by : <span>{{ $market->user->businessName ?: $market->user->lastName}}</span></li>
            <h3><a href="https:wa.me/{{ $market->user->phoneNumber }}? text={{ urlencode('Hello, I saw your ad for ' .$market->title. 'Is it still available?') }}" target="_blank">Order now.</a></h3>
            </span>
            
            </section>

            <p>{{ $market->description }}.</p>
            
        

            
        
        </div>

        @endforeach
    
</main>
    
</body>
</html>

