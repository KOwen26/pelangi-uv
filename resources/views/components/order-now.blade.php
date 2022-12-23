<div>
    <div class="container-fluid bg-light overflow-hidden my-5 px-lg-0">
        <div class="container quote px-lg-0">
            <div class="row g-0 mx-lg-0">
                <div class="col-lg-6 ps-lg-0" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid w-100 h-100" src="{{ asset('img/contact-us-2.webp') }}"
                            style="object-fit:contain;" alt="">
                    </div>
                </div>
                <div class="col-lg-6 quote-text py-5 wow fadeIn" data-wow-delay="0.5s">
                    <div class="p-lg-5 pe-lg-0">
                        <div class=" text-start">
                            <h5 class="text-primary">Butuh jasa finishing?</h5>
                            <h1 class="display-5 mb-4">Hubungi Kami Sekarang!</h1>
                        </div>
                        {{-- <p class="mb-4 pb-2">Butuh jasa finishing? Hubungi kami sekarang!</p> --}}
                        <form>
                            <div class="row g-3">
                                <div class="col-12">
                                    <input type="text" id="name" class="form-control border-0"
                                        placeholder="Namamu" style="height: 55px;">
                                </div>
                                {{-- <div class="col-12 col-sm-6">
                                    <input type="email" class="form-control border-0" placeholder="Your Email"
                                        style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control border-0" placeholder="Your Mobile"
                                        style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <select class="form-select border-0" style="height: 55px;">
                                        <option selected>Select A Service</option>
                                        <option value="1">Service 1</option>
                                        <option value="2">Service 2</option>
                                        <option value="3">Service 3</option>
                                    </select>
                                </div> --}}
                                <div class="col-12">
                                    <textarea class="form-control border-0" id="notes" placeholder="Catatan / Keterangan"></textarea>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" onclick="order()" type="button">Pesan
                                        Sekarang</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function order() {
        let name = $('#name')[0].value;
        let notes = $('#notes')[0].value;
        let number = {!! env('PHONE_NUMBER_1') !!};
        let message = encodeURIComponent(`Halo min Saya ${name}, ingin bertanya mengenai ${notes}`);
        if (name !== undefined && notes !== undefined) {
            window.location.href = (`https://api.whatsapp.com/send?phone=${number}&text=${message}`, '_blank');
        }
    }
</script>
