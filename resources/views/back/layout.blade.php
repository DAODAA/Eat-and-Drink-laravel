<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>EAT & DRINK SHOP-@yield('title')</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('front_assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('front_assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('front_assets/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('back_assets/css/style.css') }}">

</head>

<body>
    @include('flash-messages')
    <div class="container bg-white rounded-top mt-5" id="zero-pad">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-10 col-12 pt-3">
                <div class="d-flex">
                    <div class="pt-1">
                        <h4>EAT & DRINK SHOP</h4>
                    </div>

                    <div class="ml-auto p-2"><a href="#"class="text-dark text-decoration-none" id="mobile-font">
                            Bienvenue xxxx</a></div>
                    <div class="p-2"><a href="#" class="text-dark text-decoration-none a"
                            id="mobile-font">Logout</a></div>
                </div>

                <div class="col-lg-12 text-center">
                    <a class="me-0 pb-4" href="https://www.tutorialspoint.com">
                        <h2>EAT & DRINK</h2>
                    </a>
                    @yield('content')
                    <ul class="nav justify-content-center py-3 mt-md-0">
                        <li class="nav-item"><a class="nav-link fw-bold" href="#"><i class="fa fa-globe"></i>
                                About us</a></li>
                        <li class="nav-item"><a class="nav-link fw-bold" href="#"> <i class="fa fa-check"></i>
                                Refund Policy</a></li>
                        <li class="nav-item"><a class="nav-link fw-bold" href="#"><i class="fa fa-check"></i>
                                Terms of use</a></li>
                        <li class="nav-item"><a class="nav-link fw-bold" href="#"> <i
                                    class="fa fa-shield-check"></i> Privacy Policy</a></li>
                        <li class="nav-item"><a class="nav-link fw-bold" href="#"><i
                                    class="fa fa-question-circle"></i> FAQ's</a></li>
                        <li class="nav-item"><a class="nav-link fw-bold" href="#"><i
                                    class="fa fa-map-marker-alt"></i> Contact</a></li>
                    </ul>
                    <p class="small">© Copyright 2022. All Rights Reserved.</p>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="{{ asset('front_assets/js/bootstrap.bundle.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('front_assets/js/jquery.min.js') }}"></script>
</body>

</html>
