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
    <style> #slider1 {
        height: 740px!important;
        }
       .rev_slider_wrapper{  height: 680px!important;

       } </style>




</head>

<body>


{{-- 
    <div class="boxed_wrapper">

        {{-- <div class="top-bar">
            <div class="container">
                <div class="clearfix">

                    <ul class="float_left top-bar-info">
                        <li><i class="icon-phone-call"></i>Phone: (123) 0200 12345</li>
                        <li><i class="icon-e-mail-envelope"></i>Supportus@Ecogreen.com</li>
                    </ul>
                    <div class="right-column float_right">
                        <div id="polyglotLanguageSwitcher" class="">
                            <form action="#">
                                <select id="polyglot-language-options">
                                    <option id="en" value="en" selected>Eng</option>
                                    <option id="fr" value="fr">Fre</option>
                                    <option id="de" value="de">Ger</option>
                                    <option id="it" value="it">Ita</option>
                                    <option id="es" value="es">Spa</option>
                                </select>
                            </form>
                        </div>
                        <ul class="social list_inline">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-feed"></i></a></li>
                        </ul>
                        
                            <a href="{{route('open.form')}}" class="thm-btn donate-box-btn">donate now</a>
                        

                    </div>


                </div>


            </div>
        </div> --}}


        
        @include('frontend.layouts.navbar')


        @yield('content')


        @include('frontend.layouts.footer')

        <!-- preloader  -->
        {{-- <div class="preloader"></div> --}}

        {{-- @include('frontend.layouts.donationPopUp') --}}


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
