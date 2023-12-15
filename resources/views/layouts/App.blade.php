<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Puskesmas | Artikel</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">
    

    {{-- trix editor --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}css/trix.css">
  <script type="text/javascript" src="{{ asset('/') }}js/trix.js"></script>
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('/') }}lib/animate/animate.min.css" rel="stylesheet">
    <link href="{{ asset('/') }}lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="{{ asset('/') }}lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('/') }}css/bootstrap.min.css" rel="stylesheet">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Template Stylesheet -->
    <link href="{{ asset('/') }}css/style.css" rel="stylesheet">
    
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-success" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg  navbar-light sticky-top p-0 wow fadeIn" data-wow-delay="0.1s">
        <a href="" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
        <h1 class="m-0 text-success"><img class="img-fluid" src="{{asset('/img/logoPuskesmas.png')}}" alt="" height="40" width="40"> </i><b>PUSKESMAS PORSEA</b></h1>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="/beranda" class="nav-item nav-link active">Beranda</a>
                <a href="/artikel" class="nav-item nav-link">Artikel</a>
                <a href="/poli" class="nav-item nav-link">Poli</a>
                <a href="/konsultasi" class="nav-item nav-link">Konsultasi</a>
                <a href="/saran" class="nav-item nav-link">saran</a>
            </div>
            &nbsp;&nbsp;&nbsp;
            <ul class="navbar-nav ms-auto">
            @auth
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <span class="avatar avatar-online">
                        <b>Welcome, {{ auth()->user()->name }}</b>
                    </span>
                </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li>
                    <a class="dropdown-item" href="/profile">
                        <i class="bi bi-person-circle">  Ubah Profil</i>
                    </a>
                </li>
                <li><hr class="dropdown-divider"></li>
                <li>
                    <form action="/logout" method="POST">
                        @csrf
                        <button type="submit" class="dropdown-item">
                            <i class="bi bi-box-arrow-right">  Logout</i> 
                        </button>
                    </form>
                </li>
            </ul>
            </li>
            @endauth
            </ul>
        </div>
    </nav>
    <!-- Navbar End -->
    

    <!-- Header Start -->
    <div class="container-fluid header bg-success p-0 mb-5">
        <div class="row g-0 align-items-center flex-column-reverse flex-lg-row">
            
            <div class="wow fadeIn" data-wow-delay="0.5s" >
                <div class="owl-carousel header-carousel">
                    <div class="owl-carousel-item ">
                        <img class="img-fluid" src="img/3.png" alt="">
                        <div class="owl-carousel-text" >
                            <!-- <h1 class="display-1 text-white mb-0">Cardiology</h1> -->
                        </div>
                    </div>
                    <div class="owl-carousel-item ">
                        <img class="img-fluid" src="img/2.png" alt="">
                        <div class="owl-carousel-text">
                            <!-- <h1 class="display-1 text-white mb-0">Neurology</h1> -->
                        </div>
                    </div>
                    <div class="owl-carousel-item ">
                        <img class="img-fluid" src="img/3.png" alt="">
                        <div class="owl-carousel-text">
                            <!-- <h1 class="display-1 text-white mb-0">Pulmonary</h1> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

<div class="container">
    @yield('container')
</div>





    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-8 col-md-8">
                    <h5 class="text-light mb-4">Address</h5>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i> Jl. P.I. Del, Sitoluama, Kec. Laguboti, Toba, Sumatera Utara 22381</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+62 12 345 67890</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>team10@gmail.com</p>
                    <div class="map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3986.3664472833148!2d99.14619961493582!3d2.383525458046004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x302e00fdad2d7341%3A0xf59ef99c591fe451!2sDel%20Institute%20of%20Technology!5e0!3m2!1sen!2sid!4v1638024922607!5m2!1sen!2sid"
                            width="100%" height="auto" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                    
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social rounded-circle" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social rounded-circle" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social rounded-circle" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social rounded-circle" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <h5 class="text-light mb-4">Menu Cepat</h5>
                    <a class="btn btn-link" href="beranda.html">Beranda</a>
                    <a class="btn btn-link" href="artikel.html">Artikel</a>
                    <a class="btn btn-link" href="poli.html">Poliklinik</a>
                    <a class="btn btn-link" href="konsultasi.html">Konsultasi</a>
                    <a class="btn btn-link" href="saran.html">Saran</a>
                </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-success btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="{{ asset('/') }}https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="{{ asset('/') }}https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('/') }}lib/wow/wow.min.js"></script>
    <script src="{{ asset('/') }}lib/easing/easing.min.js"></script>
    <script src="{{ asset('/') }}lib/waypoints/waypoints.min.js"></script>
    <script src="{{ asset('/') }}lib/counterup/counterup.min.js"></script>
    <script src="{{ asset('/') }}lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="{{ asset('/') }}lib/tempusdominus/js/moment.min.js"></script>
    <script src="{{ asset('/') }}lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="{{ asset('/') }}lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('/') }}js/main.js"></script>
    @include('sweetalert::alert')

</body>

</html>