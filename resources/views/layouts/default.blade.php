<!DOCTYPE html>
<html>
<head>
  <title>@yield('title', 'liuweb')</title>
  <link rel="stylesheet" href="/css/app.css">
  <script src="https://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
</head>
<body>
  @include('layouts._header')

  <div class="container">
    @yield('content')
    @include('layouts._footer')
  </div>
</body>
</html>