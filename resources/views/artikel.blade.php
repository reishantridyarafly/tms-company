@extends('layouts.main')
@section('title', 'Artikel')
@section('content')
    <!-- Hero Start -->
    <section class="bg-half-170 bg-light d-table w-100">
        <div class="container">
            <div class="row mt-5 justify-content-center">
                <div class="col-lg-12 text-center">
                    <div class="pages-heading">
                        <h4 class="title mb-0"> Blog </h4>
                    </div>
                </div> <!--end col-->
            </div><!--end row-->

            <div class="position-breadcrumb">
                <nav aria-label="breadcrumb" class="d-inline-block">
                    <ul class="breadcrumb rounded shadow mb-0 px-4 py-2">
                        <li class="breadcrumb-item"><a href="index.html">Landrick</a></li>
                        <li class="breadcrumb-item"><a href="#">Page</a></li>
                        <li class="breadcrumb-item"><a href="#">Blog</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Blog Grid</li>
                    </ul>
                </nav>
            </div>
        </div> <!--end container-->
    </section><!--end section-->
    <!-- Hero End -->

    <!-- Shape Start -->
    <div class="position-relative">
        <div class="shape overflow-hidden text-color-white">
            <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
            </svg>
        </div>
    </div>
    <!--Shape End-->

    <!-- Blog STart -->
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4 pb-2">
                    <div class="card blog blog-primary rounded border-0 shadow overflow-hidden">
                        <div class="position-relative">
                            <img src="assets/images/blog/01.jpg" class="card-img-top" alt="...">
                            <div class="overlay rounded-top"></div>
                        </div>
                        <div class="card-body content">
                            <h5><a href="javascript:void(0)" class="card-title title text-dark">Design your apps in your own
                                    way</a></h5>
                            <div class="post-meta d-flex justify-content-between mt-3">
                                <ul class="list-unstyled mb-0">
                                    <li class="list-inline-item me-2 mb-0"><a href="javascript:void(0)"
                                            class="text-muted like"><i class="uil uil-heart me-1"></i>33</a></li>
                                    <li class="list-inline-item"><a href="javascript:void(0)" class="text-muted comments"><i
                                                class="uil uil-comment me-1"></i>08</a></li>
                                </ul>
                                <a href="blog-detail.html" class="text-muted readmore">Read More <i
                                        class="uil uil-angle-right-b align-middle"></i></a>
                            </div>
                        </div>
                        <div class="author">
                            <small class="user d-block"><i class="uil uil-user"></i> Calvin Carlo</small>
                            <small class="date"><i class="uil uil-calendar-alt"></i> 25th June 2021</small>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-4 col-md-6 mb-4 pb-2">
                    <div class="card blog blog-primary rounded border-0 shadow overflow-hidden">
                        <div class="position-relative">
                            <img src="assets/images/blog/02.jpg" class="card-img-top" alt="...">
                            <div class="overlay rounded-top"></div>
                        </div>
                        <div class="card-body content">
                            <h5><a href="javascript:void(0)" class="card-title title text-dark">How apps is changing the IT
                                    world</a></h5>
                            <div class="post-meta d-flex justify-content-between mt-3">
                                <ul class="list-unstyled mb-0">
                                    <li class="list-inline-item me-2 mb-0"><a href="javascript:void(0)"
                                            class="text-muted like"><i class="uil uil-heart me-1"></i>33</a></li>
                                    <li class="list-inline-item"><a href="javascript:void(0)" class="text-muted comments"><i
                                                class="uil uil-comment me-1"></i>08</a></li>
                                </ul>
                                <a href="blog-detail.html" class="text-muted readmore">Read More <i
                                        class="uil uil-angle-right-b align-middle"></i></a>
                            </div>
                        </div>
                        <div class="author">
                            <small class="user d-block"><i class="uil uil-user"></i> Calvin Carlo</small>
                            <small class="date"><i class="uil uil-calendar-alt"></i> 25th June 2021</small>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-4 col-md-6 mb-4 pb-2">
                    <div class="card blog blog-primary rounded border-0 shadow overflow-hidden">
                        <div class="position-relative">
                            <img src="assets/images/blog/03.jpg" class="card-img-top" alt="...">
                            <div class="overlay rounded-top"></div>
                        </div>
                        <div class="card-body content">
                            <h5><a href="javascript:void(0)" class="card-title title text-dark">Smartest Applications for
                                    Business</a></h5>
                            <div class="post-meta d-flex justify-content-between mt-3">
                                <ul class="list-unstyled mb-0">
                                    <li class="list-inline-item me-2 mb-0"><a href="javascript:void(0)"
                                            class="text-muted like"><i class="uil uil-heart me-1"></i>33</a></li>
                                    <li class="list-inline-item"><a href="javascript:void(0)"
                                            class="text-muted comments"><i class="uil uil-comment me-1"></i>08</a></li>
                                </ul>
                                <a href="blog-detail.html" class="text-muted readmore">Read More <i
                                        class="uil uil-angle-right-b align-middle"></i></a>
                            </div>
                        </div>
                        <div class="author">
                            <small class="user d-block"><i class="uil uil-user"></i> Calvin Carlo</small>
                            <small class="date"><i class="uil uil-calendar-alt"></i> 25th June 2021</small>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-4 col-md-6 mb-4 pb-2">
                    <div class="card blog blog-primary rounded border-0 shadow overflow-hidden">
                        <div class="position-relative">
                            <img src="assets/images/blog/04.jpg" class="card-img-top" alt="...">
                            <div class="overlay rounded-top"></div>
                        </div>
                        <div class="card-body content">
                            <h5><a href="javascript:void(0)" class="card-title title text-dark">How apps is changing the
                                    IT world</a></h5>
                            <div class="post-meta d-flex justify-content-between mt-3">
                                <ul class="list-unstyled mb-0">
                                    <li class="list-inline-item me-2 mb-0"><a href="javascript:void(0)"
                                            class="text-muted like"><i class="uil uil-heart me-1"></i>33</a></li>
                                    <li class="list-inline-item"><a href="javascript:void(0)"
                                            class="text-muted comments"><i class="uil uil-comment me-1"></i>08</a></li>
                                </ul>
                                <a href="blog-detail.html" class="text-muted readmore">Read More <i
                                        class="uil uil-angle-right-b align-middle"></i></a>
                            </div>
                        </div>
                        <div class="author">
                            <small class="user d-block"><i class="uil uil-user"></i> Calvin Carlo</small>
                            <small class="date"><i class="uil uil-calendar-alt"></i> 25th June 2021</small>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-4 col-md-6 mb-4 pb-2">
                    <div class="card blog blog-primary rounded border-0 shadow overflow-hidden">
                        <div class="position-relative">
                            <img src="assets/images/blog/05.jpg" class="card-img-top" alt="...">
                            <div class="overlay rounded-top"></div>
                        </div>
                        <div class="card-body content">
                            <h5><a href="javascript:void(0)" class="card-title title text-dark">Design your apps in your
                                    own way</a></h5>
                            <div class="post-meta d-flex justify-content-between mt-3">
                                <ul class="list-unstyled mb-0">
                                    <li class="list-inline-item me-2 mb-0"><a href="javascript:void(0)"
                                            class="text-muted like"><i class="uil uil-heart me-1"></i>33</a></li>
                                    <li class="list-inline-item"><a href="javascript:void(0)"
                                            class="text-muted comments"><i class="uil uil-comment me-1"></i>08</a></li>
                                </ul>
                                <a href="blog-detail.html" class="text-muted readmore">Read More <i
                                        class="uil uil-angle-right-b align-middle"></i></a>
                            </div>
                        </div>
                        <div class="author">
                            <small class="user d-block"><i class="uil uil-user"></i> Calvin Carlo</small>
                            <small class="date"><i class="uil uil-calendar-alt"></i> 25th June 2021</small>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-4 col-md-6 mb-4 pb-2">
                    <div class="card blog blog-primary rounded border-0 shadow overflow-hidden">
                        <div class="position-relative">
                            <img src="assets/images/blog/06.jpg" class="card-img-top" alt="...">
                            <div class="overlay rounded-top"></div>
                        </div>
                        <div class="card-body content">
                            <h5><a href="javascript:void(0)" class="card-title title text-dark">Smartest Applications for
                                    Business</a></h5>
                            <div class="post-meta d-flex justify-content-between mt-3">
                                <ul class="list-unstyled mb-0">
                                    <li class="list-inline-item me-2 mb-0"><a href="javascript:void(0)"
                                            class="text-muted like"><i class="uil uil-heart me-1"></i>33</a></li>
                                    <li class="list-inline-item"><a href="javascript:void(0)"
                                            class="text-muted comments"><i class="uil uil-comment me-1"></i>08</a></li>
                                </ul>
                                <a href="blog-detail.html" class="text-muted readmore">Read More <i
                                        class="uil uil-angle-right-b align-middle"></i></a>
                            </div>
                        </div>
                        <div class="author">
                            <small class="user d-block"><i class="uil uil-user"></i> Calvin Carlo</small>
                            <small class="date"><i class="uil uil-calendar-alt"></i> 25th June 2021</small>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-4 col-md-6 mb-4 pb-2">
                    <div class="card blog blog-primary rounded border-0 shadow overflow-hidden">
                        <div class="position-relative">
                            <img src="assets/images/blog/07.jpg" class="card-img-top" alt="...">
                            <div class="overlay rounded-top"></div>
                        </div>
                        <div class="card-body content">
                            <h5><a href="javascript:void(0)" class="card-title title text-dark">Design your apps in your
                                    own way</a></h5>
                            <div class="post-meta d-flex justify-content-between mt-3">
                                <ul class="list-unstyled mb-0">
                                    <li class="list-inline-item me-2 mb-0"><a href="javascript:void(0)"
                                            class="text-muted like"><i class="uil uil-heart me-1"></i>33</a></li>
                                    <li class="list-inline-item"><a href="javascript:void(0)"
                                            class="text-muted comments"><i class="uil uil-comment me-1"></i>08</a></li>
                                </ul>
                                <a href="blog-detail.html" class="text-muted readmore">Read More <i
                                        class="uil uil-angle-right-b align-middle"></i></a>
                            </div>
                        </div>
                        <div class="author">
                            <small class="user d-block"><i class="uil uil-user"></i> Calvin Carlo</small>
                            <small class="date"><i class="uil uil-calendar-alt"></i> 25th June 2021</small>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-4 col-md-6 mb-4 pb-2">
                    <div class="card blog blog-primary rounded border-0 shadow overflow-hidden">
                        <div class="position-relative">
                            <img src="assets/images/blog/08.jpg" class="card-img-top" alt="...">
                            <div class="overlay rounded-top"></div>
                        </div>
                        <div class="card-body content">
                            <h5><a href="javascript:void(0)" class="card-title title text-dark">Smartest Applications for
                                    Business</a></h5>
                            <div class="post-meta d-flex justify-content-between mt-3">
                                <ul class="list-unstyled mb-0">
                                    <li class="list-inline-item me-2 mb-0"><a href="javascript:void(0)"
                                            class="text-muted like"><i class="uil uil-heart me-1"></i>33</a></li>
                                    <li class="list-inline-item"><a href="javascript:void(0)"
                                            class="text-muted comments"><i class="uil uil-comment me-1"></i>08</a></li>
                                </ul>
                                <a href="blog-detail.html" class="text-muted readmore">Read More <i
                                        class="uil uil-angle-right-b align-middle"></i></a>
                            </div>
                        </div>
                        <div class="author">
                            <small class="user d-block"><i class="uil uil-user"></i> Calvin Carlo</small>
                            <small class="date"><i class="uil uil-calendar-alt"></i> 25th June 2021</small>
                        </div>
                    </div>
                </div><!--end col-->

                <!-- PAGINATION START -->
                <div class="col-12">
                    <ul class="pagination justify-content-center mb-0">
                        <li class="page-item"><a class="page-link" href="javascript:void(0)"
                                aria-label="Previous">Prev</a></li>
                        <li class="page-item active"><a class="page-link" href="javascript:void(0)">1</a></li>
                        <li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
                        <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
                        <li class="page-item"><a class="page-link" href="javascript:void(0)" aria-label="Next">Next</a>
                        </li>
                    </ul>
                </div><!--end col-->
                <!-- PAGINATION END -->
            </div><!--end row-->
        </div><!--end container-->
    </section><!--end section-->
    <!-- Blog End -->
@endsection
