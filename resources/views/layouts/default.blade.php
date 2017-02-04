<!DOCTYPE html>
<html>
<head>
  <title>@yield('title', 'Fanlen') - Laravel 入门教程</title>
  <link rel="stylesheet" href="/css/app.css">
</head>
<body>
@includegi('layouts._header')

<div class="container">
  <div class="col-md-offset-1 col-md-10">
    @yield('content')
    @include('layouts._footer')
  </div>
</div>
</body>
</html>