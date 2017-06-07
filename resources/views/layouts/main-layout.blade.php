<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  </head>
  <body>

    <div id="app">
      @yield('content')
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
  </body>
</html>
