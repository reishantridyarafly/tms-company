<!-- Navbar Start -->
<header id="topnav" class="defaultscroll sticky">
    <div class="container">
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

                <li><a href="{{ route('kontak.index') }}" class="sub-menu-item">Kontak</a></li>
            </ul><!--end navigation menu-->
        </div><!--end navigation-->
    </div><!--end container-->
</header><!--end header-->
<!-- Navbar End -->
