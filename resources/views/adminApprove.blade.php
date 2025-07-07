<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="/build/css/market/marketUpload.css">
    <link rel="stylesheet" href="/build/css/admin/approve.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin approval</title>
</head>
<>
    

    <header>
            <nav class="page">
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('logout') }}">Logout</a></li>
            <li><a>Contact us</a></li>
            </nav>
        </header>
    
    <h2>Pending markets.</h2>

    

    @foreach ($markets as $market)

        <div class="advert">

            <li>{{ $market->title }}.</li>

            <div>
                
            <img src="{{ asset('storage/' . $market->image_path) }}" alt="Advert image here">
            
            <p>{{ $market->description }}.</p>

            
            </div>

        
        <form method="POST" action = "{{ route('approve.action', $market->id) }}">
        @csrf

        <button type="submit" name="approve">Approve</button>

        <button type="button"  name="" class="delete" onclick="showSection()">Delete</button>

        <section class="reason" id="reason">

            <label for="delReason">Why was this deleted?</label>
            <textarea name="delReason"></textarea>
            <button type="submit" name="delete">Submit</button>
        

        </section>

        </form>
        
        </div>

    @endforeach


    <script>
        function showSection(){
            document.getElementById("reason").style.display="block";
        }
    </script>

</body>
</html>