<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@400;500;700&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Prevent Flash of Wrong Theme -->
    <script>
        // Apply theme immediately before page renders to prevent flash
        if (localStorage.getItem('theme') === 'dark' || (!('theme' in localStorage) && window.matchMedia(
                '(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark');
        }
    </script>
</head>

<body class="bg-white dark:bg-gray-900 dark:text-gray-100 text-gray-900 font-sans transition-colors duration-300">
    @include('layout.nav')

    <div class="flex justify-center top-20 mx-auto mt-4">
        @isset($breadcrumbs)
            <x-breadcrumb :items="$breadcrumbs" />
        @endisset
    </div>

    <div class="relative flex flex-col items-center justify-center text-center px-4 sm:px-8 md:px-16 py-12 md:py-20">
        <h1
            class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold max-w-2xl md:max-w-3xl leading-relaxed md:leading-relaxed text-gray-900 dark:text-white">
            @yield('header.name')
        </h1>
    </div>

    <main class="container mx-auto mt-10 p-4">
        @yield('content')
    </main>
</body>

</html>
