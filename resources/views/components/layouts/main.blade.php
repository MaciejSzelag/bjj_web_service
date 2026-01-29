<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title ?? config('app.name') }}</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] flex  items-center lg:justify-center min-h-screen flex-col">

    <x-layouts.header>
        {{$slot}}
    </x-layouts.header>
    <div class="w-full min-h-[100vh]  bg-gray-100">
        <main class="w-full flex justify-center items-center pt-[65px]">

            <div class="w-full flex  justify-center items-center flex-col bg-slate-50">
                {{$slot}}
            </div>
        </main>

    </div>
    <x-footer />



    @if (Route::has('login'))
    <div class="h-14.5 hidden lg:block"></div>
    @endif





</body>

</html>