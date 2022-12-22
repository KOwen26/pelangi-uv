<div>
    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Alamat</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Kompleks Pergudangan Bizpark C-3, Tambak
                        Sawah, Waru - Sidoarjo </p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>
                        <a class="text-white" href="#"> {{ env('PHONE_NUMBER_3') }} </a> / <a class="text-white"
                            href="#"> {{ env('PHONE_NUMBER_4') }} </a> / <a class="text-white" href="#">
                            {{ env('PHONE_NUMBER_1') }} </a>
                    </p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i><a class="text-white" href="#">
                            {{ env('EMAIL_ADDRESS') }} </a></p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-tiktok"></i></a>

                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Layanan Kami</h4>
                    <a class="btn btn-link" href="{{ route('services') }}#hot-stamp">Hot Stamp</a>
                    <a class="btn btn-link" href="{{ route('services') }}#spot-uv">Spot UV</a>
                    <a class="btn btn-link" href="{{ route('services') }}#laminating">Laminating</a>
                    <a class="btn btn-link" href="{{ route('services') }}#laminating-window">Laminating Window</a>
                    <a class="btn btn-link" href="{{ route('services') }}#uv-varnish">UV Varnish</a>
                    <a class="btn btn-link" href="{{ route('services') }}#pond">Pond</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Menu</h4>
                    <a class="btn btn-link" href="#about">Tentang Kami</a>
                    <a class="btn btn-link" href="#timeline">Perjalan</a>
                    <a class="btn btn-link" href="{{ route('services') }}">Layanan Kami</a>
                    <a class="btn btn-link" href="#partner">Partner</a>
                    <a class="btn btn-link" href="#gallery">Galeri</a>
                    <a class="btn btn-link" href="{{ route('career') }}">Karir</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <img src="{{ asset('img/logo-text-white.png') }}" height="120px" alt="">
                    {{-- <h4 class="text-light mb-4">Newsletter</h4>
                    <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                        <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text"
                            placeholder="Your email">
                        <button type="button"
                            class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                    </div> --}}
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        {{ date('Y') }} &copy; <a class="border-bottom" href="#">Pelangi UV </a>, All Right
                        Reserved.
                    </div>
                    {{-- <div class="col-md-6 text-center text-md-end">
                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->
</div>
