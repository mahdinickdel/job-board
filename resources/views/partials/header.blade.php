<!-- Navbar STart -->
<header id="topnav" class="defaultscroll sticky">
    <div class="container">
        <!-- Logo container-->
        <a class="logo" href="#">
            <img src="{{ asset('assets/images/logo-dark.png') }}" height="24" class="logo-light-mode" alt="">
            <img src="{{ asset('assets/images/logo-light.png') }}" height="24" class="logo-dark-mode" alt="">
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

        <!--Login button Start-->
        <ul class="buy-button list-inline mb-0">
            

            <li class="list-inline-item ps-1 mb-0">
                <a href="{{ route('auth.login') }}" >
                    <div class="btn btn-icon btn-pills btn-primary"><i data-feather="user"
                            class="fea icon-sm"></i></div>
                </a>
            </li>
        </ul>
        <!--Login button End-->

        <div id="navigation">
            <!-- Navigation Menu-->
            <ul class="navigation-menu @yield('page.navigation.classes')">
                <li><a href="{{ route('welcome') }}" class="sub-menu-item">صفحه نخست</a></li>

                <li>
                    <a href="{{ route('jobs') }}">فرصت های شغلی</a><span class="menu-arrow"></span>
                </li>

                <li>
                    <a href="{{ route('contact') }}">تماس</a><span class="menu-arrow"></span>
                </li>
            </ul>
            <!--end navigation menu-->
        </div>
        <!--end navigation-->
    </div>
    <!--end container-->
</header>
<!--end header-->
<!-- Navbar End -->