<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TAAKA | @yield('title')</title>
    {{-- Link CSS --}}
    <link rel="stylesheet" href="{{asset('css/style.css')}}" type="text/css"> 
    {{-- Link Bootstrap CDN --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    {{-- Link Icon Bootstrap CDN --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  </head>
  <body>
{{-- Navbar --}}
<nav class="navbar navbar-expand-lg navbar-light py-3" style="background-color:#2F1793;">
    <div class="container-fluid">
      <a class="navbar-brand ms-lg-5" href="<?= url('/'); ?>"><img src="{{url('/img/TAAKA.png')}}" width="100" height="50" class="img-fluid"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto me-5">
          <li class="nav-item">
            <a class="nav-link active text-white" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active text-white" href="#">Features</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active text-white" href="#">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active text-white" href="https://github.com/fabs90"><i class="bi bi-github"></i></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
{{-- Akhir Navbar --}}

{{-- Konten --}}
    
        @yield('konten')
    
{{-- Akhir Konten --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>