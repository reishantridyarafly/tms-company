@extends('layouts.main')
@section('title', 'Tentang')
@section('content')
    <!-- Start -->
    <section class="bg-half-170 d-table w-100">
        <div class="container">
            <div class="row justify-content-center mt-5">
                <div class="col-lg-10">
                    <div class="section-title text-center">
                        <img src="{{ asset('assets') }}/images/saas/2.png"
                            class="img-fluid avatar avatar-large rounded-pill shadow-md" alt="">

                        <h4 class="title mt-4 mb-0">Teknologi Mandiri Sentosa</h4>
                        <small class="fw-bold text-primary">(TMS)</small>
                    </div>
                </div><!--end col-->

                <div class="col-lg-10 mt-4 pt-2">
                    <p class="text-muted">Teknologi Mandiri Sentosa (TMS) adalah perusahaan yang berfokus pada penyediaan
                        solusi teknologi inovatif dan terpercaya untuk bisnis Anda. Dengan kantor pusat kami yang strategis
                        di Jakarta, kami telah menjadi mitra tepercaya bagi banyak perusahaan di berbagai sektor
                        industri. </p>
                    <p class="text-muted">Sejak awal, kami telah menetapkan komitmen untuk memberikan solusi yang tidak
                        hanya mengatasi tantangan bisnis saat ini, tetapi juga membantu Anda bersiap menghadapi masa depan
                        yang semakin digital. Kami percaya bahwa keberhasilan bisnis kami tercermin melalui kesuksesan dan
                        kepuasan pelanggan yang kami layani.</p>
                    <p class="text-muted">Dengan tim yang berpengalaman dan penuh dedikasi, TMS siap membantu bisnis Anda
                        tumbuh dan berkembang dalam era teknologi yang terus berubah dengan cepat.</p>

                    <ul class="list-unstyled text-center social-icon social mb-0 mt-4 pt-2">
                        <li class="list-inline-item"><a href="https://facebook.com/reishan.rafly" class="rounded-pill"><i
                                    data-feather="facebook" class="fea icon-sm fea-social"></i></a></li>
                        <li class="list-inline-item"><a href="https://instagram.com/reishan.rafly" class="rounded-pill"><i
                                    data-feather="instagram" class="fea icon-sm fea-social"></i></a></li>
                        <li class="list-inline-item"><a href="https://www.linkedin.com/in/reishan-tridya-rafly"
                                class="rounded-pill"><i data-feather="linkedin" class="fea icon-sm fea-social"></i></a></li>
                        <li class="list-inline-item"><a href="https://github.com/reishantridyarafly/"
                                class="rounded-pill"><i data-feather="github" class="fea icon-sm fea-social"></i></a></li>
                    </ul><!--end icon-->
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </section><!--end section-->
    <!-- End -->
@endsection
