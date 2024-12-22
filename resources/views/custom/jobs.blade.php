<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Queues e Jobs</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    <div class="flex flex-col justify-center p-6">

        @session('message')
            {{ $value }}
        @endsession

        <form action="{{ route('filas.store') }}" method="post" class="flex justify-center p-6">
            @csrf
            <button class="m-4 rounded bg-slate-800 px-6 py-4 text-white">Create the Job</button>
        </form>

    </div>

</body>

</html>
