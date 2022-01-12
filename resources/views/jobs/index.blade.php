@extends('layouts.master')
@section('page.title', 'فرصت های شغلی')

@section('page.navigation.classes', 'nav-light')

@section('page.content')

@include('partials.header')

<!-- Hero Start -->
<section class="bg-half-170 bg-primary d-table w-100" style="background-image: url('{{ asset('assets/images/job/bg.png') }}');">
    <div class="container">
        <div class="row mt-5 justify-content-center">
            <div class="col-lg-12 text-center">
                <div class="pages-heading">
                    <h2 class="title text-white title-dark mb-0"> Jobs / Careers </h2>
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </div>
    <!--end container-->
</section>
<!--end section-->
<!-- Hero End -->

<!-- Shape Start -->
<div class="position-relative">
    <div class="shape overflow-hidden text-white">
        <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
        </svg>
    </div>
</div>
<!--Shape End-->

<!-- Job List Start -->
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class=" features-absolute">
                    <form class="rounded p-4 mt-4 bg-white shadow">
                        <div class="row text-start">
                            <div class="col-lg-5 col-md-4">
                                <div class="mb-0">
                                    <input type="text" class="form-control" required placeholder="Keywords">
                                </div>
                            </div>
                            <!--end col-->

                            <div class="col-lg-7 col-md-8">
                                <div class="row align-items-center">
                                    <div class="col-md-4 mt-4 mt-sm-0">
                                        <div class="mb-0">
                                            <select class="form-control form-select">
                                                <option selected="">Location</option>
                                                <option value="AF">Afghanistan</option>
                                                <option value="AX">&Aring;land Islands</option>
                                                <option value="AL">Albania</option>
                                                <option value="DZ">Algeria</option>
                                                <option value="AS">American Samoa</option>
                                                <option value="AD">Andorra</option>
                                                <option value="AO">Angola</option>
                                                <option value="AI">Anguilla</option>
                                                <option value="AQ">Antarctica</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!--end col-->

                                    <div class="col-md-4 mt-4 mt-sm-0">
                                        <div class="mb-0">
                                            <select class="form-control form-select">
                                                <option selected="">Job Types</option>
                                                <option value="4">Accounting</option>
                                                <option value="1">IT & Software</option>
                                                <option value="3">Marketing</option>
                                                <option value="5">Banking</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!--end col-->

                                    <div class="col-md-4 mt-4 mt-sm-0">
                                        <div class="d-grid">
                                            <input type="submit" id="search" name="search"
                                                class="searchbtn btn btn-primary" value="Search">
                                        </div>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                            </div>
                            <!---end col-->
                        </div>
                        <!--end row-->
                    </form>
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </div>
    <!--end container-->

    <div class="container mt-5 mt-sm-0">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-12">
                <div class="sidebar p-4 rounded shadow">
                    <!-- SEARCH -->
                    <div class="widget">
                        <form role="search" method="get">
                            <div class="input-group mb-3 border rounded">
                                <input type="text" id="s" name="s" class="form-control border-0"
                                    placeholder="Search Keywords...">
                                <button type="submit" class="input-group-text bg-transparent border-0"
                                    id="searchsubmit"><i class="uil uil-search"></i></button>
                            </div>
                        </form>
                    </div>
                    <!-- SEARCH -->

                    <!-- Categories -->
                    <div class="widget mb-4 pb-4 border-bottom">
                        <h5 class="widget-title">Categories</h5>
                        <div class="mt-4 mb-0">
                            <select class="form-select form-control" aria-label="Default select example">
                                <option selected>All Jobs</option>
                                <option>Digital & Creative</option>
                                <option>Accountancy</option>
                                <option>Banking</option>
                                <option>IT Contractor</option>
                                <option>Graduate</option>
                                <option>Estate Agency</option>
                            </select>
                        </div>
                    </div>
                    <!-- Categories -->

                    <!-- Posted -->
                    <div class="widget mb-4 pb-4 border-bottom">
                        <h5 class="widget-title">Date Posted</h5>
                        <div class="mt-4">
                            <div class="form-check mb-0">
                                <input class="form-check-input" checked type="radio" name="flexRadioDefault"
                                    id="lasthour">
                                <label class="form-check-label" for="lasthour">Last Hour</label>
                            </div>

                            <div class="form-check mb-0">
                                <input class="form-check-input" checked type="radio" name="flexRadioDefault"
                                    id="oneday">
                                <label class="form-check-label" for="oneday">Last 24 hours</label>
                            </div>

                            <div class="form-check mb-0">
                                <input class="form-check-input" checked type="radio" name="flexRadioDefault"
                                    id="sevenday">
                                <label class="form-check-label" for="sevenday">Last 7 days</label>
                            </div>

                            <div class="form-check mb-0">
                                <input class="form-check-input" checked type="radio" name="flexRadioDefault"
                                    id="fourteenhour">
                                <label class="form-check-label" for="fourteenhour">Last 14 days</label>
                            </div>

                            <div class="form-check mb-0">
                                <input class="form-check-input" checked type="radio" name="flexRadioDefault"
                                    id="onemonth">
                                <label class="form-check-label" for="onemonth">Last 30 days</label>
                            </div>
                        </div>
                    </div>
                    <!-- Posted -->

                    <!-- Job Type -->
                    <div class="widget mb-4 pb-4 border-bottom">
                        <h5 class="widget-title">Job Type</h5>
                        <div class="mt-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="contract">
                                <label class="form-check-label" for="contract">Contract Base</label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="freelancer">
                                <label class="form-check-label" for="freelancer">Freelancer</label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="fulltime">
                                <label class="form-check-label" for="fulltime">Full Time</label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="parttime">
                                <label class="form-check-label" for="parttime">Part Time</label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="remote">
                                <label class="form-check-label" for="remote">Remote</label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="intern">
                                <label class="form-check-label" for="intern">Intership</label>
                            </div>
                        </div>
                    </div>
                    <!-- Job Type -->

                    <!-- Posted -->
                    <div class="widget">
                        <h5 class="widget-title">Experience</h5>
                        <div class="mt-4">
                            <div class="form-check mb-0">
                                <input class="form-check-input" checked type="radio" name="flexRadioDefault2"
                                    id="fresher">
                                <label class="form-check-label" for="fresher">Fresher</label>
                            </div>

                            <div class="form-check mb-0">
                                <input class="form-check-input" checked type="radio" name="flexRadioDefault2"
                                    id="oneyear">
                                <label class="form-check-label" for="oneyear">+1 Year</label>
                            </div>

                            <div class="form-check mb-0">
                                <input class="form-check-input" checked type="radio" name="flexRadioDefault2"
                                    id="twoyear">
                                <label class="form-check-label" for="twoyear">+2 Year</label>
                            </div>

                            <div class="form-check mb-0">
                                <input class="form-check-input" checked type="radio" name="flexRadioDefault2"
                                    id="3year">
                                <label class="form-check-label" for="3year">+3 Year</label>
                            </div>

                            <div class="form-check mb-0">
                                <input class="form-check-input" checked type="radio" name="flexRadioDefault2"
                                    id="fiveyear">
                                <label class="form-check-label" for="fiveyear">+5 Year</label>
                            </div>
                        </div>
                    </div>
                    <!-- Posted -->
                </div>
            </div>
            <!--end col-->

            <div class="col-lg-8 col-md-6 col-12">
                <div class="row align-items-center">
                    <div class="col-lg-9 col-md-8">
                        <div class="section-title">
                            <span class="text-muted me-3">Showing 1 - 15 out of 452</span>
                        </div>
                    </div>
                    <!--end col-->

                    <div class="col-lg-3 col-md-4 mt-4 mt-sm-0 pt-2 pt-sm-0">
                        <div class="form custom-form">
                            <select class="form-select form-control" aria-label="Default select example"
                                id="Sortbylist-job">
                                <option selected>All Jobs</option>
                                <option>Full Time</option>
                                <option>Part Time</option>
                                <option>Remote</option>
                                <option>Work From Home</option>
                            </select>
                        </div>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->

                <div class="row">
                    <div class="col-12 mt-4 pt-2">
                        <div class="job-box d-md-flex align-items-center border-0 shadow rounded p-4 position-relative">
                            <img src="{{ asset('assets/images/logo-placeholder.jpeg') }}" class="avatar avatar-md-sm" alt="">

                            <div class="ms-md-4 mt-4 mt-sm-0">
                                <a href="#" class="text-dark h5">Web Developer</a>

                                <ul class="list-unstyled mb-0 mt-2">
                                    <li class="d-lg-inline text-muted h6 mb-0 me-lg-2"><i
                                            class="uil uil-map-marker text-primary"></i> <a href="javascript:void(0)"
                                            class="text-dark">CircleCI</a>, San Francisco
                                    </li>
                                    <li class="d-lg-inline text-muted h6 mb-0 me-lg-2"><i
                                            class="uil uil-clock text-primary"></i> 8hr/ Day</li>
                                    <li class="d-lg-inline text-muted h6 mb-0"><i class="uil uil-bill text-primary"></i>
                                        30k-35k</li>
                                </ul>

                                <div class="mt-2">
                                    <span class="badge bg-soft-primary">Fulltime</span>
                                    <span class="badge bg-soft-warning">Office</span>
                                </div>
                            </div>

                            <div class="position-absolute top-0 end-0 mt-3 me-3">
                                <a href="javascript:void(0)" class="btn btn-icon btn-pills btn-soft-primary"><i
                                        class="uil uil-bookmark align-middle"></i></a>
                            </div>
                        </div>
                    </div>
                    <!--end col-->

                    <div class="col-12 mt-4 pt-2">
                        <div class="job-box d-md-flex align-items-center border-0 shadow rounded p-4 position-relative">
                            <img src="{{ asset('assets/images/logo-placeholder.jpeg') }}" class="avatar avatar-md-sm" alt="">

                            <div class="ms-md-4 mt-4 mt-sm-0">
                                <a href="#" class="text-dark h5">Web Designer</a>

                                <ul class="list-unstyled mb-0 mt-2">
                                    <li class="d-lg-inline text-muted h6 mb-0 me-lg-2"><i
                                            class="uil uil-map-marker text-primary"></i> <a href="javascript:void(0)"
                                            class="text-dark">MG</a>, San Francisco</li>
                                    <li class="d-lg-inline text-muted h6 mb-0 me-lg-2"><i
                                            class="uil uil-clock text-primary"></i> 8hr/ Day</li>
                                    <li class="d-lg-inline text-muted h6 mb-0"><i class="uil uil-bill text-primary"></i>
                                        30k-35k</li>
                                </ul>

                                <div class="mt-2">
                                    <span class="badge bg-soft-primary">Fulltime</span>
                                    <span class="badge bg-soft-warning">Office</span>
                                </div>
                            </div>

                            <div class="position-absolute top-0 end-0 mt-3 me-3">
                                <a href="javascript:void(0)" class="btn btn-icon btn-pills btn-soft-primary"><i
                                        class="uil uil-bookmark align-middle"></i></a>
                            </div>
                        </div>
                    </div>
                    <!--end col-->

                    <div class="col-12 mt-4 pt-2">
                        <div class="job-box d-md-flex align-items-center border-0 shadow rounded p-4 position-relative">
                            <img src="{{ asset('assets/images/logo-placeholder.jpeg') }}" class="avatar avatar-md-sm" alt="">

                            <div class="ms-md-4 mt-4 mt-sm-0">
                                <a href="#" class="text-dark h5">Web Developer</a>

                                <ul class="list-unstyled mb-0 mt-2">
                                    <li class="d-lg-inline text-muted h6 mb-0 me-lg-2"><i
                                            class="uil uil-map-marker text-primary"></i> <a href="javascript:void(0)"
                                            class="text-dark">Codepen</a>, San Francisco
                                    </li>
                                    <li class="d-lg-inline text-muted h6 mb-0 me-lg-2"><i
                                            class="uil uil-clock text-primary"></i> 8hr/ Day</li>
                                    <li class="d-lg-inline text-muted h6 mb-0"><i class="uil uil-bill text-primary"></i>
                                        30k-35k</li>
                                </ul>

                                <div class="mt-2">
                                    <span class="badge bg-soft-primary">Fulltime</span>
                                    <span class="badge bg-soft-warning">Office</span>
                                </div>
                            </div>

                            <div class="position-absolute top-0 end-0 mt-3 me-3">
                                <a href="javascript:void(0)" class="btn btn-icon btn-pills btn-soft-primary"><i
                                        class="uil uil-bookmark align-middle"></i></a>
                            </div>
                        </div>
                    </div>
                    <!--end col-->

                    <div class="col-12 mt-4 pt-2">
                        <div class="job-box d-md-flex align-items-center border-0 shadow rounded p-4 position-relative">
                            <img src="{{ asset('assets/images/logo-placeholder.jpeg') }}" class="avatar avatar-md-sm" alt="">

                            <div class="ms-md-4 mt-4 mt-sm-0">
                                <a href="#" class="text-dark h5">Web Developer</a>

                                <ul class="list-unstyled mb-0 mt-2">
                                    <li class="d-lg-inline text-muted h6 mb-0 me-lg-2"><i
                                            class="uil uil-map-marker text-primary"></i> <a href="javascript:void(0)"
                                            class="text-dark">Discord</a>, San Francisco
                                    </li>
                                    <li class="d-lg-inline text-muted h6 mb-0 me-lg-2"><i
                                            class="uil uil-clock text-primary"></i> 8hr/ Day</li>
                                    <li class="d-lg-inline text-muted h6 mb-0"><i class="uil uil-bill text-primary"></i>
                                        30k-35k</li>
                                </ul>

                                <div class="mt-2">
                                    <span class="badge bg-soft-primary">Fulltime</span>
                                    <span class="badge bg-soft-warning">Office</span>
                                </div>
                            </div>

                            <div class="position-absolute top-0 end-0 mt-3 me-3">
                                <a href="javascript:void(0)" class="btn btn-icon btn-pills btn-soft-primary"><i
                                        class="uil uil-bookmark align-middle"></i></a>
                            </div>
                        </div>
                    </div>
                    <!--end col-->

                    <div class="col-12 mt-4 pt-2">
                        <div class="job-box d-md-flex align-items-center border-0 shadow rounded p-4 position-relative">
                            <img src="{{ asset('assets/images/logo-placeholder.jpeg') }}" class="avatar avatar-md-sm" alt="">

                            <div class="ms-md-4 mt-4 mt-sm-0">
                                <a href="#" class="text-dark h5">Web Developer</a>

                                <ul class="list-unstyled mb-0 mt-2">
                                    <li class="d-lg-inline text-muted h6 mb-0 me-lg-2"><i
                                            class="uil uil-map-marker text-primary"></i> <a href="javascript:void(0)"
                                            class="text-dark">Eslint</a>, San Francisco
                                    </li>
                                    <li class="d-lg-inline text-muted h6 mb-0 me-lg-2"><i
                                            class="uil uil-clock text-primary"></i> 8hr/ Day</li>
                                    <li class="d-lg-inline text-muted h6 mb-0"><i class="uil uil-bill text-primary"></i>
                                        30k-35k</li>
                                </ul>

                                <div class="mt-2">
                                    <span class="badge bg-soft-primary">Fulltime</span>
                                    <span class="badge bg-soft-warning">Office</span>
                                </div>
                            </div>

                            <div class="position-absolute top-0 end-0 mt-3 me-3">
                                <a href="javascript:void(0)" class="btn btn-icon btn-pills btn-soft-primary"><i
                                        class="uil uil-bookmark align-middle"></i></a>
                            </div>
                        </div>
                    </div>
                    <!--end col-->

                    <div class="col-12 mt-4 pt-2">
                        <div class="job-box d-md-flex align-items-center border-0 shadow rounded p-4 position-relative">
                            <img src="{{ asset('assets/images/logo-placeholder.jpeg') }}" class="avatar avatar-md-sm" alt="">

                            <div class="ms-md-4 mt-4 mt-sm-0">
                                <a href="#" class="text-dark h5">Web Developer</a>

                                <ul class="list-unstyled mb-0 mt-2">
                                    <li class="d-lg-inline text-muted h6 mb-0 me-lg-2"><i
                                            class="uil uil-map-marker text-primary"></i> <a href="javascript:void(0)"
                                            class="text-dark">Gitlab</a>, San Francisco
                                    </li>
                                    <li class="d-lg-inline text-muted h6 mb-0 me-lg-2"><i
                                            class="uil uil-clock text-primary"></i> 8hr/ Day</li>
                                    <li class="d-lg-inline text-muted h6 mb-0"><i class="uil uil-bill text-primary"></i>
                                        30k-35k</li>
                                </ul>

                                <div class="mt-2">
                                    <span class="badge bg-soft-primary">Fulltime</span>
                                    <span class="badge bg-soft-warning">Office</span>
                                </div>
                            </div>

                            <div class="position-absolute top-0 end-0 mt-3 me-3">
                                <a href="javascript:void(0)" class="btn btn-icon btn-pills btn-soft-primary"><i
                                        class="uil uil-bookmark align-middle"></i></a>
                            </div>
                        </div>
                    </div>
                    <!--end col-->

                    <div class="col-12 mt-4 pt-2">
                        <div class="job-box d-md-flex align-items-center border-0 shadow rounded p-4 position-relative">
                            <img src="{{ asset('assets/images/logo-placeholder.jpeg') }}" class="avatar avatar-md-sm" alt="">

                            <div class="ms-md-4 mt-4 mt-sm-0">
                                <a href="#" class="text-dark h5">Web Developer</a>

                                <ul class="list-unstyled mb-0 mt-2">
                                    <li class="d-lg-inline text-muted h6 mb-0 me-lg-2"><i
                                            class="uil uil-map-marker text-primary"></i> <a href="javascript:void(0)"
                                            class="text-dark">Udemy</a>, San Francisco
                                    </li>
                                    <li class="d-lg-inline text-muted h6 mb-0 me-lg-2"><i
                                            class="uil uil-clock text-primary"></i> 8hr/ Day</li>
                                    <li class="d-lg-inline text-muted h6 mb-0"><i class="uil uil-bill text-primary"></i>
                                        30k-35k</li>
                                </ul>

                                <div class="mt-2">
                                    <span class="badge bg-soft-primary">Fulltime</span>
                                    <span class="badge bg-soft-warning">Office</span>
                                </div>
                            </div>

                            <div class="position-absolute top-0 end-0 mt-3 me-3">
                                <a href="javascript:void(0)" class="btn btn-icon btn-pills btn-soft-primary"><i
                                        class="uil uil-bookmark align-middle"></i></a>
                            </div>
                        </div>
                    </div>
                    <!--end col-->

                    <div class="col-12 mt-4 pt-2">
                        <div class="job-box d-md-flex align-items-center border-0 shadow rounded p-4 position-relative">
                            <img src="{{ asset('assets/images/logo-placeholder.jpeg') }}" class="avatar avatar-md-sm" alt="">

                            <div class="ms-md-4 mt-4 mt-sm-0">
                                <a href="#" class="text-dark h5">Web Developer</a>

                                <ul class="list-unstyled mb-0 mt-2">
                                    <li class="d-lg-inline text-muted h6 mb-0 me-lg-2"><i
                                            class="uil uil-map-marker text-primary"></i> <a href="javascript:void(0)"
                                            class="text-dark">Webhooks</a>, San Francisco
                                    </li>
                                    <li class="d-lg-inline text-muted h6 mb-0 me-lg-2"><i
                                            class="uil uil-clock text-primary"></i> 8hr/ Day</li>
                                    <li class="d-lg-inline text-muted h6 mb-0"><i class="uil uil-bill text-primary"></i>
                                        30k-35k</li>
                                </ul>

                                <div class="mt-2">
                                    <span class="badge bg-soft-primary">Fulltime</span>
                                    <span class="badge bg-soft-warning">Office</span>
                                </div>
                            </div>

                            <div class="position-absolute top-0 end-0 mt-3 me-3">
                                <a href="javascript:void(0)" class="btn btn-icon btn-pills btn-soft-primary"><i
                                        class="uil uil-bookmark align-middle"></i></a>
                            </div>
                        </div>
                    </div>
                    <!--end col-->

                    <div class="col-12 mt-4 pt-2">
                        <div class="job-box d-md-flex align-items-center border-0 shadow rounded p-4 position-relative">
                            <img src="{{ asset('assets/images/logo-placeholder.jpeg') }}" class="avatar avatar-md-sm" alt="">

                            <div class="ms-md-4 mt-4 mt-sm-0">
                                <a href="#" class="text-dark h5">Web Developer</a>

                                <ul class="list-unstyled mb-0 mt-2">
                                    <li class="d-lg-inline text-muted h6 mb-0 me-lg-2"><i
                                            class="uil uil-map-marker text-primary"></i> <a href="javascript:void(0)"
                                            class="text-dark">Sketch</a>, San Francisco
                                    </li>
                                    <li class="d-lg-inline text-muted h6 mb-0 me-lg-2"><i
                                            class="uil uil-clock text-primary"></i> 8hr/ Day</li>
                                    <li class="d-lg-inline text-muted h6 mb-0"><i class="uil uil-bill text-primary"></i>
                                        30k-35k</li>
                                </ul>

                                <div class="mt-2">
                                    <span class="badge bg-soft-primary">Fulltime</span>
                                    <span class="badge bg-soft-warning">Office</span>
                                </div>
                            </div>

                            <div class="position-absolute top-0 end-0 mt-3 me-3">
                                <a href="javascript:void(0)" class="btn btn-icon btn-pills btn-soft-primary"><i
                                        class="uil uil-bookmark align-middle"></i></a>
                            </div>
                        </div>
                    </div>
                    <!--end col-->

                    <div class="col-12 mt-4 pt-2">
                        <!-- PAGINATION START -->
                        <ul class="pagination justify-content-center mb-0">
                            <li class="page-item"><a class="page-link" href="javascript:void(0)"
                                    aria-label="Previous">Prev</a></li>
                            <li class="page-item active"><a class="page-link" href="javascript:void(0)">1</a></li>
                            <li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
                            <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
                            <li class="page-item"><a class="page-link" href="javascript:void(0)"
                                    aria-label="Next">Next</a></li>
                        </ul>
                        <!-- PAGINATION END -->
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </div>
    <!--end container-->
</section>
<!--end section-->
<!-- Job List End -->

@include('partials.footer')

@endsection