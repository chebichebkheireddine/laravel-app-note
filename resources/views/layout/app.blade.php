<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>
    {{-- Tailwind CSS --}}
    {{-- Font Awesome 6 Free --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">


    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@400;500;700&display=swap" rel="stylesheet">


    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>


<body class="bg-black text-gray-900 font-sans">
    @include('layout.nav')
    <div class="flex justify-center top-20  mx-auto  mt-4">
        @isset($breadcrumbs)
            <x-breadcrumb :items="$breadcrumbs" />
        @endisset
    </div>


    <div class="relative flex flex-col items-center justify-center text-center px-4 sm:px-8 md:px-16 py-12 md:py-20">
        <h1
            class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold max-w-2xl md:max-w-3xl leading-relaxed md:leading-relaxed text-gray-900">
            @yield('header.name')

        </h1>

    </div>
    <main class="container mx-auto mt-10 p-4">
        @yield('content')
    </main>


</body>

</html>
