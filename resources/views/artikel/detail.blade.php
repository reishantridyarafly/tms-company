@extends('layouts.main')
@section('title', 'Detail')
@section('content')
    <!-- Start -->
    <section class="bg-half-170 d-table w-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-7">
                    <div class="card border-0 shadow rounded overflow-hidden">
                        <img src="{{ asset('assets') }}/images/blog/standard.jpg" class="img-fluid" alt="">

                        <div class="card-body">
                            <div class="text-center">
                                <span class="badge bg-primary">Travel</span>
                                <h4 class="mt-3">Menghadirkan Solusi Teknologi Inovatif: Kunci Kesuksesan Bisnis di Era
                                    Digital
                                </h4>

                                <ul class="list-unstyled mt-3">
                                    <li class="list-inline-item user text-muted me-2"><i class="mdi mdi-account"></i>
                                        Reishan Tridya Rafly</li>
                                    <li class="list-inline-item date text-muted"><i class="mdi mdi-calendar-check"></i>10 Juni 2024</li>
                                </ul>
                            </div>

                            <p class="text-muted mt-3">Dalam era digital yang terus berkembang, Teknologi Mandiri Sentosa (TMS) memahami pentingnya solusi teknologi inovatif bagi kesuksesan bisnis. Dengan fokus pada pengembangan produk dan layanan yang terdepan dalam industri, TMS menghadirkan solusi yang mampu mengatasi tantangan bisnis modern. Melalui pendekatan inovatif yang terus diperbarui, TMS membantu pelanggan meraih keunggulan kompetitif di pasar yang semakin ketat. </p>
                           
                            <div class="post-meta mt-3">
                                <ul class="list-unstyled mb-0">
                                    <li class="list-inline-item me-2 mb-0"><a href="javascript:void(0)"
                                            class="text-muted like"><i class="uil uil-heart me-1"></i>33</a></li>
                                    <li class="list-inline-item"><a href="javascript:void(0)" class="text-muted comments"><i
                                                class="uil uil-comment me-1"></i>08</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="card shadow rounded border-0 mt-4">
                        <div class="card-body">
                            <h5 class="card-title mb-0">Comments :</h5>

                            <ul class="media-list list-unstyled mb-0">
                                <li class="mt-4">
                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <a class="pe-3" href="#">
                                                <img src="{{ asset('assets') }}/images/client/01.jpg"
                                                    class="img-fluid avatar avatar-md-sm rounded-circle shadow"
                                                    alt="img">
                                            </a>
                                            <div class="commentor-detail">
                                                <h6 class="mb-0"><a href="javascript:void(0)"
                                                        class="text-dark media-heading">Lorenzo Peterson</a></h6>
                                                <small class="text-muted">15th August, 2021 at 01:25 pm</small>
                                            </div>
                                        </div>
                                        <a href="#" class="text-muted"><i class="mdi mdi-reply"></i> Reply</a>
                                    </div>
                                    <div class="mt-3">
                                        <p class="text-muted fst-italic p-3 bg-light rounded">" There are many variations of
                                            passages of Lorem Ipsum available, but the majority have suffered alteration in
                                            some form, by injected humour "</p>
                                    </div>
                                </li>

                                <li class="mt-4">
                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <a class="pe-3" href="#">
                                                <img src="{{ asset('assets') }}/images/client/02.jpg"
                                                    class="img-fluid avatar avatar-md-sm rounded-circle shadow"
                                                    alt="img">
                                            </a>
                                            <div class="commentor-detail">
                                                <h6 class="mb-0"><a href="javascript:void(0)"
                                                        class="media-heading text-dark">Tammy Camacho</a></h6>
                                                <small class="text-muted">15th August, 2021 at 05:44 pm</small>
                                            </div>
                                        </div>
                                        <a href="#" class="text-muted"><i class="mdi mdi-reply"></i> Reply</a>
                                    </div>
                                    <div class="mt-3">
                                        <p class="text-muted fst-italic p-3 bg-light rounded">" There are many variations of
                                            passages of Lorem Ipsum available, but the majority have suffered alteration in
                                            some form, by injected humour "</p>
                                    </div>
                                </li>

                                <li class="mt-4">
                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <a class="pe-3" href="#">
                                                <img src="{{ asset('assets') }}/images/client/03.jpg"
                                                    class="img-fluid avatar avatar-md-sm rounded-circle shadow"
                                                    alt="img">
                                            </a>
                                            <div class="commentor-detail">
                                                <h6 class="mb-0"><a href="javascript:void(0)"
                                                        class="media-heading text-dark">Tammy Camacho</a></h6>
                                                <small class="text-muted">16th August, 2021 at 03:44 pm</small>
                                            </div>
                                        </div>
                                        <a href="#" class="text-muted"><i class="mdi mdi-reply"></i> Reply</a>
                                    </div>
                                    <div class="mt-3">
                                        <p class="text-muted fst-italic p-3 bg-light rounded">" There are many variations of
                                            passages of Lorem Ipsum available, but the majority have suffered alteration in
                                            some form, by injected humour "</p>
                                    </div>

                                    <ul class="list-unstyled ps-4 ps-md-5 sub-comment">
                                        <li class="mt-4">
                                            <div class="d-flex justify-content-between">
                                                <div class="d-flex align-items-center">
                                                    <a class="pe-3" href="#">
                                                        <img src="{{ asset('assets') }}/images/client/01.jpg"
                                                            class="img-fluid avatar avatar-md-sm rounded-circle shadow"
                                                            alt="img">
                                                    </a>
                                                    <div class="commentor-detail">
                                                        <h6 class="mb-0"><a href="javascript:void(0)"
                                                                class="text-dark media-heading">Lorenzo Peterson</a></h6>
                                                        <small class="text-muted">17th August, 2021 at 01:25 pm</small>
                                                    </div>
                                                </div>
                                                <a href="#" class="text-muted"><i class="mdi mdi-reply"></i>
                                                    Reply</a>
                                            </div>
                                            <div class="mt-3">
                                                <p class="text-muted fst-italic p-3 bg-light rounded">" There are many
                                                    variations of passages of Lorem Ipsum available, but the majority have
                                                    suffered alteration in some form, by injected humour "</p>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="card shadow rounded border-0 mt-4">
                        <div class="card-body">
                            <h5 class="card-title mb-0">Leave A Comment :</h5>

                            <form class="mt-3">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label">Your Comment</label>
                                            <div class="form-icon position-relative">
                                                <i data-feather="message-circle" class="fea icon-sm icons"></i>
                                                <textarea id="message" placeholder="Your Comment" rows="5" name="message" class="form-control ps-5"
                                                    required=""></textarea>
                                            </div>
                                        </div>
                                    </div><!--end col-->

                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label">Name <span class="text-danger">*</span></label>
                                            <div class="form-icon position-relative">
                                                <i data-feather="user" class="fea icon-sm icons"></i>
                                                <input id="name2" name="name" type="text" placeholder="Name"
                                                    class="form-control ps-5" required="">
                                            </div>
                                        </div>
                                    </div><!--end col-->

                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label">Your Email <span
                                                    class="text-danger">*</span></label>
                                            <div class="form-icon position-relative">
                                                <i data-feather="mail" class="fea icon-sm icons"></i>
                                                <input id="email2" type="email" placeholder="Email" name="email"
                                                    class="form-control ps-5" required="">
                                            </div>
                                        </div>
                                    </div><!--end col-->

                                    <div class="col-md-12">
                                        <div class="send d-grid">
                                            <button type="submit" class="btn btn-primary">Send Message</button>
                                        </div>
                                    </div><!--end col-->
                                </div><!--end row-->
                            </form><!--end form-->
                        </div>
                    </div>

                    <div class="card shadow rounded border-0 mt-4">
                        <div class="card-body">
                            <h5 class="card-title mb-0">Related Posts :</h5>

                            <div class="row">
                                <div class="col-lg-6 mt-4 pt-2">
                                    <div class="card blog blog-primary rounded border-0 shadow">
                                        <div class="position-relative">
                                            <img src="{{ asset('assets') }}/images/blog/01.jpg"
                                                class="card-img-top rounded-top" alt="...">
                                            <div class="overlay rounded-top"></div>
                                        </div>
                                        <div class="card-body content">
                                            <h5><a href="javascript:void(0)" class="card-title title text-dark">Design
                                                    your apps in your own way</a></h5>
                                            <div class="post-meta d-flex justify-content-between mt-3">
                                                <ul class="list-unstyled mb-0">
                                                    <li class="list-inline-item me-2 mb-0"><a href="javascript:void(0)"
                                                            class="text-muted like"><i
                                                                class="uil uil-heart me-1"></i>33</a></li>
                                                    <li class="list-inline-item"><a href="javascript:void(0)"
                                                            class="text-muted comments"><i
                                                                class="uil uil-comment me-1"></i>08</a></li>
                                                </ul>
                                                <a href="blog-standard-post.html" class="text-muted readmore">Read More <i
                                                        class="uil uil-angle-right-b align-middle"></i></a>
                                            </div>
                                        </div>
                                        <div class="author">
                                            <small class="user d-block"><i class="uil uil-user"></i> Calvin Carlo</small>
                                            <small class="date"><i class="uil uil-calendar-alt"></i> 25th June
                                                2021</small>
                                        </div>
                                    </div>
                                </div><!--end col-->

                                <div class="col-lg-6 mt-4 pt-2">
                                    <div class="card blog blog-primary rounded border-0 shadow">
                                        <div class="position-relative">
                                            <img src="{{ asset('assets') }}/images/blog/02.jpg"
                                                class="card-img-top rounded-top" alt="...">
                                            <div class="overlay rounded-top"></div>
                                        </div>
                                        <div class="card-body content">
                                            <h5><a href="javascript:void(0)" class="card-title title text-dark">How apps
                                                    is changing the IT world</a></h5>
                                            <div class="post-meta d-flex justify-content-between mt-3">
                                                <ul class="list-unstyled mb-0">
                                                    <li class="list-inline-item me-2 mb-0"><a href="javascript:void(0)"
                                                            class="text-muted like"><i
                                                                class="uil uil-heart me-1"></i>33</a></li>
                                                    <li class="list-inline-item"><a href="javascript:void(0)"
                                                            class="text-muted comments"><i
                                                                class="uil uil-comment me-1"></i>08</a></li>
                                                </ul>
                                                <a href="blog-standard-post.html" class="text-muted readmore">Read More <i
                                                        class="uil uil-angle-right-b align-middle"></i></a>
                                            </div>
                                        </div>
                                        <div class="author">
                                            <small class="user d-block"><i class="uil uil-user"></i> Calvin Carlo</small>
                                            <small class="date"><i class="uil uil-calendar-alt"></i> 25th June
                                                2021</small>
                                        </div>
                                    </div>
                                </div><!--end col-->
                            </div><!--end row-->
                        </div>
                    </div>

                    <div class="d-flex align-items-center justify-content-between mt-5">
                        <a href="blog-standard-post.html" class="bg-soft-primary px-2 rounded"><i
                                class="uil uil-arrow-left h5 mb-0 align-middle"></i> Prev </a>

                        <a href="index-blog.html" class="btn btn-pills btn-icon btn-soft-primary"><i data-feather="home"
                                class="icons"></i></a>

                        <a href="blog-standard-post.html" class="bg-soft-primary px-2 rounded"> Next <i
                                class="uil uil-arrow-right h5 mb-0 align-middle"></i></a>
                    </div>
                </div><!--end col-->

                <!-- START SIDEBAR -->
                <div class="col-lg-4 col-md-5 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <div class="card border-0 sidebar sticky-bar ms-lg-4">
                        <div class="card-body p-0">
                            <!-- Author -->
                            <div class="text-center">
                                <span class="bg-light d-block py-2 rounded shadow text-center h6 mb-0">
                                    Author
                                </span>

                                <div class="mt-4">
                                    <img src="{{ asset('assets') }}/images/saas/2.png"
                                        class="img-fluid avatar avatar-medium rounded-pill shadow-md d-block mx-auto"
                                        alt="">

                                    <a href="blog-about.html" class="text-primary h5 mt-4 mb-0 d-block">Reishan Tridya Rafly</a>
                                    <small class="text-muted d-block">Administrator</small>
                                </div>
                            </div>
                            <!-- Author -->

                            <!-- RECENT POST -->
                            <div class="widget mt-4">
                                <span class="bg-light d-block py-2 rounded shadow text-center h6 mb-0">
                                    Recent Post
                                </span>

                                <div class="mt-4">
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('assets') }}/images/blog/01.jpg"
                                            class="avatar avatar-small rounded" style="width: auto;" alt="">
                                        <div class="flex-1 ms-3">
                                            <a href="javascript:void(0)" class="d-block title text-dark">Consultant
                                                Business</a>
                                            <span class="text-muted">15th April 2021</span>
                                        </div>
                                    </div>

                                    <div class="d-flex align-items-center mt-3">
                                        <img src="{{ asset('assets') }}/images/blog/02.jpg"
                                            class="avatar avatar-small rounded" style="width: auto;" alt="">
                                        <div class="flex-1 ms-3">
                                            <a href="javascript:void(0)" class="d-block title text-dark">Grow Your
                                                Business</a>
                                            <span class="text-muted">15th April 2021</span>
                                        </div>
                                    </div>

                                    <div class="d-flex align-items-center mt-3">
                                        <img src="{{ asset('assets') }}/images/blog/03.jpg"
                                            class="avatar avatar-small rounded" style="width: auto;" alt="">
                                        <div class="flex-1 ms-3">
                                            <a href="javascript:void(0)" class="d-block title text-dark">Look On The
                                                Glorious Balance</a>
                                            <span class="text-muted">15th April 2021</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- RECENT POST -->

                            <!-- TAG CLOUDS -->
                            <div class="widget mt-4">
                                <span class="bg-light d-block py-2 rounded shadow text-center h6 mb-0">
                                    Tagclouds
                                </span>

                                <div class="tagcloud text-center mt-4">
                                    <a href="jvascript:void(0)" class="rounded">Business</a>
                                    <a href="jvascript:void(0)" class="rounded">Finance</a>
                                    <a href="jvascript:void(0)" class="rounded">Marketing</a>
                                    <a href="jvascript:void(0)" class="rounded">Fashion</a>
                                    <a href="jvascript:void(0)" class="rounded">Bride</a>
                                    <a href="jvascript:void(0)" class="rounded">Lifestyle</a>
                                    <a href="jvascript:void(0)" class="rounded">Travel</a>
                                    <a href="jvascript:void(0)" class="rounded">Beauty</a>
                                    <a href="jvascript:void(0)" class="rounded">Video</a>
                                    <a href="jvascript:void(0)" class="rounded">Audio</a>
                                </div>
                            </div>
                            <!-- TAG CLOUDS -->

                            <!-- SOCIAL -->
                            <div class="widget mt-4">
                                <span class="bg-light d-block py-2 rounded shadow text-center h6 mb-0">
                                    Social Media
                                </span>

                                <ul class="list-unstyled social-icon social text-center mb-0 mt-4">
                                    <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i
                                                data-feather="facebook" class="fea icon-sm fea-social"></i></a></li>
                                    <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i
                                                data-feather="instagram" class="fea icon-sm fea-social"></i></a></li>
                                    <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i
                                                data-feather="twitter" class="fea icon-sm fea-social"></i></a></li>
                                    <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i
                                                data-feather="linkedin" class="fea icon-sm fea-social"></i></a></li>
                                    <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i
                                                data-feather="github" class="fea icon-sm fea-social"></i></a></li>
                                    <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i
                                                data-feather="youtube" class="fea icon-sm fea-social"></i></a></li>
                                    <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i
                                                data-feather="gitlab" class="fea icon-sm fea-social"></i></a></li>
                                </ul><!--end icon-->
                            </div>
                            <!-- SOCIAL -->
                        </div>
                    </div>
                </div><!--end col-->
                <!-- END SIDEBAR -->
            </div><!--end row-->
        </div><!--end container-->
    </section><!--end section-->
    <!-- End -->
@endsection
