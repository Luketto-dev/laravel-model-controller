<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <script src="{{ mix("js/app.js") }}"></script>
    
    @yield('header_scripts')
</head>

<body>
    
    
    <main class="">
        @yield('main_content')
    </main>

    
</body>

</html>