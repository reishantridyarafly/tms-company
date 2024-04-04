@extends('layouts.main')
@section('title', 'Kontak')
@section('content')
    <!-- Hero Start -->
    <section class="vh-100 d-flex align-items-center"
        style="background: url('assets/images/contact-detail.jpg') center center;">
        <div class="bg-overlay bg-overlay-white"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 offset-lg-6 col-md-7 offset-md-5">
                    <div class="title-heading mt-5 pt-4">
                        <h1 class="heading">Let's talk about your portfolio</h1>

                        <div class="d-flex contact-detail align-items-center mt-3">
                            <div class="icon">
                                <i data-feather="mail" class="fea icon-m-md text-dark me-3"></i>
                            </div>
                            <div class="flex-1 content">
                                <h5 class="title fw-bold mb-0">Email</h5>
                                <a href="mailto:reishantridyarafly@gmail.com" class="text-primary"
                                    target="_blank">reishantridyarafly@gmail.com</a>
                            </div>
                        </div>

                        <div class="d-flex contact-detail align-items-center mt-3">
                            <div class="icon">
                                <i data-feather="phone" class="fea icon-m-md text-dark me-3"></i>
                            </div>
                            <div class="flex-1 content">
                                <h5 class="title fw-bold mb-0">Phone</h5>
                                <a href="https://wa.me/62895617545305" class="text-primary"
                                    target="_blank">0895-6175-45305</a>
                            </div>
                        </div>

                        <ul class="list-unstyled social-icon mb-0 mt-4">
                            <li class="list-inline-item"><a href="https://facebook.com/reishan.rafly" class="rounded"
                                    target="_blank"><i data-feather="facebook" class="fea icon-sm fea-social"></i></a></li>
                            <li class="list-inline-item"><a href="https://instagram.com/reishan.rafly" class="rounded"
                                    target="_blank"><i data-feather="instagram" class="fea icon-sm fea-social"></i></a></li>
                            <li class="list-inline-item"><a href="https://www.linkedin.com/in/reishan-tridya-rafly"
                                    class="rounded" target="_blank"><i data-feather="linkedin"
                                        class="fea icon-sm fea-social"></i></a></li>
                            <li class="list-inline-item"><a href="https://github.com/reishantridyarafly/" class="rounded"
                                    target="_blank"><i data-feather="github" class="fea icon-sm fea-social"></i></a></li>
                        </ul><!--end icon-->
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </section><!--end section-->
    <!-- Hero End -->
@endsection
