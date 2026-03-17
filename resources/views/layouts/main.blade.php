<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
    main > .container {
        padding: 60px 15px 0;
    }
</style>
<link rel="stylesheet" href="css/style.css">
    </head>
    <body class="d-flex flex-column min-vh-100">
        @include('layouts.header')
        <!--begin page content-->
        <main class="flex-shrink-0">
             <div class="container">
                @yield('content')
            </div>
        </main>
        @include('layouts.footer')
        <script src="/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
