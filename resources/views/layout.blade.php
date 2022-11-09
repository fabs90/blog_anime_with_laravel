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
    {{-- Link Google Font --}}
    <link rel="stylesheet"
  href="https://fonts.googleapis.com/css?family=Poppins">
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
            <a class="nav-link active text-white" aria-current="page" href="<?= url('/'); ?>">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active text-white" href="#">Features</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active text-white" href="<?= url('/blog'); ?>">Blog</a>
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



<section id="footer" class="footer">
  <footer class="text-white text-center pb-3" >
    <!-- Grid container -->
    <div class="container p-4">
      <!--Grid row-->
      <div class="row mt-3">
        <!--Grid column-->
        <div class="col-lg-4 col-md-6 mb-4">
          <h5 class="text-uppercase">Terhubung Dengan Kami :</h5>
          <!-- Instagram -->
          <a class="btn btn-floating m-1 btn-outline-light" href="https://www.instagram.com/fabianjc.jpeg/" role="button"
          ><i class="bi bi-instagram"></i
        ></a>
            <!-- Github -->
        <a class="btn btn-outline-light" href="https://github.com/fabs90" role="button"
          ><i class="bi bi-github"></i></a>
          <!-- Google -->
        <a class="btn btn-outline-light" href="https://m.facebook.com/fabian.juliansyah" role="button"
          ><i class="bi bi-facebook"></i></a> 
        </div>
        <!--Grid column-->
        
        <!--Grid column-->
        <div class="col-lg-4 col-md-6 mb-4">
          <h5 class="text-uppercase">About Us</h5>
  
          <p>
            Haii, terimakasih telah membaca web ini sampai akhir. Jangan lupa untuk terus mendukung kami dengan cara follow sosmed kami yaa... Arigatou🎎
          </p>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-4 col-md-12 mb-4">
          <h5 class="text-uppercase">Contact</h5>
        <!-- Links -->
          <p>🏠 New York, NY 10012, US</p>
          <p>📧info@example.com</p>
          <p>📞 +62 9021 71293</p>
        </div>
        <!--Grid column-->
      </div>
      <!--Grid row-->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2022 Copyright:
      <a class="text-white" href="<?= url('/blog'); ?>">TAAKA</a>
    </div>
    <!-- Copyright -->



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>