<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

  </head>
  <body>

    <div id="app">
      @yield('content')
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
  </body>
</html>
