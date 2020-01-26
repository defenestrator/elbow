<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', config('app.name'))</title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link rel="icon" href="/favicon-100.png" sizes="100x100">
    <!-- deferred loading of js -->
    <script src="{{ mix('js/script.js') }}" defer></script>
    <!-- Styles -->
    <link href="{{ mix('css/style.css') }}" rel="stylesheet">
    <!-- Page level Styles -->
    @yield('page_styles', '')
</head>
<body>
app
    @inertia

    @yield('page_scripts')
</body>
</html>
