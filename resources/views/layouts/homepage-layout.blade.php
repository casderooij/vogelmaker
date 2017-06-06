<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>factorem avem - @yield('title')</title>
  </head>
  <body>

    @include('includes.header')

    <div class="container">
      @include('includes.bird-form')

      @yield('content')
    </div>

  </body>
</html>
