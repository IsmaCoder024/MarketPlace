<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="/build/css/market/marketDisplay.css">
    <link rel="stylesheet" href="/build/css/admin/navigate.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin navigation</title>
</head>
<body>
            @if(session('success'))
            <div class="success">
                {{ session('success') }}
            </div>
            @endif

            <header>
            <nav class="page">
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('logout') }}">Logout</a></li>
            </nav>
        </header>

    <button>
        <a href="{{ route('approve') }}">Pending markets</a>
    </button>

    <button>
        <a href="{{ route('AdminDeleted') }}">Deleted markets</a>
    </button>
</body>
</html>