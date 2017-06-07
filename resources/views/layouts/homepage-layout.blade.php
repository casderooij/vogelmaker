<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>factorem avem - @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  </head>
  <body>

    @include('includes.header')

    <div class="container">
      @include('includes.bird-form')

      @yield('content')
    </div>

  </body>
</html>
