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



{{-- Footer --}}
<!-- Footer -->
<footer class="text-center text-lg-start bg-dark text-muted">
  <!-- Section: Social media -->
  <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
    <!-- Left -->
    <div class="me-5 d-none d-lg-block">
      <span>Get connected with us on social networks:</span>
    </div>
    <!-- Left -->

    <!-- Right -->
    <div>
      <a href="" class="me-5 link-secondary">
        <i class="bi bi-facebook"></i>
      </a>
      <a href="" class="me-5 link-secondary">
        <i class="bi bi-instagram"></i>
      </a>
      <a href="" class="me-5 link-secondary">
        <i class="bi bi-github"></i>
      </a>
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-6 col-lg-6 col-xl-6 mx-auto mb-4 text-center">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-gem me-3 text-secondary"></i>Web Taaka
          </h6>
          <p>
            Haii, terimakasih telah membaca web ini sampai akhir. Jangan lupa untuk terus mendukung kami dengan cara follow sosmed kami yaa... Arigatou🎎
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-6 col-lg-6 col-xl-6 mx-auto mb-md-0 mb-4 text-center">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
          <p><i class="bi bi-house-door"></i> Jalan Cipta Guna Blok C no.5</p>
          <p><i class="bi bi-telephone"></i> 0858-9949-6182 </p>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.025);">
    © 2021 Copyright:
    <a class="text-reset fw-bold" href="https://mdbootstrap.com/">MDBootstrap.com</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->

{{-- Akhir footer --}}



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>