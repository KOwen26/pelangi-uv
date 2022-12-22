@php
    $category = ['history' => 'Sejarah Perusahaan', 'production' => 'Produksi', 'crew' => 'Tim'];
    $gallery = [
        ['image' => 'img/cikal-bakal-pelangi-uv.webp', 'title' => 'Founder Pelangi UV', 'category' => 'history'],
        ['image' => 'img/cikal-bakal-pelangi-uv-2.webp', 'title' => 'Mesin Pertama Pelangi UV', 'category' => 'history'],
        ['image' => 'img/cikal-bakal-pelangi-uv-3.webp', 'title' => 'Tim Pertama Pelangi UV', 'category' => 'history'],
        ['image' => 'img/produksi-1.webp', 'title' => 'Produksi In Action 1', 'category' => 'production'],
        ['image' => 'img/produksi-2.webp', 'title' => 'Produksi In Action 2', 'category' => 'production'],
        ['image' => 'img/working-1.webp', 'title' => 'Produksi In Action 3', 'category' => 'production'],
        ['image' => 'img/working-2.webp', 'title' => 'Semangat Bekerja', 'category' => 'production'],
        ['image' => 'img/produksi-3.webp', 'title' => 'Mesin Produksi Kami', 'category' => 'production'],
        ['image' => 'img/crew-1.webp', 'title' => 'Pelangi UV On Bali 1', 'category' => 'crew'],
        ['image' => 'img/crew-2.webp', 'title' => 'Pelangi UV On Bali 2', 'category' => 'crew'],
        ['image' => 'img/crew-4.webp', 'title' => 'Pelangi UV On Outbound 1', 'category' => 'crew'],
        ['image' => 'img/crew-3.webp', 'title' => 'Pelangi UV On Outbound 2', 'category' => 'crew'],
    ];
@endphp
<div>
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center">
                <h1 class="display-5 mb-5">Galeri</h1>
            </div>
            <div class="row mt-n2 wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-12 text-center">
                    <ul class="list-inline mb-5" id="portfolio-flters">
                        <li class="mx-2 active" data-filter="*">All</li>
                        @foreach ($category as $key => $value)
                            <li class="mx-2" data-filter="#{{ $key }}">{{ $value }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="row g-4 portfolio-container">
                @foreach ($gallery as $gallery)
                    <div class="col-lg-4 col-md-6 portfolio-item wow fadeInUp" style="min-height: 400px"
                        id="{{ $gallery['category'] }}" data-wow-delay="0.2s">
                        <div class="rounded overflow-hidden">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="{{ asset($gallery['image']) }}" style="height: 240px"
                                    alt="{{ $gallery['title'] }}">
                                <div class="portfolio-overlay">
                                    <a class="btn btn-square btn-outline-light mx-1" href="{{ $gallery['image'] }}"
                                        data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                    {{-- <a class="btn btn-square btn-outline-light mx-1" href=""><i
                                            class="fa fa-link"></i></a> --}}
                                </div>
                            </div>
                            <div class="border border-5 border-light border-top-0 p-4">
                                <p class="text-primary fw-medium mb-2">{{ $category[$gallery['category']] }}</p>
                                <h5 class="lh-base mb-0">{{ $gallery['title'] }}</a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
</div>

{{--
                    <div class="col-lg-4 col-md-6 portfolio-item second wow fadeInUp" data-wow-delay="0.3s">
                    <div class="rounded overflow-hidden">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/portfolio-2.jpg" alt="">
                            <div class="portfolio-overlay">
                                <a class="btn btn-square btn-outline-light mx-1" href="img/portfolio-2.jpg"
                                    data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                <a class="btn btn-square btn-outline-light mx-1" href=""><i
                                        class="fa fa-link"></i></a>
                            </div>
                        </div>
                        <div class="border border-5 border-light border-top-0 p-4">
                            <p class="text-primary fw-medium mb-2">Custom Carpentry</p>
                            <h5 class="lh-base mb-0">Wooden Furniture Manufacturing And Remodeling</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.5s">
                    <div class="rounded overflow-hidden">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/portfolio-3.jpg" alt="">
                            <div class="portfolio-overlay">
                                <a class="btn btn-square btn-outline-light mx-1" href="img/portfolio-3.jpg"
                                    data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                <a class="btn btn-square btn-outline-light mx-1" href=""><i
                                        class="fa fa-link"></i></a>
                            </div>
                        </div>
                        <div class="border border-5 border-light border-top-0 p-4">
                            <p class="text-primary fw-medium mb-2">General Carpentry</p>
                            <h5 class="lh-base mb-0">Wooden Furniture Manufacturing And Remodeling</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item second wow fadeInUp" data-wow-delay="0.1s">
                    <div class="rounded overflow-hidden">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/portfolio-4.jpg" alt="">
                            <div class="portfolio-overlay">
                                <a class="btn btn-square btn-outline-light mx-1" href="img/portfolio-4.jpg"
                                    data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                <a class="btn btn-square btn-outline-light mx-1" href=""><i
                                        class="fa fa-link"></i></a>
                            </div>
                        </div>
                        <div class="border border-5 border-light border-top-0 p-4">
                            <p class="text-primary fw-medium mb-2">Custom Carpentry</p>
                            <h5 class="lh-base mb-0">Wooden Furniture Manufacturing And Remodeling</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.3s">
                    <div class="rounded overflow-hidden">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/portfolio-5.jpg" alt="">
                            <div class="portfolio-overlay">
                                <a class="btn btn-square btn-outline-light mx-1" href="img/portfolio-5.jpg"
                                    data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                <a class="btn btn-square btn-outline-light mx-1" href=""><i
                                        class="fa fa-link"></i></a>
                            </div>
                        </div>
                        <div class="border border-5 border-light border-top-0 p-4">
                            <p class="text-primary fw-medium mb-2">General Carpentry</p>
                            <h5 class="lh-base mb-0">Wooden Furniture Manufacturing And Remodeling</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item second wow fadeInUp" data-wow-delay="0.5s">
                    <div class="rounded overflow-hidden">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/portfolio-6.jpg" alt="">
                            <div class="portfolio-overlay">
                                <a class="btn btn-square btn-outline-light mx-1" href="img/portfolio-6.jpg"
                                    data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                <a class="btn btn-square btn-outline-light mx-1" href=""><i
                                        class="fa fa-link"></i></a>
                            </div>
                        </div>
                        <div class="border border-5 border-light border-top-0 p-4">
                            <p class="text-primary fw-medium mb-2">Custom Carpentry</p>
                            <h5 class="lh-base mb-0">Wooden Furniture Manufacturing And Remodeling</a>
                        </div>
                    </div>
                </div>
    --}}
