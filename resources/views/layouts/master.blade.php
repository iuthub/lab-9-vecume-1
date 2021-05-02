<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Laravel</title>
  <!-- Latest compiled and minified CSS -->
  <!-- CSS only -->
  <link href='http://fonts.googleapis.com/css?family=Arizonia' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="{{ URL::to('css/app.css') }}">
</head>

<body>
  @include('partials.header')
  <div class="container">
    @yield('content')
  </div>
  <script src="{{ URL::to('js/app.js') }}"></script>
</body>

</html>
