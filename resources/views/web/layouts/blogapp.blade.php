<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') - Azulengineering</title>
    <link rel="stylesheet" href="web/css/hover.css">
    <link rel="stylesheet" href="web/fontawesome/css/all.css">
    <link rel="stylesheet" href="web/sass/main.css">
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="web/sass/vendours/boostrap/css/bootstrap.css">
</head>

<body>

    <header class="header header--2 header--5">
        @include('web.includes.blogbanner')
    </header>

    <main>       
        @yield('content')
    </main>

    
    <footer class="footer">
        @include('web.includes.footer')
    </footer>

    <script src="web/js/script.js"></script>
    <script src="web/sass/vendours/boostrap/js/bootstrap.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="web/js/parallax.min.js"></script>
</body>

</html>