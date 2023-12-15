<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @yield('styles')
</head>

<body>
    @include('layouts.navbar')

    <main class="py-4">
        <div class="container">
            @yield('content')
        </div>
    </main>

    @include('layouts.footer')
    @yield('scripts')

</body>

</html>
