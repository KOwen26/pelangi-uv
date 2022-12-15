@extends('layouts.master')
@section('body')
    <div>
        <div class="container-fluid bg-light overflow-hidden my-5 px-lg-0">
            <div class="container about px-lg-0">
                <div class="row g-0 mx-lg-0">
                    <div class="col-lg-6 ps-lg-0" style="min-height: 400px;">
                        <div class="position-relative h-100">
                            <img class="position-absolute img-fluid w-100 h-100" src="img/about.jpg" style="object-fit: cover;"
                                alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 about-text py-5 wow fadeIn" data-wow-delay="0.5s">
                        <div class="p-lg-5 pe-lg-0">
                            <div class=" text-start">
                                <h1 class="display-5 mb-4">Tentang <br> <span class="text-primary">PELANGI UV</span>
                                </h1>
                            </div>
                            <p class="mb-4 pb-2 ">CV Pelangi UV merupakan perusahaan yang bergerak pada
                                bidang finishing cetak dan telah berdiri sejak tahun 2004
                                . Kantor kami terletak di Kompleks Pergudangan Bizpark C-3,
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
                                            <p class="fw-medium mb-0">Mesin Printing</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="" class="btn btn-primary py-3 px-5">Daftar Sekarang</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
