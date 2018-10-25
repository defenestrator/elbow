<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', config('app.name'))</title>
    <style>
        body{
            font-family:'Verdana';
            color:#666;
        }
    </style>
</head>
<body>
    <div>
        @yield('top')
        @yield('content')
    </div>
</body>
</html>
