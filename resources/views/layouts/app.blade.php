<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>factorem avem - @yield('title')</title>
  </head>
  <body>

    @section('menu')
      <header class="main-menu">
        logo | about
      </header>
    @show

    <div class="container">
      @yield('content')
    </div>

  </body>
</html>
