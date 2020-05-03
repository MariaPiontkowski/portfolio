<!DOCTYPE html>
<html lang="en">
<head>
    <title>Maria Cecília Piontkowski Alves</title>
    <meta charset="utf-8">
    <meta name="author" content="Maria Cecília Piontkowski Alves|Colorlib">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Desenvolvedora de softwares e websites personalizados.">
    <meta name="keywords" content="HTML, CSS, JavaScript, PHP, software, website, desenvolvedor, programador, blumenau">

    <link rel="icon" href="{{asset("img/logo.jpg")}}" type="image/jpg" />

    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,700,800" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset("css/open-iconic-bootstrap.min.css") }}">
    <link rel="stylesheet" href="{{ asset("css/animate.css") }}">
    <link rel="stylesheet" href="{{ asset("css/owl.carousel.min.css") }}">
    <link rel="stylesheet" href="{{ asset("css/owl.theme.default.min.css") }}">
    <link rel="stylesheet" href="{{ asset("css/magnific-popup.css") }}">
    <link rel="stylesheet" href="{{ asset("css/aos.css") }}">
    <link rel="stylesheet" href="{{ asset("css/ionicons.min.css") }}">
    <link rel="stylesheet" href="{{ asset("css/bootstrap-datepicker.css") }}">
    <link rel="stylesheet" href="{{ asset("css/jquery.timepicker.css") }}">
    <link rel="stylesheet" href="{{ asset("css/flaticon.css") }}">
    <link rel="stylesheet" href="{{ asset("css/icomoon.css") }}">
    <link rel="stylesheet" href="{{ asset("css/style.css") }}">
    @stack('style')
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="{{route('index')}}">
            <img src="{{asset('img/logo.jpg')}}" width="20" alt="">
            <span>aria Cecília Piontkowski Alves</span>
        </a>
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span>
{{--            Menu--}}
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item @if(request()->routeIs('index')) active @endif"><a href="{{route('index')}}" class="nav-link">Início</a></li>
                <li class="nav-item @if(request()->routeIs('sobre')) active @endif"><a href="{{route('sobre')}}" class="nav-link">Sobre</a></li>
                <li class="nav-item @if(request()->routeIs('portfolio')) active @endif"><a href="{{route('portfolio')}}" class="nav-link">Portfólio</a></li>
                <!-- <li class="nav-item"><a href="blog.html" class="nav-link">Case Studies</a></li> -->
                <!-- <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li> -->
                <li class="nav-item cta"><a href="{{route('contato')}}" class="nav-link"><span>Entre em contato</span></a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- END nav -->

@section('overlay')
    <div class="hero-wrap js-fullheight">
        <div class="overlay"></div>
        <div id="particles-js"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
                <div class="col-md-6 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
                    <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="{{route('index')}}">Início</a></span> <span>@yield('page')</span></p>
                    <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">@yield('page')</h1>
                </div>
            </div>
        </div>
    </div>
@show

@yield('content')

<footer class="ftco-footer ftco-bg-dark ftco-section">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Maria Cecília Piontkowski Alves</h2>
                    <p> Web Designer e Desenvolvedora de Software.</p>
                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Links</h2>
                    <ul class="list-unstyled">
                        <li><a href="{{route('index')}}" class="py-2 d-block">Início</a></li>
                        <li><a href="{{route('sobre')}}" class="py-2 d-block">Sobre</a></li>
                        <li><a href="{{route('portfolio')}}" class="py-2 d-block">Portfólio</a></li>
                        <li><a href="{{route('contato')}}" class="py-2 d-block">Contato</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Informações de Contato</h2>
                    <ul class="list-unstyled">
                        <li><span class="py-2 d-block">Blumenau - Santa Catarina, Brasil</span></li>
{{--                        <li><a href="#" class="py-2 d-block">+ 1235 2355 98</a></li>--}}
{{--                        <li><a href="#" class="py-2 d-block">info@yoursite.com</a></li>--}}
                        <li><span class="py-2 d-block">maria.piontkowski@hotmail.com</span></li>
                    </ul>
                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <ul class="ftco-footer-social list-unstyled float-md-left float-lft">
                        <li class="ftco-animate" title="LinkedIn"><a href="https://www.linkedin.com/in/maria-cec%C3%ADlia-piontkowski-alves-45213213b/"><span class="icon-linkedin"></span></a></li>
                        <li class="ftco-animate" title="Workana"><a href="https://www.workana.com/freelancer/97ad1a27417874f91a3e3653b07d841c"><span class="icon"><b>W</b></span></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">

                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    <small>Copyright &copy;{{date('Y')}} Template por <a href="https://colorlib.com" target="_blank">Colorlib</a> | Maria Cecília Piontkowski Alves</small>
{{--                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>--}}
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
            </div>
        </div>
    </div>
</footer>



<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
    <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#E14156"/></svg>
</div>

<script src="{{ asset("js/jquery.min.js") }}"></script>
<script src="{{ asset("js/jquery-migrate-3.0.1.min.js") }}"></script>
<script src="{{ asset("js/popper.min.js") }}"></script>
<script src="{{ asset("js/bootstrap.min.js") }}"></script>
<script src="{{ asset("js/jquery.easing.1.3.js") }}"></script>
<script src="{{ asset("js/jquery.waypoints.min.js") }}"></script>
<script src="{{ asset("js/jquery.stellar.min.js") }}"></script>
<script src="{{ asset("js/owl.carousel.min.js") }}"></script>
<script src="{{ asset("js/jquery.magnific-popup.min.js") }}"></script>
<script src="{{ asset("js/aos.js") }}"></script>
<script src="{{ asset("js/jquery.animateNumber.min.js") }}"></script>
<script src="{{ asset("js/bootstrap-datepicker.js") }}"></script>
{{--<script src="{{ asset("js/jquery.timepicker.min.js") }}"></script>--}}
<script src="{{ asset("js/particles.min.js") }}"></script>
<script src="{{ asset("js/particle.js") }}"></script>
<script src="{{ asset("js/scrollax.min.js") }}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="{{ asset("js/google-map.js") }}"></script>
<script src="{{ asset("js/main.js") }}"></script>
</body>
</html>
