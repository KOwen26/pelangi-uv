@php
    $hero_carousel = [
        [
            'image' => 'img/carousel-1.jpg',
            'title' => 'Pelangi UV',
            'subtitle' => '',
            'action' => '#about',
            'action_title' => 'Selengkapnya',
            'description' => 'CV Pelangi UV merupakan perusahaan yang bergerak di bidang fisnishing cetak yang berdiri sejak tahun 2004. Kami memiliki...',
        ],
        // [
        //     'image' => 'img/carousel-2.jpg',
        //     'title' => 'Pelangi UV',
        //     'subtitle' => '',
        //     'action' => '#about',
        //     'action_title' => 'Selengkapnya',
        //     'description' => 'CV Pelangi UV merupakan perusahaan yang bergerak di bidang fisnishing cetak yang berdiri sejak tahun 2004. Kami memiliki...',
        // ],
        // [
        //     'image' => 'img/carousel-3.jpg',
        //     'title' => 'Pelangi UV',
        //     'subtitle' => '',
        //     'action' => '#about',
        //     'action_title' => 'Selengkapnya',
        //     'description' => 'CV Pelangi UV merupakan perusahaan yang bergerak di bidang fisnishing cetak yang berdiri sejak tahun 2004. Kami memiliki...',
        // ],
    ];

    $testimony = [['title' => 'Arta Media Tama', 'image' => 'img/arta-media-tama.webp'], ['title' => 'CV Aneka Grafika', 'image' => 'img/cv-aneka-grafika.webp'], ['title' => 'Gramitrama Batrey', 'image' => 'img/gramitrama-batrey.webp'], ['title' => 'Karya Makmur', 'image' => 'img/karya-makmur.webp'], ['title' => 'Makmur Multi Mitra', 'image' => 'img/makmur-multi-mitra.webp'], ['title' => 'PT Sinar Murni Indoprinting', 'image' => 'img/pt-sinar-murni-indoprinting.webp']];

@endphp
@extends('layouts.master')
@section('body')
    {{-- <div data-bs-spy="scroll" data-bs-target="#main-navbar" data-bs-offset="0" tabindex="0"> --}}
    <div>
        <!-- Carousel Start -->
        <section id="hero">
            <div class="container-fluid p-0">
                <div class=" position-relative">
                    <video class="w-100" style="min-height:640px;object-fit: cover" playsinline autoplay muted loop
                        src="{{ asset('video/hero-background.webm') }}">
                    </video>
                    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                        style="background: rgba(53, 53, 53, .7);">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-12 col-lg-8 text-center">
                                    <h1 class="display-3 text-white animated slideInDown mb-4">
                                        {{ $hero_carousel[0]['title'] }}
                                    </h1>
                                    <p class="fs-5 fw-medium text-white mb-4 pb-2">
                                        {{ $hero_carousel[0]['description'] }}
                                    </p>
                                    <a href="{{ $hero_carousel[0]['action'] }}"
                                        class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">{{ $hero_carousel[0]['action_title'] }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="owl-carousel header-carousel position-relative">
                    @foreach ($hero_carousel as $carousel)
                        <div class="owl-carousel-item position-relative">
                            <img class="img-fluid" src="{{ asset($carousel['image']) }}" alt="">
                            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                                style="background: rgba(53, 53, 53, .7);">
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-12 col-lg-8 text-center">
                                            <h5 class="text-white text-uppercase mb-3 animated slideInDown">Welcome To WooDY</h5>
                                            <h1 class="display-3 text-white animated slideInDown mb-4">{{ $carousel['title'] }}
                                            </h1>
                                            <p class="fs-5 fw-medium text-white mb-4 pb-2">{{ $carousel['description'] }}
                                            </p>
                                            <a href="{{ $carousel['action'] }}"
                                                class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">{{ $carousel['action_title'] }}</a>
                                            <a href="" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Free
                                            Quote</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div> --}}
            </div>
        </section>
        <!-- Carousel End -->

        <section>
            <div class="container-fluid  overflow-hidden my-5 py-5 px-lg-0">
                <div class="container about px-lg-0">
                    <div class="row g-0 mx-lg-0">
                        <div class="col-lg-4 bg-primary " style="min-height: 200px;">
                            <div
                                class="d-flex flex-column align-items-center justify-content-center h-100 text-center text-white">
                                <i class="fs-4 fas fa-users mb-2"></i>
                                <h2 class="counter text-white">
                                    <span data-toggle="counter-up">982</span>+
                                </h2>
                                <p class="">
                                    Pelanggan
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-4 text-center align-middle bg-light" style="min-height: 200px;">
                            <div class="d-flex flex-column  align-items-center justify-content-center h-100">
                                <i class="fs-4 fas fa-gears mb-2"></i>
                                <h2 class="">
                                    <span data-toggle="counter-up">16</span>+
                                </h2>
                                <p class="">
                                    Layanan
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-4 bg-primary text-white" style="min-height: 200px;">
                            <div
                                class="d-flex flex-column align-items-center justify-content-center h-100 text-center text-white">
                                <i class="fs-4 fas fa-receipt mb-2"></i>
                                <h2 class="text-white">
                                    <span data-toggle="counter-up">5000</span>+
                                </h2>
                                <p class="">
                                    Proyek Selesai
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Feature Start -->
        {{-- <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.1s">
                        <div class="d-flex align-items-center justify-content-between mb-2">
                            <div class="d-flex align-items-center justify-content-center bg-light"
                                style="width: 60px; height: 60px;">
                                <i class="fa fa-user-check fa-2x text-primary"></i>
                            </div>
                            <h1 class="display-1 text-light mb-0">01</h1>
                        </div>
                        <h5>Creative Designers</h5>
                    </div>
                    <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.3s">
                        <div class="d-flex align-items-center justify-content-between mb-2">
                            <div class="d-flex align-items-center justify-content-center bg-light"
                                style="width: 60px; height: 60px;">
                                <i class="fa fa-check fa-2x text-primary"></i>
                            </div>
                            <h1 class="display-1 text-light mb-0">02</h1>
                        </div>
                        <h5>Quality Products</h5>
                    </div>
                    <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.5s">
                        <div class="d-flex align-items-center justify-content-between mb-2">
                            <div class="d-flex align-items-center justify-content-center bg-light"
                                style="width: 60px; height: 60px;">
                                <i class="fa fa-drafting-compass fa-2x text-primary"></i>
                            </div>
                            <h1 class="display-1 text-light mb-0">03</h1>
                        </div>
                        <h5>Free Consultation</h5>
                    </div>
                    <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.7s">
                        <div class="d-flex align-items-center justify-content-between mb-2">
                            <div class="d-flex align-items-center justify-content-center bg-light"
                                style="width: 60px; height: 60px;">
                                <i class="fa fa-headphones fa-2x text-primary"></i>
                            </div>
                            <h1 class="display-1 text-light mb-0">04</h1>
                        </div>
                        <h5>Customer Support</h5>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- Feature Start -->


        <!-- About Start -->

        <section id="about">
            <div class="container-fluid my-5 px-lg-0 overflow-hidden">
                <div class="container px-lg-0">
                    <div class="row g-0 mx-lg-0">
                        <div class="col-12 ps-lg-0">
                            <div class="text-center mb-5">
                                <h1 class="display-5 mb-3">Mari kenali <span class="text-primary">Pelangi
                                        UV</span> lebih dalam
                                </h1>
                            </div>
                            <div class="d-flex justify-content-center mb-5">
                                <iframe class="d-md-block d-none" width="960" height="540"
                                    src="https://www.youtube.com/embed/iguuSI8pc_w" title="CV Pelangi UV" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                                <iframe class="d-md-none" width="426" height="240"
                                    src="https://www.youtube.com/embed/iguuSI8pc_w" title="CV Pelangi UV" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid bg-light overflow-hidden my-5 px-lg-0">
                <div class="container about px-lg-0">
                    <div class="row g-0 mx-lg-0">
                        <div class="col-lg-6 ps-lg-0" style="min-height: 400px;">
                            <div class="position-relative h-100">
                                <img class="position-absolute img-fluid w-100 h-100"
                                    src="{{ asset('img/pelangi-uv.webp') }}" style="object-fit: contain;" alt="">
                                {{-- <iframe class="w-100 h-75" src="https://www.youtube.com/embed/iguuSI8pc_w"
                                    title="CV Pelangi UV" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe> --}}
                            </div>
                        </div>
                        <div class="col-lg-6 about-text py-5 wow fadeIn" data-wow-delay="0.5s">
                            <div class="p-lg-5 pe-lg-0">
                                <div class=" text-start">
                                    <h1 class="display-5 mb-4">Tentang <br> <span class="text-primary">PELANGI UV</span>
                                    </h1>
                                </div>
                                <p class="mb-4 pb-2 ">CV Pelangi UV merupakan perusahaan yang bergerak pada
                                    bidang finishing cetak dan telah berdiri sejak tahun 2004. Kantor kami terletak di
                                    Kompleks Pergudangan Bizpark C-3,
                                    Tambak Sawah, Waru, Sidoarjo. Saat ini kami memiliki 17 mesin cetak dengan tenaga
                                    operator yang sudah profesional dan
                                    berpengalaman pada bidang finishing selama bertahun-tahun. Kualitas hasil finishing
                                    adalah
                                    prioritas utama kami.</p>
                                <div class="row g-4 mb-4 pb-2">
                                    <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                                        <div class="d-flex align-items-center">
                                            <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white"
                                                style="width: 60px; height: 60px;">
                                                <i class="fa fa-users fa-2x text-primary"></i>
                                            </div>
                                            <div class="ms-3">
                                                <h2 class="text-primary mb-1" data-toggle="counter-up">2004</h2>
                                                <p class="fw-medium mb-0">Berdiri Sejak</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                                        <div class="d-flex align-items-center">
                                            <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white"
                                                style="width: 60px; height: 60px;">
                                                <i class="fa fa-check fa-2x text-primary"></i>
                                            </div>
                                            <div class="ms-3">
                                                <h2 class="text-primary mb-1" data-toggle="counter-up">17</h2>
                                                <p class="fw-medium mb-0">Mesin Finishing</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- <a href="" class="btn btn-primary py-3 px-5">Explore More</a> --}}
                            </div>
                        </div>
                    </div>
                    <div class="row g-0 mx-lg-0">
                        <div class="col-lg-6 about-text py-5 wow fadeIn" data-wow-delay="0.5s">
                            <div class="p-lg-5 pe-lg-0">
                                <div class=" text-start">
                                    <h1 class="display-5 mb-4"><span class="text-primary">Visi & Misi</span> <br> Kami
                                    </h1>
                                </div>
                                <p class="mb-4 pb-2 ">Menjadi partner kerja yang inovatif dan produktif serta dapat
                                    memberikan sesuatu nilai tambah baru dalam upaya menghasilkan produk cetakan yang
                                    berkualitas tinggi.</p>
                                <ol class="">
                                    <li>Bekerja dengan kualitas dan ketepatan waktu.</li>
                                    <li>Berinovasi serta mengikuti tuntutan pasar.</li>
                                    <li>Menjalin hubungan kerjasama yang saling menguntungkan.</li>
                                </ol>
                                {{-- <p class="mb-4 pb-2 ">
                                    1. Bekerja dengan kualitas dan ketepatan waktu. <br>
                                    2. Berinovasi serta mengikuti tuntutan pasar. <br>
                                    3. Menjalin hubungan kerjasama yang saling menguntungkan.
                                </p> --}}

                            </div>
                        </div>
                        <div class="col-lg-6 ps-lg-0" style="min-height: 400px;">
                            <div class="position-relative h-100">
                                <img class="position-absolute img-fluid w-100 h-100"
                                    src="{{ asset('img/pelangi-uv-2.webp') }}" style="object-fit: contain;"
                                    alt="">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- About End -->

        <section id="timeline">
            @component('components.timeline')
            @endcomponent
        </section>


        <!-- Service Start -->
        <section id="services">
            @component('components.services')
            @endcomponent
        </section>
        <!-- Service End -->


        <section id="partner">
            <!-- Feature Start -->
            <div class="container-fluid bg-light overflow-hidden my-5 px-lg-0">
                <div class="container feature px-lg-0">
                    <div class="row g-0 mx-lg-0">
                        <div class="col-lg-6 feature-text py-5 wow fadeIn" data-wow-delay="0.5s">
                            <div class="p-lg-5 ps-lg-0">
                                <div class=" text-start">
                                    <h1 class="display-5 mb-4">Kenapa Pilih Kami ?</h1>
                                </div>
                                <p class="mb-4 pb-2">Kami mengedepankan kualitas, dengan pengerjaan yang terjamin dan harga
                                    yang dapat bersaing. Sesuai dengan slogan yang selalu melekat pada kami yaitu, "When
                                    Quality
                                    Be A Priority"</p>
                                <div class="row g-4">
                                    <div class="col-md-6 col-12">
                                        <div class="d-flex align-items-center">
                                            <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white"
                                                style="width: 60px; height: 60px;">
                                                <i class="fa fa-check fa-2x text-primary"></i>
                                            </div>
                                            <div class="ms-4">
                                                {{-- <p class="mb-2">Quality</p> --}}
                                                <h5 class="mb-0">Layanan & Produk Berkualitas</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="d-flex align-items-center">
                                            <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white"
                                                style="width: 60px; height: 60px;">
                                                <i class="fas fa-truck-fast fa-2x text-primary"></i>
                                            </div>
                                            <div class="ms-4">
                                                {{-- <p class="mb-2">Creative</p> --}}
                                                <h5 class="mb-0">Gratis Pengiriman se-Jawa Timur</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="d-flex align-items-center">
                                            <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white"
                                                style="width: 60px; height: 60px;">
                                                <i class="fas fa-money-bill-wave fa-2x text-primary"></i>
                                            </div>
                                            <div class="ms-4">
                                                {{-- <p class="mb-2">Free</p> --}}
                                                <h5 class="mb-0">Harga Bersaing</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="d-flex align-items-center">
                                            <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white"
                                                style="width: 60px; height: 60px;">
                                                <i class="fa fa-user-check fa-2x text-primary"></i>
                                            </div>
                                            <div class="ms-4">
                                                {{-- <p class="mb-2">Customer</p> --}}
                                                <h5 class="mb-0">Tenaga Kerja Profesional</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 pe-lg-0" style="min-height: 400px;">
                            <div class="position-relative h-100">
                                <img class="position-absolute img-fluid w-100 h-100"
                                    src="{{ asset('img/profesional.webp') }}" style="object-fit: cover;" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Feature End -->

            <!-- Testimonial Start -->
            <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="container">
                    <div class=" text-center">
                        <h1 class="display-5 mb-5">Partner Kami</h1>
                    </div>
                    <div class="owl-carousel testimonial-carousel">
                        @foreach ($testimony as $testimony)
                            <div class="testimonial-item text-center">
                                <img class="img-fluid  p-2 mx-auto mb-3" src="{{ asset($testimony['image']) }}"
                                    style="width: auto; height: 120px; object-fit: contain">
                                {{-- <div class="testimonial-text text-center p-4">
                                    <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna
                                    ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea
                                    clita.</p>
                                    <h5 class="mb-1">{{ $testimony['title'] }}</h5>
                                    <span class="fst-italic">Sejak 2018</span>
                                </div> --}}
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        <!-- Testimonial End -->

        <!-- Quote Start -->
        <section id="order-now">
            @component('components.order-now')
            @endcomponent
        </section>
        <!-- Quote End -->


        <!-- Team Start -->
        {{-- <div class="container-xxl py-5">
            <div class="container">
                <div class=" text-center">
                    <h1 class="display-5 mb-5">Team Members</h1>
                </div>
                <div class="row g-4">
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item">
                            <div class="overflow-hidden position-relative">
                                <img class="img-fluid" src="img/team-1.jpg" alt="">
                                <div class="team-social">
                                    <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="text-center border border-5 border-light border-top-0 p-4">
                                <h5 class="mb-0">Full Name</h5>
                                <small>Designation</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item">
                            <div class="overflow-hidden position-relative">
                                <img class="img-fluid" src="img/team-2.jpg" alt="">
                                <div class="team-social">
                                    <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="text-center border border-5 border-light border-top-0 p-4">
                                <h5 class="mb-0">Full Name</h5>
                                <small>Designation</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="team-item">
                            <div class="overflow-hidden position-relative">
                                <img class="img-fluid" src="img/team-3.jpg" alt="">
                                <div class="team-social">
                                    <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="text-center border border-5 border-light border-top-0 p-4">
                                <h5 class="mb-0">Full Name</h5>
                                <small>Designation</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="team-item">
                            <div class="overflow-hidden position-relative">
                                <img class="img-fluid" src="img/team-4.jpg" alt="">
                                <div class="team-social">
                                    <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="text-center border border-5 border-light border-top-0 p-4">
                                <h5 class="mb-0">Full Name</h5>
                                <small>Designation</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- Team End -->

        <!-- Gallery Start -->
        <section id="gallery">
            @component('components.gallery')
            @endcomponent
        </section>
        <!-- Gallery End -->
    </div>
@endsection
<!-- Testimonial End -->
<!--
    <div class="owl-carousel-item position-relative">
        <img class="img-fluid" src="img/carousel-2.jpg" alt="">
        <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
            style="background: rgba(53, 53, 53, .7);">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-8 text-center">
                        {{-- <h5 class="text-white text-uppercase mb-3 animated slideInDown">Welcome To WooDY</h5> --}}
                        <h1 class="display-3 text-white animated slideInDown mb-4">Pelangi UV</h1>
                        <p class="fs-5 fw-medium text-white mb-4 pb-2">CV Pelangi UV merupakan perusahaan yang
                            bergerak di bidang fisnishing cetak yang berdiri sejak tahun 2004. Kami memiliki...
                        </p>
                        <a href=""
                            class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Selengkapnya</a>
                        {{-- <a href="" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Free
                            Quote</a> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="owl-carousel-item position-relative">
        <img class="img-fluid" src="img/carousel-3.jpg" alt="">
        <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
            style="background: rgba(53, 53, 53, .7);">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-8 text-center">
                        {{-- <h5 class="text-white text-uppercase mb-3 animated slideInDown">Welcome To WooDY</h5> --}}
                        <h1 class="display-3 text-white animated slideInDown mb-4">Pelangi UV</h1>
                        <p class="fs-5 fw-medium text-white mb-4 pb-2">CV Pelangi UV merupakan perusahaan yang
                            bergerak di bidang fisnishing cetak yang berdiri sejak tahun 2004. Kami memiliki...
                        </p>
                        <a href=""
                            class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Selengkapnya</a>
                        {{-- <a href="" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Free
                            Quote</a> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
-->
