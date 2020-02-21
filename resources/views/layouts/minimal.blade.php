<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  {{-- <meta name="csrf-token" content="{{ csrf_token() }}"> --}}
  <title>@yield('title', config('app.name'))</title>
  {{-- <link href="{{ mix('css/style.css') }}" rel="stylesheet"> --}}
  @yield('page_styles', '')
  <script src="{{ mix('js/script.js') }}" defer></script>
</head>

<body class="font-sans bg-blue-900 text-white width-100 h-100">
    <div id="app">
      @yield('content')
    </div>
</body>

</html>