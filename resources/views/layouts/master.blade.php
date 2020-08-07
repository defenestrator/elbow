<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>@yield('title', config('app.name'))</title>
  <link rel="dns-prefetch" href="https://fonts.gstatic.com">
  <link rel="icon" href="/favicon-100.png" sizes="100x100">
  <link href="{{ mix('css/style.css') }}" rel="stylesheet">
  @yield('page_styles', '')
  <script src="{{ mix('js/script.js') }}" defer></script>
</head>

<body class="font-sans bg-blue-900 text-white width-100 h-100">
  <div class="bg-white text-blue-900">
  <div class="container-fluid flex-row mx-auto">
    <nav x-data="{ openMenu: false }" class="flex items-center justify-between flex-wrap bg-white p-6 shadow">
      <div class="flex items-center flex-shrink-0 text-blue-900 mr-6">
      <a href="/">
        <img src="/img/hydro-gunblue-small.png" alt="Elbow Farm">
      </a>
      </div>
      <div class="flex items-center flex-shrink-0 text-blue-900 mr-6">
        <p class="font-100 font-sans tracking-tight md:hidden">Elbow Farm</p>
      </div>
      <div x-on:click="openMenu= true" class="block md:hidden">
        <button x-on:click="openMenu= true"        
          class="flex items-center px-3 py-2 rounded text-blue-900 hover:text-gray-500">
          <svg x-on:click="openMenu= true" class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <title>Menu</title>
            <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
          </svg>
        </button>
      </div>
      <div x-cloak
      x-bind:class="{'hidden': ! openMenu }"
      x-on:click.away="openMenu = false;" class="transition-slow ease-in w-full block flex-grow md:flex md:items-center md:w-auto">
      
      <div class="text-sm md:flex-grow mt-6 md:mt-0">
        <a href="{{route('breeders.index')}}" class="block mt-2 md:inline-block md:mt-0 text-gray-700 hover:text-blue-900 mr-4">
          Breeders
        </a>  
        <a href="{{route('strains.index')}}" class="block mt-2 md:inline-block md:mt-0 text-gray-700 hover:text-blue-900 mr-4">
          Strains
        </a>
        <a href="/potluck" class="block mt-2 md:inline-block md:mt-0 text-gray-700 hover:text-blue-900 mr-4">
          Pot Luck
        </a>

      </div>
      <div class="text-sm md:flex-row-reverse">
          <a href="/login" class="block mt-2 md:inline-block md:mt-0 text-gray-700 hover:text-blue-900 mr-4"> 
            Login
          </a>
      </div>
      </nav>
     <div class="container p-2 m-2 mx-auto" id="app">
      <script>
        const csrfToken = document.head.querySelector("[name~=csrf-token][content]").content;
        console.log(csrfToken)
      </script>
      @yield('content')
    </div>   
    <div class="flex-row-reverse">
      @yield('bottom')
    </div>
  </div>
</div>
</body>
</html>