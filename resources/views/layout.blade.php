<!DOCTYPE html>
<html lang="en">
<head>

    <link rel="stylesheet" href="/css/app.css">
    <script src="/js/app.js" defer></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

</head>
<body>
<div id="app" class="d-flex flex-column  justify-content-between h-screen">

    <header>
        
        @include('partials/nav')

    </header>

    <main class="py-4">

        

         @yield('content')

        
    </main>

    <footer class="bg-white text-center text-black-50 py-3 shadow">
        {{ config('app.name')}} | Copyright @ {{ date('Y')}}
    </footer>

</div>
</html>