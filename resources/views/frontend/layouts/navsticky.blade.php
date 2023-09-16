<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Green Hands</title>

    <!-- mobile responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">


    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/responsive.css') }}">

    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('frontend/images/fav-icon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('frontend/images/fav-icon/favicon-32x32.png') }}"
        sizes="32x32">
    <link rel="icon" type="image/png" href="{{ asset('frontend/images/fav-icon/favicon-16x16.png') }}"
        sizes="16x16">
    <link rel="stylesheet" href="{{ asset('frontend/css/css/player.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/css/bootstrap-select.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/css/flexslider.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/css/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/css/imagehover.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/css/jquery-ui.theme.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/css/jquery.bootstrap-touchspin.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/css/jquery.bxslider.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/css/layers.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/css/menu.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/css/navigation.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/css/nouislider.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/css/nouislider.pips.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/css/polyglot-language-switcher.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/css/settings.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/css/style.css') }}">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <style>
        #slider1 {
            height: 640px !important;
        }

        .rev_slider_wrapper {
            height: 640px !important;

        }
    </style>




</head>

<body style="background-color: whitesmoke;">

    <section style="background-color: #000000d1 !important ; position: absolute !important ;" class="theme_menu stricky"
        id="theme_menu">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="main-logo">
                        <a href="{{ route('index') }}"><img
                                src="{{ asset('frontend/images/logo/green_hands_logo-removebg-preview.png') }}"
                                alt="" style="height: 75px ; width:124px"></a>
                    </div>
                </div>

                <div class="col-md-9 menu-column">

                    <nav class="menuzord" id="main_menu">
                        <ul class="menuzord-menu">
                            <li><a href="{{ route('index') }}">Home</a></li>
                       
                            @if (Route::has('login'))
                                @auth
                                    <li><a>My Account</a>
                                        <ul class="dropdown">
                                            <li><a href="{{ route('profile2.profile.index') }}">Profile</a></li>
                                            <form method="POST" action="{{ route('logout') }}" x-data>
                                                @csrf
                                                <li><a href="{{ route('logout') }}">Logout</a></li>
                                            </form>
                                        </ul>
                                    </li>
                                @else
                                    <li><a id="loginbnt" class="thm-btn style-2" href="{{ route('login') }}"
                                            class="">Login</a></li>
                                    @if (Route::has('register'))
                                        <li><a id="loginbnt" class="thm-btn style-2" href="{{ route('register') }}"
                                                class="">Register</a></li>
                                    @endif
                                @endauth
                            @endif
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>




    @yield('content')


    @include('frontend.layouts.footer')



    <!-- jQuery -->
    <script src="{{ asset('frontend/js/jquery.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/js/menu.js') }}"></script>
    <script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.mixitup.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.fancybox.pack.js') }}"></script>
    <script src="{{ asset('frontend/js/imagezoom.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.polyglot.language.switcher.js') }}"></script>
    <script src="{{ asset('frontend/js/SmoothScroll.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.appear.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.countTo.js') }}"></script>
    <script src="{{ asset('frontend/js/validation.js') }}"></script>
    <script src="{{ asset('frontend/js/wow.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.fitvids.js') }}"></script>
    <script src="{{ asset('frontend/js/nouislider.js') }}"></script>
    <script src="{{ asset('frontend/js/isotope.js') }}"></script>
    <script src="{{ asset('frontend/js/pie-chart.js') }}"></script>

    <!-- revolution slider js -->
    <script src="{{ asset('frontend/js/rev-slider/jquery.themepunch.tools.min.js') }}"></script>
    <script src="{{ asset('frontend/js/rev-slider/jquery.themepunch.revolution.min.js') }}"></script>
    <script src="{{ asset('frontend/js/rev-slider/revolution.extension.actions.min.js') }}"></script>
    <script src="{{ asset('frontend/js/rev-slider/revolution.extension.carousel.min.js') }}"></script>
    <script src="{{ asset('frontend/js/rev-slider/revolution.extension.kenburn.min.js') }}"></script>
    <script src="{{ asset('frontend/js/rev-slider/revolution.extension.layeranimation.min.js') }}"></script>
    <script src="{{ asset('frontend/js/rev-slider/revolution.extension.migration.min.js') }}"></script>
    <script src="{{ asset('frontend/js/rev-slider/revolution.extension.navigation.min.js') }}"></script>
    <script src="{{ asset('frontend/js/rev-slider/revolution.extension.parallax.min.js') }}"></script>
    <script src="{{ asset('frontend/js/rev-slider/revolution.extension.slideanims.min.js') }}"></script>
    <script src="{{ asset('frontend/js/rev-slider/revolution.extension.video.min.js') }}"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="{{ asset('frontend/js/custom.js') }}"></script>

    <script>
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                toastr.error("{{ $error }}")
            @endforeach
        @endif
    </script>
    </div>
</body>

</html>
