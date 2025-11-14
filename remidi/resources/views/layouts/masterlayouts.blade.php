<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
</head>
<body>

{{-- navbar --}}
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="{{ url('/home') }}">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="{{ url('/about') }}">about</a>
      <a class="nav-item nav-link" href="#">Didan pradifta 2301010076</a>
      <a class="nav-item nav-link" href="#">rojib ansori</a>
    </div>
  </div>
</nav>
{{-- navbar end --}}

<div class="container mt-5">
    @yield('content')
</div>

{{-- footer --}}
<footer class="py-3 my-4">
    <ul class="nav justify-content-center border-bottom pb-3 mb-3">
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">DIDNA A.K.A SYRIUS</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">ROJIB A.K.A HON</a></li>
    </ul>
    <p class="text-center text-muted">&copy; 2025 syr-x-hon</p>
</footer>
{{-- footer end --}}

</body>
</html>
