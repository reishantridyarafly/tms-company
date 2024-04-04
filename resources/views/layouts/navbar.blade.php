<!-- Navbar Start -->
<header id="topnav" class="defaultscroll sticky">
    <div class="container">
        <!-- Logo container-->
        <a class="logo" href="index.html">
            <img src="{{ asset('assets') }}/images/logo-dark.png" height="24" class="logo-light-mode"
                alt="">
            <img src="{{ asset('assets') }}/images/logo-light.png" height="24" class="logo-dark-mode"
                alt="">
        </a>
        <!-- Logo End -->

        <!-- End Logo container-->
        <div class="menu-extras">
            <div class="menu-item">
                <!-- Mobile menu toggle-->
                <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
                    <div class="lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a>
                <!-- End mobile menu toggle-->
            </div>
        </div>

        <div id="navigation">
            <!-- Navigation Menu-->
            <ul class="navigation-menu">
                <li><a href="{{ route('beranda.index') }}" class="sub-menu-item">Beranda</a></li>

                <li><a href="{{ route('tentang.index') }}" class="sub-menu-item">Tentang</a></li>

                <li><a href="{{ route('artikel.index') }}" class="sub-menu-item">Artikel</a></li>

                <li><a href="javascript:void(0)" class="sub-menu-item">Kontak</a></li>
            </ul><!--end navigation menu-->
        </div><!--end navigation-->
    </div><!--end container-->
</header><!--end header-->
<!-- Navbar End -->