<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>
<body>
    <header>
        <h1>Laravel App</h1>
    </header>
    
    <div class="content">
        @yield('content')
    </div>
    
    <footer>
        <p>Copyright 2024</p>
    </footer>
</body>
</html>
