<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="utf-8" />
    <title>@yield('page.title', 'عنوان صفحه') | کاریاب</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="@yield('page.description')" />
    <meta name="keywords" content="@yield('page.keywords')" />

    <!-- favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">
    <!-- Bootstrap -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Icons -->
    <link href="{{ asset('assets/css/materialdesignicons.min.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v3.0.6/css/line.css">
    
    <!-- Main Css -->
    <link href="{{ asset('assets/css/style-rtl.min.css') }}" rel="stylesheet" type="text/css" id="theme-opt" />
    <link href="{{ asset('assets/css/colors/default.css') }}" rel="stylesheet" id="color-opt">

    @yield('page.styles')
    @stack('page.header.scripts')
</head>

<body>

    @yield('page.content')

    <!-- javascript -->
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    
    <!-- Icons -->
    <script src="{{ asset('assets/js/feather.min.js') }}"></script>

    @stack('page.footer.scripts')

    <!-- Main Js -->
    <script src="{{ asset('assets/js/plugins.init.js') }}"></script>
    <!--Note: All init js like tiny slider, counter, countdown, maintenance, lightbox, gallery, swiper slider, aos animation etc.-->
    <script src="{{ asset('assets/js/app.js') }}"></script>
    <!--Note: All important javascript like page loader, menu, sticky menu, menu-toggler, one page menu etc. -->
</body>
</html>