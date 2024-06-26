@extends('layouts.main')
@section('title', 'Beranda')
@section('content')
    <!-- Hero Start -->
    <section class="bg-half-170 border-bottom agency-wrapper d-table w-100" id="home">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 col-md-7 order-1 order-md-2">
                    <div class="title-heading mt-4 ms-lg-5">
                        <h6 class="heading mb-3"><span class="text-primary">Teknologi Mandiri Sentosa</span>
                            Solusi Teknologi Inovatif untuk Bisnis Anda</h6>
                        <p class="para-desc text-muted">Tingkatkan bisnis Anda dengan solusi teknologi terkini dari TMS.
                            Hubungi kami sekarang untuk menjadikan bisnis Anda lebih maju.</p>
                        <div class="mt-4 pt-2">
                            <a href="{{ route('tentang.index') }}" class="btn btn-primary m-1">Lihat Selengkapnya<i
                                    class="uil uil-angle-right-b"></i></a>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-5 col-md-5 order-2 order-md-1 mt-4 pt-2 mt-sm-0 pt-sm-0">
                    <img src="{{ asset('assets') }}/images/illustrator/working_with_computer.svg" class="img-fluid"
                        alt="">
                </div>
            </div><!--end row-->
        </div><!--end container-->
    </section><!--end section-->
    <!-- Hero End -->

    <!-- Feature Start -->
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-12">
                    <div class="features feature-primary text-center">
                        <div class="image position-relative d-inline-block">
                            <i class="uil uil-edit-alt h2 text-primary"></i>
                        </div>

                        <div class="content mt-4">
                            <h5>Visi</h5>
                            <p class="text-muted mb-0">Visi kami adalah menjadi pemimpin dalam menyediakan solusi
                                teknologi yang mengubah industri dan memberikan nilai tambah yang signifikan bagi klien
                                kami.</p>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-md-6 col-12 mt-5 mt-sm-0">
                    <div class="features feature-primary text-center">
                        <div class="image position-relative d-inline-block">
                            <i class="uil uil-vector-square h2 text-primary"></i>
                        </div>

                        <div class="content mt-4">
                            <h5>Misi</h5>
                            <p class="text-muted mb-0">TMS berkomitmen untuk Menyediakan solusi teknologi inovatif dan
                                terkini, Membangun hubungan jangka panjang yang kuat dengan pelanggan dan Terus
                                berinovasi untuk memenuhi kebutuhan pelanggan. </p>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->

        <div class="container mt-100 mt-60">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <img src="{{ asset('assets') }}/images/saas/2.png" class="img-fluid" alt="">
                </div><!--end col-->

                <div class="col-lg-6 col-md-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <div class="section-title ms-lg-3">
                        <h4 class="title mb-4">Tentang</h4>
                        <p class="text-muted">Teknologi Mandiri Sentosa (TMS) adalah perusahaan teknologi yang
                            berdedikasi untuk menyediakan solusi inovatif dan terpercaya bagi bisnis Anda. Dengan kantor
                            pusat kami yang berlokasi di Jakarta, TMS telah menjadi mitra tepercaya bagi banyak
                            perusahaan di berbagai sektor.</p>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </section><!--end section-->
    <!-- Feature End -->

    <!-- Shape Start -->
    <div class="position-relative">
        <div class="shape overflow-hidden text-light">
            <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
            </svg>
        </div>
    </div>
    <!--Shape End-->

    <!-- Testi Start -->
    <section class="section bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <div class="section-title mb-4 pb-2">
                        <h4 class="title mb-4">Ulasan</h4>
                        <p class="text-muted para-desc mx-auto mb-0"> Mulai bekerja dengan
                            <span class="text-primary fw-bold">Teknologi Mandiri Sentosa (TMS)</span> yang dapat menyediakan
                            semua yang Anda butuhkan.
                        </p>
                    </div>
                </div><!--end col-->
            </div><!--end row-->

            <div class="row justify-content-center">
                <div class="col-lg-12 mt-4">
                    <div class="tiny-three-item">
                        <div class="tiny-slide">
                            <div class="client-testi d-flex m-2">
                                <img src="{{ asset('assets') }}/images/client/01.jpg"
                                    class="avatar avatar-small client-image rounded shadow" alt="">
                                <div class="card flex-1 content p-3 shadow rounded position-relative">
                                    <ul class="list-unstyled mb-0">
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    </ul>
                                    <p class="text-muted mt-2">"Saya sangat terkesan dengan solusi teknologi yang inovatif
                                        dari Teknologi Mandiri Sentosa. Mereka benar-benar membantu bisnis saya berkembang
                                        dengan cepat!. "</p>
                                    <h6 class="text-primary">- Andi <small class="text-muted">C.E.O</small>
                                    </h6>
                                </div>
                            </div>
                        </div>

                        <div class="tiny-slide">
                            <div class="client-testi d-flex m-2">
                                <img src="{{ asset('assets') }}/images/client/02.jpg"
                                    class="avatar avatar-small client-image rounded shadow" alt="">
                                <div class="card flex-1 content p-3 shadow rounded position-relative">
                                    <ul class="list-unstyled mb-0">
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star-half text-warning"></i>
                                        </li>
                                    </ul>
                                    <p class="text-muted mt-2">"Hubungan jangka panjang yang saya bangun dengan TMS sungguh
                                        berarti bagi bisnis saya. Mereka selalu siap mendengarkan dan memberikan solusi yang
                                        tepat untuk setiap tantangan yang kami hadapi. "</p>
                                    <h6 class="text-primary">- Dewi <small class="text-muted">M.D</small>
                                    </h6>
                                </div>
                            </div>
                        </div>

                        <div class="tiny-slide">
                            <div class="client-testi d-flex m-2">
                                <img src="{{ asset('assets') }}/images/client/03.jpg"
                                    class="avatar avatar-small client-image rounded shadow" alt="">
                                <div class="card flex-1 content p-3 shadow rounded position-relative">
                                    <ul class="list-unstyled mb-0">
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    </ul>
                                    <p class="text-muted mt-2">" Teknologi Mandiri Sentosa telah membawa bisnis kami ke level berikutnya dengan solusi teknologi yang terdepan dalam industri. Kami sangat puas dengan hasilnya! "</p>
                                    <h6 class="text-primary">- Citra <small class="text-muted">P.A</small></h6>
                                </div>
                            </div>
                        </div>

                        <div class="tiny-slide">
                            <div class="client-testi d-flex m-2">
                                <img src="{{ asset('assets') }}/images/client/04.jpg"
                                    class="avatar avatar-small client-image rounded shadow" alt="">
                                <div class="card flex-1 content p-3 shadow rounded position-relative">
                                    <ul class="list-unstyled mb-0">
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    </ul>
                                    <p class="text-muted mt-2">" TMS bukan hanya sekadar penyedia solusi teknologi, tetapi juga mitra yang peduli. Mereka selalu memastikan kebutuhan dan harapan kami terpenuhi, membuat pengalaman kerja sama kami sangat menyenangkan. "</p>
                                    <h6 class="text-primary">- Budi <small class="text-muted">Manager</small>
                                    </h6>
                                </div>
                            </div>
                        </div>

                        <div class="tiny-slide">
                            <div class="client-testi d-flex m-2">
                                <img src="{{ asset('assets') }}/images/client/05.jpg"
                                    class="avatar avatar-small client-image rounded shadow" alt="">
                                <div class="card flex-1 content p-3 shadow rounded position-relative">
                                    <ul class="list-unstyled mb-0">
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    </ul>
                                    <p class="text-muted mt-2">" Tim di TMS sungguh luar biasa! Mereka tidak hanya ahli dalam teknologi, tetapi juga sangat berdedikasi untuk membantu bisnis kami mencapai kesuksesan. Terima kasih, TMS! "</p>
                                    <h6 class="text-primary">- Eka <small class="text-muted">Developer</small>
                                    </h6>
                                </div>
                            </div>
                        </div>

                        <div class="tiny-slide">
                            <div class="client-testi d-flex m-2">
                                <img src="{{ asset('assets') }}/images/client/06.jpg"
                                    class="avatar avatar-small client-image rounded shadow" alt="">
                                <div class="card flex-1 content p-3 shadow rounded position-relative">
                                    <ul class="list-unstyled mb-0">
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    </ul>
                                    <p class="text-muted mt-2">" Dengan bantuan TMS, bisnis kami berhasil menghadapi perubahan digital dengan lebih percaya diri. Mereka membantu kami memahami tren industri dan memberikan solusi yang sesuai dengan kebutuhan bisnis kami. Sungguh rekomendasi! "</p>
                                    <h6 class="text-primary">- Fajar <small class="text-muted">Designer</small>
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->

        <div class="container mt-100 mt-60">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <div class="section-title mb-4 pb-2">
                        <h4 class="title mb-4">Berita Terkini</h4>
                    </div>
                </div><!--end col-->
            </div><!--end row-->

            <div class="row">
                <div class="col-lg-4 col-md-6 mt-4 pt-2">
                    <div class="card blog blog-primary rounded border-0 shadow">
                        <div class="position-relative">
                            <img src="{{ asset('assets') }}/images/blog/01.jpg" class="card-img-top rounded-top"
                                alt="...">
                            <div class="overlay rounded-top"></div>
                        </div>
                        <div class="card-body content">
                            <h5><a href="{{ route('artikel.detail') }}" class="card-title title text-dark">Menghadirkan Solusi
                                    Teknologi Inovatif: Kunci Kesuksesan Bisnis di Era Digital</a></h5>
                            <div class="post-meta d-flex justify-content-between mt-3">
                                <ul class="list-unstyled mb-0">
                                    <li class="list-inline-item me-2 mb-0"><a href="{{ route('artikel.detail') }}"
                                            class="text-muted like"><i class="uil uil-heart me-1"></i>33</a></li>
                                    <li class="list-inline-item"><a href="{{ route('artikel.detail') }}"
                                            class="text-muted comments"><i class="uil uil-comment me-1"></i>08</a>
                                    </li>
                                </ul>
                                <a href="{{ route('artikel.detail') }}" class="text-muted readmore">Baca Selengkapnya <i
                                        class="uil uil-angle-right-b"></i></a>
                            </div>
                        </div>
                        <div class="author">
                            <small class="user d-block"><i class="uil uil-user"></i> Reishan Tridya Rafly</small>
                            <small class="date"><i class="uil uil-calendar-alt"></i> 10 Juni 2024</small>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-4 col-md-6 mt-4 pt-2">
                    <div class="card blog blog-primary rounded border-0 shadow">
                        <div class="position-relative">
                            <img src="{{ asset('assets') }}/images/blog/02.jpg" class="card-img-top rounded-top"
                                alt="...">
                            <div class="overlay rounded-top"></div>
                        </div>
                        <div class="card-body content">
                            <h5><a href="{{ route('artikel.detail') }}" class="card-title title text-dark">Membangun Hubungan
                                    Pelanggan yang Berkelanjutan: Kunci Utama Kesuksesan Bisnis TMS</a></h5>
                            <div class="post-meta d-flex justify-content-between mt-3">
                                <ul class="list-unstyled mb-0">
                                    <li class="list-inline-item me-2 mb-0"><a href="{{ route('artikel.detail') }}"
                                            class="text-muted like"><i class="uil uil-heart me-1"></i>33</a></li>
                                    <li class="list-inline-item"><a href="{{ route('artikel.detail') }}"
                                            class="text-muted comments"><i class="uil uil-comment me-1"></i>08</a>
                                    </li>
                                </ul>
                                <a href="{{ route('artikel.detail') }}" class="text-muted readmore">Baca Selengkapnya <i
                                        class="uil uil-angle-right-b"></i></a>
                            </div>
                        </div>
                        <div class="author">
                            <small class="user d-block"><i class="uil uil-user"></i> Reishan Tridya Rafly</small>
                            <small class="date"><i class="uil uil-calendar-alt"></i> 10 Juni 2024</small>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-4 col-md-6 mt-4 pt-2">
                    <div class="card blog blog-primary rounded border-0 shadow">
                        <div class="position-relative">
                            <img src="{{ asset('assets') }}/images/blog/03.jpg" class="card-img-top rounded-top"
                                alt="...">
                            <div class="overlay rounded-top"></div>
                        </div>
                        <div class="card-body content">
                            <h5><a href="{{ route('artikel.detail') }}" class="card-title title text-dark">Membangun Budaya Inovasi:
                                    Kunci Kesuksesan Tim Teknologi Mandiri Sentosa (TMS)</a></h5>
                            <div class="post-meta d-flex justify-content-between mt-3">
                                <ul class="list-unstyled mb-0">
                                    <li class="list-inline-item me-2 mb-0"><a href="{{ route('artikel.detail') }}"
                                            class="text-muted like"><i class="uil uil-heart me-1"></i>33</a></li>
                                    <li class="list-inline-item"><a href="{{ route('artikel.detail') }}"
                                            class="text-muted comments"><i class="uil uil-comment me-1"></i>08</a>
                                    </li>
                                </ul>
                                <a href="{{ route('artikel.detail') }}" class="text-muted readmore">Baca Selengkapnya <i
                                        class="uil uil-angle-right-b"></i></a>
                            </div>
                        </div>
                        <div class="author">
                            <small class="user d-block"><i class="uil uil-user"></i> Reishan Tridya Rafly</small>
                            <small class="date"><i class="uil uil-calendar-alt"></i> 10 Juni 2024</small>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </section><!--end section-->
    <!-- Testi End -->

    <!-- Shape Start -->
    <div class="position-relative">
        <div class="shape overflow-hidden text-footer">
            <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
            </svg>
        </div>
    </div>
    <!--Shape End-->
@endsection
