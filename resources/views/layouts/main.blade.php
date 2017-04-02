<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel 5 - @yield('page_title')</title>
    {!! HTML::style('bootstrap/css/bootstrap.min.css') !!}
</head>
<body>
    <div class="container">
        @yield('content')
    </div>


    {!! HTML::script('bootstrap/css/jquery.min.js') !!}
    {!! HTML::script('bootstrap/css/bootstrap.min.js') !!}
</body>
</html>