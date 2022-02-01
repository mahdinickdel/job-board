@extends('layouts.master')
@section('page.title', $job->title)

@section('page.navigation.classes', 'nav-light')

@section('page.content')

@include('partials.header')

<!-- Hero Start -->
<section class="bg-half-170 bg-primary d-table w-100" style="background-image: url('images/job/bg.png');">
    <div class="container">
        <div class="row mt-5 justify-content-center">
            <div class="col-lg-12 text-center">
                <div class="pages-heading">
                    <img src="images/logo-placeholder.jpeg" class="avatar avatar-md-md rounded-pill bg-white p-3" alt="">
                    <h4 class="title text-white title-dark mt-4 mb-3">{{ $job->title }}</h4>
                    <p class="para-desc mx-auto text-white-50"></p>
                    <ul class="list-unstyled mb-0">
                        <li class="list-inline-item text-white-50 me-3"><i
                                class="mdi mdi-map-marker text-warning me-2"></i>{{ $job->province->name }}، {{ $job->city->name }}</li>
                        <li class="list-inline-item text-white-50"><i
                                class="mdi mdi-file text-warning me-2"></i>{{ $job->category->name }}</li>
                    </ul>
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->

        <div class="position-breadcrumb">
            <nav aria-label="breadcrumb" class="d-inline-block">
                <ul class="breadcrumb bg-white rounded shadow mb-0 px-4 py-2">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">صفحه نخست</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('jobs') }}">فرصت های شغلی</a></li>
                    {{-- <li class="breadcrumb-item active" aria-current="page">{{ $job->title }}</li> --}}
                </ul>
            </nav>
        </div>
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

<!-- Job Detail Start -->
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-5 col-12">
                <div class="card sidebar sticky-bar rounded shadow border-0">
                    <div class="card-body widget border-bottom">
                        <h5 class="mb-0">Job Information</h5>
                    </div>

                    <div class="card-body">
                        <div class="d-flex widget align-items-center">
                            <i data-feather="user-check" class="fea icon-ex-md me-3"></i>
                            <div class="flex-1">
                                <h6 class="widget-title mb-0">Employee Type:</h6>
                                <small class="text-primary mb-0">Full Time</small>
                            </div>
                        </div>

                        <div class="d-flex widget align-items-center mt-3">
                            <i data-feather="map-pin" class="fea icon-ex-md me-3"></i>
                            <div class="flex-1">
                                <h6 class="widget-title mb-0">Location:</h6>
                                <small class="text-primary mb-0">Beijing, China</small>
                            </div>
                        </div>

                        <div class="d-flex widget align-items-center mt-3">
                            <i data-feather="monitor" class="fea icon-ex-md me-3"></i>
                            <div class="flex-1">
                                <h6 class="widget-title mb-0">Job Type:</h6>
                                <small class="text-primary mb-0">Back-end Developer</small>
                            </div>
                        </div>

                        <div class="d-flex widget align-items-center mt-3">
                            <i data-feather="briefcase" class="fea icon-ex-md me-3"></i>
                            <div class="flex-1">
                                <h6 class="widget-title mb-0">Experience:</h6>
                                <small class="text-primary mb-0">+2 Year</small>
                            </div>
                        </div>

                        <div class="d-flex widget align-items-center mt-3">
                            <i data-feather="book" class="fea icon-ex-md me-3"></i>
                            <div class="flex-1">
                                <h6 class="widget-title mb-0">Qualifications:</h6>
                                <small class="text-primary mb-0">MSCIT</small>
                            </div>
                        </div>

                        <div class="d-flex widget align-items-center mt-3">
                            <i data-feather="dollar-sign" class="fea icon-ex-md me-3"></i>
                            <div class="flex-1">
                                <h6 class="widget-title mb-0">Salary:</h6>
                                <small class="text-primary mb-0">+50k to 70k</small>
                            </div>
                        </div>

                        <div class="d-flex widget align-items-center mt-3">
                            <i data-feather="clock" class="fea icon-ex-md me-3"></i>
                            <div class="flex-1">
                                <h6 class="widget-title mb-0">تاریخ ثبت آگهی:</h6>
                                <small class="text-primary mb-0 mb-0">{{ $job->the_created_at }}</small>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!--end col-->

            <div class="col-lg-8 col-md-7 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                <div class="ms-lg-4">
                    <h5>توضیحات:</h5>
                    <p>{{ $job->description }}</p>

                    <div class="mt-4">
                        <a href="#" class="btn btn-outline-primary"><i class="mdi mdi-send"></i> ارسال رزومه</a>
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
<!-- Job Detail End -->

@include('partials.footer')

@endsection

