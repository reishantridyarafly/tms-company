<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8" />
    <title>@yield('title') - TMS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Premium Bootstrap 5 Landing Page Template" />
    <meta name="keywords" content="Saas, Software, multi-uses, HTML, Clean, Modern" />
    <meta name="author" content="Shreethemes" />
    <meta name="email" content="support@shreethemes.in" />
    <meta name="website" content="https://shreethemes.in" />
    <meta name="Version" content="v4.2.0" />

    <!-- favicon -->
    <link rel="shortcut icon" href="{{ asset('assets') }}/images/favicon.ico" />

    <!-- Css -->
    <link href="{{ asset('assets') }}/libs/tiny-slider/tiny-slider.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/libs/tobii/css/tobii.min.css" rel="stylesheet">
    <!-- Bootstrap Css -->
    <link href="{{ asset('assets') }}/css/bootstrap.min.css" class="theme-opt" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('assets') }}/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets') }}/libs/@iconscout/unicons/css/line.css" type="text/css" rel="stylesheet" />
    <!-- Style Css-->
    <link href="{{ asset('assets') }}/css/style.min.css" class="theme-opt" rel="stylesheet" type="text/css" />

</head>

<body>
    <!-- Loader -->
    <div id="preloader">
        <div id="status">
            <div class="spinner">
                <div class="double-bounce1"></div>
                <div class="double-bounce2"></div>
            </div>
        </div>
    </div>
    <!-- Loader -->


    @include('layouts.navbar')

    @yield('content')


    <!-- Footer Start -->
    <footer class="footer footer-bar">
        <div class="footer-py-30">
            <div class="container text-center">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="text-sm-start">
                            <p class="mb-0">©
                                <script>
                                    document.write(new Date().getFullYear())
                                </script> TMS. Design with <i class="mdi mdi-heart text-danger"></i>
                                by <a href="https://reishantridyarafly.github.io/" target="_blank"
                                    class="text-reset">Reishan Tridya Rafly</a>.
                            </p>
                        </div>
                    </div>

                    <div class="col-sm-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                        <ul class="list-unstyled social-icon foot-social-icon text-sm-end mb-0">
                            <li class="list-inline-item mb-0"><a href="https://facebook.com/reishan.rafly"
                                    class="rounded"><i data-feather="facebook" class="fea icon-sm fea-social"></i></a>
                            </li>
                            <li class="list-inline-item mb-0"><a href="https://instagram.com/reishan.rafly"
                                    class="rounded"><i data-feather="instagram" class="fea icon-sm fea-social"></i></a>
                            </li>
                            <li class="list-inline-item mb-0"><a href="https://www.linkedin.com/in/reishan-tridya-rafly"
                                    class="rounded"><i data-feather="linkedin" class="fea icon-sm fea-social"></i></a>
                            </li>
                            <li class="list-inline-item mb-0"><a href="https://github.com/reishantridyarafly/"
                                    class="rounded"><i data-feather="github" class="fea icon-sm fea-social"></i></a></li>
                        </ul><!--end icon-->
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </div>
    </footer><!--end footer-->
    <!-- Footer End -->

    <!-- Back to top -->
    <a href="#" onclick="topFunction()" id="back-to-top" class="back-to-top fs-5"><i data-feather="arrow-up"
            class="fea icon-sm icons align-middle"></i></a>
    <!-- Back to top -->

    <!-- Javascript -->
    <!-- JAVASCRIPT -->
    <script src="{{ asset('assets') }}/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets') }}/libs/feather-icons/feather.min.js"></script>
    <!-- SLIDER -->
    <script src="{{ asset('assets') }}/libs/tiny-slider/min/tiny-slider.js"></script>
    <!-- Lightbox -->
    <script src="{{ asset('assets') }}/libs/tobii/js/tobii.min.js"></script>
    <!-- Main Js -->
    <script src="{{ asset('assets') }}/js/plugins.init.js"></script>
    <!--Note: All init js like tiny slider, counter, countdown, maintenance, lightbox, gallery, swiper slider, aos animation etc.-->
    <script src="{{ asset('assets') }}/js/app.js"></script>
    <!--Note: All important javascript like page loader, menu, sticky menu, menu-toggler, one page menu etc. -->
</body>

</html>
