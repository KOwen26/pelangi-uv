@php
    $services = [['image' => 'img/hot-stamp.webp', 'name' => 'Hot Stamp', 'description' => 'Hot Stamp (Silver/Gold, Warna-Warni)', 'action' => 'hot-stamp'], ['image' => 'img/spot-uv.webp', 'name' => 'Spot UV', 'description' => 'Spot UV (Spot UV C, Matte, Pasir)', 'action' => 'spot-uv'], ['image' => 'img/laminating.webp', 'name' => 'Laminating', 'description' => 'Laminating (Laminating Doff,  Gloss, Hologram)', 'action' => 'laminating'], ['image' => 'img/laminating-window.webp', 'name' => 'Laminating Window', 'description' => 'Laminating Window (25 Micron, 20 Micron, 12 Micron)', 'action' => 'laminating-window'], ['image' => 'img/uv-varnish.webp', 'name' => 'UV Varnish', 'description' => 'UV Varnish (UV Varnish, Waterbased Gloss, Waterbased Doff)', 'action' => 'uv-varnish'], ['image' => 'img/pond.webp', 'name' => 'Pond', 'description' => 'Pond (Plong Otomatis, Plong Manual)', 'action' => 'pond']];
@endphp

<div>
    <div class="container-xxl py-5">
        <div class="container">
            <div class=" text-center">
                <h1 class="display-5 mb-5">Layanan Kami</h1>
            </div>
            <div class="row g-4">
                @foreach ($services as $service)
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item">
                            <div class="overflow-hidden">
                                <img class="img-fluid w-100" src="{{ asset($service['image']) }}"
                                    style="height: 240px;object-fit:cover" alt="">
                            </div>
                            <div class="p-4 text-center border border-5 border-light border-top-0">
                                <h4 class="mb-3">{{ $service['name'] }}</h4>
                                <p>{{ $service['description'] }}</p>
                                <a class="fw-medium"
                                    href="{{ route('services') . '#' . $service['action'] }}">Selengkapnya<i
                                        class="fa fa-arrow-right ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="text-center mt-4 wow fadeInUp" data-wow-delay="0.2s">
                <a class="btn btn-primary px-5 py-3 fw-bold" href="{{ route('services') }}">Lihat Selengkapnya</a>
            </div>
        </div>
    </div>
</div>

{{--
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/service-2.jpg" alt="">
                        </div>
                        <div class="p-4 text-center border border-5 border-light border-top-0">
                            <h4 class="mb-3">Furniture Manufacturing</h4>
                            <p>Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam lorem diam.</p>
                            <a class="fw-medium" href="">Read More<i class="fa fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/service-3.jpg" alt="">
                        </div>
                        <div class="p-4 text-center border border-5 border-light border-top-0">
                            <h4 class="mb-3">Furniture Remodeling</h4>
                            <p>Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam lorem diam.</p>
                            <a class="fw-medium" href="">Read More<i class="fa fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/service-4.jpg" alt="">
                        </div>
                        <div class="p-4 text-center border border-5 border-light border-top-0">
                            <h4 class="mb-3">Wooden Floor</h4>
                            <p>Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam lorem diam.</p>
                            <a class="fw-medium" href="">Read More<i class="fa fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/service-5.jpg" alt="">
                        </div>
                        <div class="p-4 text-center border border-5 border-light border-top-0">
                            <h4 class="mb-3">Wooden Furniture</h4>
                            <p>Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam lorem diam.</p>
                            <a class="fw-medium" href="">Read More<i class="fa fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/service-6.jpg" alt="">
                        </div>
                        <div class="p-4 text-center border border-5 border-light border-top-0">
                            <h4 class="mb-3">Custom Work</h4>
                            <p>Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam lorem diam.</p>
                            <a class="fw-medium" href="">Read More<i class="fa fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
    --}}
