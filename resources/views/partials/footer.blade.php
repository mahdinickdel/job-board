  <!-- Shape Start -->
  <div class="position-relative">
    <div class="shape overflow-hidden text-light">
        <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
        </svg>
    </div>
</div>
<!--Shape End-->

<!-- Footer Start -->
<footer class="footer footer-light">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="footer-py-60">
                    <div class="row">
                        <div class="col-lg-4 col-12 mb-0 mb-md-4 pb-0 pb-md-2">
                            <a href="#" class="logo-footer">
                                <img src="{{ asset('assets/images/logo-dark.png') }}" height="24" alt="">
                            </a>
                            <p class="mt-4">Start working with Landrick that can provide everything you need to
                                generate awareness, drive traffic, connect.</p>
                            <ul class="list-unstyled social-icon social mb-0 mt-4">
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
                                        <div class="foot-subscribe foot-white mb-3">
                                            <label class="form-label">Write your email <span
                                                    class="text-danger">*</span></label>
                                            <div class="form-icon position-relative">
                                                <i data-feather="mail" class="fea icon-sm icons"></i>
                                                <input type="email" name="email" id="emailsubscribe"
                                                    class="form-control border ps-5 rounded"
                                                    placeholder="Your email : " required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="d-grid">
                                            <input type="submit" id="submitsubscribe" name="send"
                                                class="btn btn-primary" value="Subscribe">
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

    @include('partials.copywrite')
</footer>
<!--end footer-->
<!-- Footer End -->

<!-- Back to top -->
<a href="#" onclick="topFunction()" id="back-to-top" class="back-to-top fs-5"><i data-feather="arrow-up"
    class="fea icon-sm icons align-middle"></i></a>
<!-- Back to top -->