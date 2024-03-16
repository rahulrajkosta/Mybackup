<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="coantainer">
        <div class="row" id="app">
            <div class="col-12 text-info"><h1>Chat Room</h1></div>
        </div>
    </div>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</body>
</html>