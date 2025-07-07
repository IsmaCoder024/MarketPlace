<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="/build/css/market/marketUpload.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Market upload</title>
</head>
<body>


        <header>
            <nav class="profile">
                <li><a href="">My account</a></li>
                <nav class="dashboard">
                    <li><a>Profile</a></li>
                    <li class="act"><a>Activity</a>
                        <nav class="vity">
                            <li><a href="showDeleted">Deleted</a></li>
                            <li><a href="showApproved">Approved</a></li>
                            <li><a href="showPending">Pending</a></li>
                        </nav>
                    </li>
                    <li><a>Navigate</a></li>
               
                </nav>

            </nav>
            
            <nav class="page">
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('logout') }}">Logout</a></li>
            <li><a>Contact us</a></li>
            </nav>
        </header>

       


        


    <div>

        <main class="container">

        @if(session('uploaded'))
            <div class="successMessage">
                {{ session('uploaded') }}
            </div>

        @endif
            
            <h2>Market upload</h2>

        <form action="{{ route('upload') }}" method="POST" enctype="multipart/form-data">
            @csrf 
            
            <section>
            <label for="title">Title</label>
            <input type="text" name="title"><br><br>
            </section>
            
            <section>
            <label for="description">Description</label>
            <textarea name="description"></textarea><br><br>
            </section>

            <section>
            <label for="price">Price</label>
            <input type="text" name="price"><br><br>
            </section>

            
            
            <section>
            <label for="image">Image upload</label>
            <input type="file" name="image" required><br><br>
            </section>
            
            <button>Upload</button>
        </form>
        </main> 

    </div> 
    
    

</body>
</html>