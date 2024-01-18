<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');
    </style>
    <title>{{ $title ?? 'Presto.it' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

    <main class="d-flex flex-column vh-100">
        <div class="sticky-top">
            <x-navbar/>
        </div>

        @if(session()->has('message'))
        <div class="alert alert-success m-3" role="alert">
        {{session('message')}}
        </div>
        @endif

        @if(session()->has('access.denied'))
        <div class="alert alert-danger m-3" role="alert">
        {{session('access.denied')}}
        </div>
        @endif




        <div>
            {{ $slot }}
        </div>


        <div class="mt-auto">
            <x-footer/>
        </div>
    </main>

</body>
</html>
