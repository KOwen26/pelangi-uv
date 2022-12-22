<!-- Topbar Start -->
{{-- <div class="container-fluid bg-light p-0">
        <div class="row gx-0 d-none d-lg-flex">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                    <small class="fa fa-map-marker-alt text-primary me-2"></small>
                    <small>Kompleks Pergudangan Bizpark C-3, <br> Tambak Sawah, Waru - Sidoarjo </small>
                </div>
                <div class="h-100 d-inline-flex align-items-center py-3">
                    <small class="far fa-clock text-primary me-2"></small>
                    <small>Mon - Fri : 07.30 AM - 03.30 PM<br>
                        Sat : 07:30 AM - 02.30 PM</small>
                </div>
            </div>
            <div class="col-lg-5 px-5 text-end">
                <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                    <small class="fa fa-phone-alt text-primary me-2"></small>
                    <small>031-8667469 <br>
                        031-8677468</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center">
                    <a class="btn btn-sm-square bg-white text-primary me-1" href=""><i
                            class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-sm-square bg-white text-primary me-1" href=""><i
                            class="fab fa-twitter"></i></a>
                    <a class="btn btn-sm-square bg-white text-primary me-1" href=""><i
                            class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-sm-square bg-white text-primary me-0" href=""><i
                            class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div> --}}
<!-- Topbar End -->


<!-- Navbar Start -->
<nav id="main-navbar" class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
    <a href="{{ route('home') }}" class="navbar-brand d-flex gap-2 align-items-center px-4 px-lg-5">
        <img src="{{ asset('img/logo.png') }}" height="40px" alt="">
        {{-- <h2 class="m-0 text-primary">CV Pelangi UV</h2> --}}
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            {{-- <a href="#" class="nav-item nav-link active">Beranda</a> --}}
            <a href="#about" class="nav-item nav-link">Tentang Kami</a>
            <a href="#timeline" class="nav-item nav-link">Perjalanan</a>
            <a href="#services" class="nav-item nav-link">Layanan Kami</a>
            <a href="#partner" class="nav-item nav-link">Partner</a>
            <a href="#gallery" class="nav-item nav-link">Galeri</a>
            {{-- <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu fade-up m-0">
                        <a href="feature.html" class="dropdown-item">Feature</a>
                        <a href="quote.html" class="dropdown-item">Free Quote</a>
                        <a href="team.html" class="dropdown-item">Our Team</a>
                        <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                        <a href="404.html" class="dropdown-item">404 Page</a>
                    </div>
                </div>
                <a href="contact.html" class="nav-item nav-link">Contact</a> --}}
        </div>
        <a href="#order-now" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Pesan Sekarang<i
                class="fa fa-arrow-right ms-3"></i></a>
    </div>
</nav>
<!-- Navbar End -->
