<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="utf-8" />
    <title>PAGE TITLE</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />

    <!-- favicon -->
    <link rel="shortcut icon" href="images/favicon.ico">
    <!-- Bootstrap -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Icons -->
    <link href="{{ asset('assets/css/materialdesignicons.min.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v3.0.6/css/line.css">
    <!-- Slider -->
    <link rel="stylesheet" href="css/tiny-slider.css" />
    <!-- Main Css -->
    <link href="{{ asset('assets/css/style-rtl.min.css') }}" rel="stylesheet" type="text/css" id="theme-opt" />
    <link href="{{ asset('assets/css/colors/default.css') }}" rel="stylesheet" id="color-opt">

</head>

<body>

    <!-- Navbar STart -->
    <header id="topnav" class="defaultscroll sticky">
        <div class="container">
            <!-- Logo container-->
            <a class="logo" href="#">
                <span class="logo-light-mode">
                    <img src="images/logo-dark.png" class="l-dark" height="24" alt="">
                    <img src="images/logo-light.png" class="l-light" height="24" alt="">
                </span>
                <img src="images/logo-light.png" height="24" class="logo-dark-mode" alt="">
            </a>

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
                    <a href="#">
                        <div class="login-btn-primary"><span class="btn btn-icon btn-pills btn-primary"><i
                                    data-feather="user" class="fea icon-sm"></i></span></div>
                        <div class="login-btn-light"><span class="btn btn-icon btn-pills btn-light"><i
                                    data-feather="user" class="fea icon-sm"></i></span></div>
                    </a>
                </li>
            </ul>
            <!--Login button End-->

            <div id="navigation">
                <!-- Navigation Menu-->
                <ul class="navigation-menu nav-light">
                    <li><a href="#" class="sub-menu-item">Home</a></li>
                    <li class="has-submenu parent-parent-menu-item">
                        <a href="javascript:void(0)">Landing</a><span class="menu-arrow"></span>
                        <ul class="submenu megamenu">
                            <li>
                                <ul>
                                    <li><a href="#" class="sub-menu-item">Saas</a></li>
                                    <li><a href="#" class="sub-menu-item">Classic Saas</a></li>
                                    <li><a href="#" class="sub-menu-item">Agency</a></li>
                                    <li><a href="#" class="sub-menu-item">Application</a></li>
                                    <li><a href="#" class="sub-menu-item">Classic Application</a></li>
                                    <li><a href="#" class="sub-menu-item">Studio</a></li>
                                    <li><a href="#" class="sub-menu-item">Marketing</a></li>
                                    <li><a href="#" class="sub-menu-item">Enterprise</a></li>
                                    <li><a href="#" class="sub-menu-item">Service</a></li>
                                    <li><a href="#" class="sub-menu-item">Payments</a></li>
                                </ul>
                            </li>

                            <li>
                                <ul>
                                    <li><a href="#" class="sub-menu-item">Developer</a></li>
                                    <li><a href="#" class="sub-menu-item">SEO Agency</a></li>
                                    <li><a href="#" class="sub-menu-item">Hospital</a></li>
                                    <li><a href="#" class="sub-menu-item">Coworking</a></li>
                                    <li><a href="#" class="sub-menu-item">IT Solution </a></li>
                                    <li><a href="#" class="sub-menu-item">IT Solution Two </a></li>
                                    <li><a href="#" class="sub-menu-item">Business</a></li>
                                    <li><a href="#" class="sub-menu-item">Modern Business</a></li>
                                    <li><a href="#" class="sub-menu-item">Finance </a></li>
                                    <li><a href="#" class="sub-menu-item">Delivery & Logistics <span
                                                class="mdi mdi-star text-warning"></span></a></li>
                                </ul>
                            </li>

                            <li>
                                <ul>
                                    <li><a href="#" class="sub-menu-item">Hotel</a></li>
                                    <li><a href="#" class="sub-menu-item">Construction</a></li>
                                    <li><a href="#" class="sub-menu-item">Real Estate</a></li>
                                    <li><a href="#" class="sub-menu-item">Video Conference </a></li>
                                    <li><a href="#" class="sub-menu-item">Blockchain </a></li>
                                    <li><a href="#" class="sub-menu-item">Cryptocurrency Two </a></li>
                                    <li><a href="#" class="sub-menu-item">Integration</a></li>
                                    <li><a href="#" class="sub-menu-item">Task Management </a></li>
                                    <li><a href="#" class="sub-menu-item">Email Inbox </a></li>
                                    <li><a href="#" class="sub-menu-item">Travel </a></li>
                                </ul>
                            </li>

                            <li>
                                <ul>
                                    <li><a href="#" class="sub-menu-item">Insurance</a></li>
                                    <li><a href="#" class="sub-menu-item">Online Learning</a></li>
                                    <li><a href="#" class="sub-menu-item">Course</a></li>
                                    <li><a href="#" class="sub-menu-item">Product</a></li>
                                    <li><a href="#" class="sub-menu-item">Social Media</a></li>
                                    <li><a href="#" class="sub-menu-item">Digital Agency</a></li>
                                    <li><a href="#" class="sub-menu-item">Car Ride</a></li>
                                    <li><a href="#" class="sub-menu-item">Customer</a></li>
                                    <li><a href="#" class="sub-menu-item">Software</a></li>
                                </ul>
                            </li>

                            <li>
                                <ul>
                                    <li><a href="#" class="sub-menu-item">Landing One </a></li>
                                    <li><a href="#" class="sub-menu-item">Landing Two </a></li>
                                    <li><a href="#" class="sub-menu-item">Landing Three </a></li>
                                    <li><a href="#" class="sub-menu-item">Landing Four</a></li>
                                    <li><a href="#" class="sub-menu-item">Personal</a></li>
                                    <li><a href="#" class="sub-menu-item">Freelance </a></li>
                                    <li><a href="#" class="sub-menu-item">Event</a></li>
                                    <li><a href="#" class="sub-menu-item">E-Book</a></li>
                                    <li><a href="#" class="sub-menu-item">Saas <span
                                                class="badge bg-warning ms-2">Onepage</span></a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li class="has-submenu parent-parent-menu-item">
                        <a href="javascript:void(0)">Pages</a><span class="menu-arrow"></span>
                        <ul class="submenu">
                            <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Company </a><span
                                    class="submenu-arrow"></span>
                                <ul class="submenu">
                                    <li><a href="#" class="sub-menu-item"> About Us</a></li>
                                    <li><a href="#" class="sub-menu-item"> About Us Two </a></li>
                                    <li><a href="#" class="sub-menu-item">Services</a></li>
                                    <li><a href="#" class="sub-menu-item">History </a></li>
                                    <li><a href="#" class="sub-menu-item"> Team</a></li>
                                    <li><a href="#" class="sub-menu-item">Pricing</a></li>
                                </ul>
                            </li>
                            <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Account </a><span
                                    class="submenu-arrow"></span>
                                <ul class="submenu">
                                    <li><a href="#" class="sub-menu-item">Profile</a></li>
                                    <li><a href="#" class="sub-menu-item">Members </a></li>
                                    <li><a href="#" class="sub-menu-item">Works </a></li>
                                    <li><a href="#" class="sub-menu-item">Messages </a></li>
                                    <li><a href="#" class="sub-menu-item">Chat </a></li>
                                    <li><a href="#" class="sub-menu-item">Payments </a></li>
                                    <li><a href="#" class="sub-menu-item">Setting</a></li>
                                    <li><a href="#" class="sub-menu-item">Invoice</a></li>
                                </ul>
                            </li>
                            <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Email
                                    Template</a><span class="submenu-arrow"></span>
                                <ul class="submenu">
                                    <li><a href="#" class="sub-menu-item">Confirmation</a></li>
                                    <li><a href="#" class="sub-menu-item">Reset Password</a></li>
                                    <li><a href="#" class="sub-menu-item">Alert</a></li>
                                    <li><a href="#" class="sub-menu-item">Invoice</a></li>
                                </ul>
                            </li>
                            <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Blog </a><span
                                    class="submenu-arrow"></span>
                                <ul class="submenu">
                                    <li><a href="#" class="sub-menu-item">Blog Grid</a></li>
                                    <li><a href="#" class="sub-menu-item">Blog with Sidebar</a></li>
                                    <li><a href="#" class="sub-menu-item">Blog Listing</a></li>
                                    <li><a href="#" class="sub-menu-item">Blog List & Sidebar</a></li>
                                    <li><a href="#" class="sub-menu-item">Blog Detail</a></li>
                                    <li><a href="#" class="sub-menu-item">Blog Detail 2 </a></li>
                                </ul>
                            </li>
                            <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Case Study </a><span
                                    class="submenu-arrow"></span>
                                <ul class="submenu">
                                    <li><a href="#" class="sub-menu-item">All Cases </a></li>
                                    <li><a href="#" class="sub-menu-item">Case Detail </a></li>
                                </ul>
                            </li>
                            <li><a href="#" class="sub-menu-item">Course Detail <span
                                        class="mdi mdi-star text-warning"></span> </a></li>
                            <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Auth Pages </a><span
                                    class="submenu-arrow"></span>
                                <ul class="submenu">
                                    <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Login
                                        </a><span class="submenu-arrow"></span>
                                        <ul class="submenu">
                                            <li><a href="#" class="sub-menu-item">Login</a></li>
                                            <li><a href="#" class="sub-menu-item">Login Cover</a></li>
                                            <li><a href="#" class="sub-menu-item">Login Simple</a></li>
                                            <li><a href="#" class="sub-menu-item">BS5 Login </a></li>
                                        </ul>
                                    </li>

                                    <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Signup
                                        </a><span class="submenu-arrow"></span>
                                        <ul class="submenu">
                                            <li><a href="#" class="sub-menu-item">Signup</a></li>
                                            <li><a href="#" class="sub-menu-item">Signup Cover</a></li>
                                            <li><a href="#" class="sub-menu-item">Signup Simple</a></li>
                                            <li><a href="#" class="sub-menu-item">BS5 Singup </a></li>
                                        </ul>
                                    </li>

                                    <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Reset
                                            password </a><span class="submenu-arrow"></span>
                                        <ul class="submenu">
                                            <li><a href="#" class="sub-menu-item">Reset Password</a></li>
                                            <li><a href="#" class="sub-menu-item">Reset Password Cover</a></li>
                                            <li><a href="#" class="sub-menu-item">Reset Password Simple</a></li>
                                            <li><a href="#" class="sub-menu-item">BS5 Reset Password </a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Utility </a><span
                                    class="submenu-arrow"></span>
                                <ul class="submenu">
                                    <li><a href="#" class="sub-menu-item">Terms of Services</a></li>
                                    <li><a href="#" class="sub-menu-item">Privacy Policy</a></li>
                                </ul>
                            </li>
                            <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Special</a><span
                                    class="submenu-arrow"></span>
                                <ul class="submenu">
                                    <li><a href="#" class="sub-menu-item">Coming Soon</a></li>
                                    <li><a href="#" class="sub-menu-item">Coming Soon Two</a></li>
                                    <li><a href="#" class="sub-menu-item">Maintenance</a></li>
                                    <li><a href="#" class="sub-menu-item">Error</a></li>
                                    <li><a href="#" class="sub-menu-item">Thank you</a></li>
                                </ul>
                            </li>
                            <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Contact </a><span
                                    class="submenu-arrow"></span>
                                <ul class="submenu">
                                    <li><a href="#" class="sub-menu-item">Contact Detail</a></li>
                                    <li><a href="#" class="sub-menu-item">Contact One</a></li>
                                    <li><a href="#" class="sub-menu-item">Contact Two</a></li>
                                    <li><a href="#" class="sub-menu-item">Contact Three</a></li>
                                </ul>
                            </li>
                            <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Multi Level
                                    Menu</a><span class="submenu-arrow"></span>
                                <ul class="submenu">
                                    <li><a href="javascript:void(0)" class="sub-menu-item">Level 1.0</a></li>
                                    <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Level 2.0
                                        </a><span class="submenu-arrow"></span>
                                        <ul class="submenu">
                                            <li><a href="javascript:void(0)" class="sub-menu-item">Level 2.1</a></li>
                                            <li><a href="javascript:void(0)" class="sub-menu-item">Level 2.2</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="#" class="sub-menu-item">Footer Layouts </a></li>
                        </ul>
                    </li>

                    <li class="has-submenu parent-menu-item">
                        <a href="javascript:void(0)">Docs</a><span class="menu-arrow"></span>
                        <ul class="submenu">
                            <li><a href="#" class="sub-menu-item">Documentation</a></li>
                            <li><a href="#" class="sub-menu-item">Changelog</a></li>
                            <li><a href="#" class="sub-menu-item">Components</a></li>
                            <li><a href="#" class="sub-menu-item">Widget</a></li>
                        </ul>
                    </li>

                    <li><a href="#" class="sub-menu-item">Admin</a></li>
                </ul>
                <!--end navigation menu-->
            </div>
            <!--end navigation-->
        </div>
        <!--end container-->
    </header>
    <!--end header-->
    <!-- Navbar End -->

    <!-- Hero Start -->
    <section class="bg-profile d-table w-100 bg-primary"
        style="background: url('images/account/bg.png') center center;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card public-profile border-0 rounded shadow" style="z-index: 1;">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-lg-2 col-md-3 text-md-start text-center">
                                    <img src="images/avatar.png"
                                        class="avatar avatar-large rounded-circle shadow d-block mx-auto" alt="">
                                </div>
                                <!--end col-->

                                <div class="col-lg-10 col-md-9">
                                    <div class="row align-items-end">
                                        <div class="col-md-7 text-md-start text-center mt-4 mt-sm-0">
                                            <h3 class="title mb-0">Full Name</h3>
                                            <small class="text-muted h6 me-2">Alias or Role</small>
                                            
                                        </div>
                                        <!--end col-->
                                        <div class="col-md-5 text-md-end text-center">
                                            
                                            <!--end icon-->
                                        </div>
                                        <!--end col-->
                                    </div>
                                    <!--end row-->
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--ed container-->
    </section>
    <!--end section-->
    <!-- Hero End -->

    <!-- Profile Start -->
    <section class="section mt-60">
        <div class="container mt-lg-3">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12 d-lg-block d-none">
                    <div class="sidebar sticky-bar p-4 rounded shadow">

                        <div class="widget mt-4">
                            <ul class="list-unstyled sidebar-nav mb-0" id="navmenu-nav">
                                <li class="navbar-item account-menu px-0">
                                    <a href="#" class="navbar-link d-flex rounded shadow align-items-center py-2 px-4">
                                        <span class="h4 mb-0"><i class="uil uil-dashboard"></i></span>
                                        <h6 class="mb-0 ms-2">Profile</h6>
                                    </a>
                                </li>

                               

                                <li class="navbar-item account-menu px-0 mt-2">
                                    <a href="#" class="navbar-link d-flex rounded shadow align-items-center py-2 px-4">
                                        <span class="h4 mb-0"><i class="uil uil-setting"></i></span>
                                        <h6 class="mb-0 ms-2">Settings</h6>
                                    </a>
                                </li>

                                <li class="navbar-item account-menu px-0 mt-2">
                                    <a href="#" class="navbar-link d-flex rounded shadow align-items-center py-2 px-4">
                                        <span class="h4 mb-0"><i class="uil uil-dashboard"></i></span>
                                        <h6 class="mb-0 ms-2">Logout</h6>
                                    </a>
                                </li>
                            </ul>
                        </div>

                       
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-8 col-12">
                    <div class="card border-0 rounded shadow">
                        <div class="card-body">
                            <h5 class="text-md-start text-center">Personal Detail :</h5>

                          
                            <form>
                                <div class="row mt-4">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">First Name</label>
                                            <div class="form-icon position-relative">
                                                <i data-feather="user" class="fea icon-sm icons"></i>
                                                <input name="name" id="first" type="text" class="form-control ps-5"
                                                    placeholder="First Name :">
                                            </div>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Last Name</label>
                                            <div class="form-icon position-relative">
                                                <i data-feather="user-check" class="fea icon-sm icons"></i>
                                                <input name="name" id="last" type="text" class="form-control ps-5"
                                                    placeholder="Last Name :">
                                            </div>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Your Email</label>
                                            <div class="form-icon position-relative">
                                                <i data-feather="mail" class="fea icon-sm icons"></i>
                                                <input name="email" id="email" type="email" class="form-control ps-5"
                                                    placeholder="Your email :">
                                            </div>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Occupation</label>
                                            <div class="form-icon position-relative">
                                                <i data-feather="bookmark" class="fea icon-sm icons"></i>
                                                <input name="name" id="occupation" type="text" class="form-control ps-5"
                                                    placeholder="Occupation :">
                                            </div>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <label class="form-label">Description</label>
                                            <div class="form-icon position-relative">
                                                <i data-feather="message-circle" class="fea icon-sm icons"></i>
                                                <textarea name="comments" id="comments" rows="4"
                                                    class="form-control ps-5" placeholder="Description :"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end row-->
                                <div class="row">
                                    <div class="col-sm-12">
                                        <input type="submit" id="submit" name="send" class="btn btn-primary"
                                            value="Save Changes">
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                            </form>
                            <!--end form-->


                            <div class="row">
                                <div class="col-md-6 mt-4 pt-2">
                                    <h5>Contact Info :</h5>

                                    <form>
                                        <div class="row mt-4">
                                            <div class="col-lg-12">
                                                <div class="mb-3">
                                                    <label class="form-label">Phone No. :</label>
                                                    <div class="form-icon position-relative">
                                                        <i data-feather="phone" class="fea icon-sm icons"></i>
                                                        <input name="number" id="number" type="number"
                                                            class="form-control ps-5" placeholder="Phone :">
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end col-->

                                            <div class="col-lg-12">
                                                <div class="mb-3">
                                                    <label class="form-label">Website :</label>
                                                    <div class="form-icon position-relative">
                                                        <i data-feather="globe" class="fea icon-sm icons"></i>
                                                        <input name="url" id="url" type="url" class="form-control ps-5"
                                                            placeholder="Url :">
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end col-->

                                            <div class="col-lg-12 mt-2 mb-0">
                                                <button class="btn btn-primary">Add</button>
                                            </div>
                                            <!--end col-->
                                        </div>
                                        <!--end row-->
                                    </form>
                                </div>
                                <!--end col-->

                                <div class="col-md-6 mt-4 pt-2">
                                    <h5>Change password :</h5>
                                    <form>
                                        <div class="row mt-4">
                                            <div class="col-lg-12">
                                                <div class="mb-3">
                                                    <label class="form-label">Old password :</label>
                                                    <div class="form-icon position-relative">
                                                        <i data-feather="key" class="fea icon-sm icons"></i>
                                                        <input type="password" class="form-control ps-5"
                                                            placeholder="Old password" required="">
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end col-->

                                            <div class="col-lg-12">
                                                <div class="mb-3">
                                                    <label class="form-label">New password :</label>
                                                    <div class="form-icon position-relative">
                                                        <i data-feather="key" class="fea icon-sm icons"></i>
                                                        <input type="password" class="form-control ps-5"
                                                            placeholder="New password" required="">
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end col-->

                                            <div class="col-lg-12">
                                                <div class="mb-3">
                                                    <label class="form-label">Re-type New password :</label>
                                                    <div class="form-icon position-relative">
                                                        <i data-feather="key" class="fea icon-sm icons"></i>
                                                        <input type="password" class="form-control ps-5"
                                                            placeholder="Re-type New password" required="">
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end col-->

                                            <div class="col-lg-12 mt-2 mb-0">
                                                <button class="btn btn-primary">Save password</button>
                                            </div>
                                            <!--end col-->
                                        </div>
                                        <!--end row-->
                                    </form>
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
    <!--end section-->
    <!-- Profile Setting End -->

    <!-- Footer Start -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="footer-py-60">
                        <div class="row">
                            <div class="col-lg-4 col-12 mb-0 mb-md-4 pb-0 pb-md-2">
                                <a href="#" class="logo-footer">
                                    <img src="images/logo-light.png" height="24" alt="">
                                </a>
                                <p class="mt-4">Start working with Landrick that can provide everything you need to
                                    generate awareness, drive traffic, connect.</p>
                                <ul class="list-unstyled social-icon foot-social-icon mb-0 mt-4">
                                    <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i
                                                data-feather="facebook" class="fea icon-sm fea-social"></i></a></li>
                                    <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i
                                                data-feather="instagram" class="fea icon-sm fea-social"></i></a></li>
                                    <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i
                                                data-feather="twitter" class="fea icon-sm fea-social"></i></a></li>
                                    <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i
                                                data-feather="linkedin" class="fea icon-sm fea-social"></i></a></li>
                                </ul>
                                <!--end icon-->
                            </div>
                            <!--end col-->

                            <div class="col-lg-2 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                                <h5 class="footer-head">Company</h5>
                                <ul class="list-unstyled footer-list mt-4">
                                    <li><a href="javascript:void(0)" class="text-foot"><i
                                                class="uil uil-angle-right-b me-1"></i> About us</a></li>
                                    <li><a href="javascript:void(0)" class="text-foot"><i
                                                class="uil uil-angle-right-b me-1"></i> Services</a></li>
                                    <li><a href="javascript:void(0)" class="text-foot"><i
                                                class="uil uil-angle-right-b me-1"></i> Team</a></li>
                                    <li><a href="javascript:void(0)" class="text-foot"><i
                                                class="uil uil-angle-right-b me-1"></i> Pricing</a></li>
                                    <li><a href="javascript:void(0)" class="text-foot"><i
                                                class="uil uil-angle-right-b me-1"></i> Project</a></li>
                                    <li><a href="javascript:void(0)" class="text-foot"><i
                                                class="uil uil-angle-right-b me-1"></i> Careers</a></li>
                                    <li><a href="javascript:void(0)" class="text-foot"><i
                                                class="uil uil-angle-right-b me-1"></i> Blog</a></li>
                                    <li><a href="javascript:void(0)" class="text-foot"><i
                                                class="uil uil-angle-right-b me-1"></i> Login</a></li>
                                </ul>
                            </div>
                            <!--end col-->

                            <div class="col-lg-3 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                                <h5 class="footer-head">Usefull Links</h5>
                                <ul class="list-unstyled footer-list mt-4">
                                    <li><a href="javascript:void(0)" class="text-foot"><i
                                                class="uil uil-angle-right-b me-1"></i> Terms of Services</a></li>
                                    <li><a href="javascript:void(0)" class="text-foot"><i
                                                class="uil uil-angle-right-b me-1"></i> Privacy Policy</a></li>
                                    <li><a href="javascript:void(0)" class="text-foot"><i
                                                class="uil uil-angle-right-b me-1"></i> Documentation</a></li>
                                    <li><a href="javascript:void(0)" class="text-foot"><i
                                                class="uil uil-angle-right-b me-1"></i> Changelog</a></li>
                                    <li><a href="javascript:void(0)" class="text-foot"><i
                                                class="uil uil-angle-right-b me-1"></i> Components</a></li>
                                </ul>
                            </div>
                            <!--end col-->

                            <div class="col-lg-3 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                                <h5 class="footer-head">Newsletter</h5>
                                <p class="mt-4">Sign up and receive the latest tips via email.</p>
                                <form>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="foot-subscribe mb-3">
                                                <label class="form-label">Write your email <span
                                                        class="text-danger">*</span></label>
                                                <div class="form-icon position-relative">
                                                    <i data-feather="mail" class="fea icon-sm icons"></i>
                                                    <input type="email" name="email" id="emailsubscribe"
                                                        class="form-control ps-5 rounded" placeholder="Your email : "
                                                        required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="d-grid">
                                                <input type="submit" id="submitsubscribe" name="send"
                                                    class="btn btn-soft-primary" value="Subscribe">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->

        <div class="footer-py-30 footer-bar">
            <div class="container text-center">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="text-sm-start">
                            <p class="mb-0">©
                                <script>document.write(new Date().getFullYear())</script> Landrick. Design with <i
                                    class="mdi mdi-heart text-danger"></i> by <a href="https://shreethemes.in/"
                                    class="text-reset">Shreethemes</a>.
                            </p>
                        </div>
                    </div>
                    <!--end col-->

                </div>
                <!--end row-->
            </div>
            <!--end container-->
        </div>
    </footer>
    <!--end footer-->
    <!-- Footer End -->

    <!-- Back to top -->
    <a href="#" onclick="topFunction()" id="back-to-top" class="back-to-top fs-5"><i data-feather="arrow-up"
            class="fea icon-sm icons align-middle"></i></a>
    <!-- Back to top -->

    <!-- javascript -->
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <!-- SLIDER -->
    <script src="js/tiny-slider.js "></script>
    <!-- Icons -->
    <script src="{{ asset('assets/js/feather.min.js') }}"></script>

    <!-- Main Js -->
    <script src="{{ asset('assets/js/plugins.init.js') }}"></script>
    <!--Note: All init js like tiny slider, counter, countdown, maintenance, lightbox, gallery, swiper slider, aos animation etc.-->
    <script src="{{ asset('assets/js/app.js') }}"></script>
    <!--Note: All important javascript like page loader, menu, sticky menu, menu-toggler, one page menu etc. -->
</body>

</html>