<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Eco Green || Responsive HTML 5 Template</title>

    <!-- mobile responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">


    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/responsive.css') }}">

    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('frontend/images/fav-icon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('frontend/images/fav-icon/favicon-32x32.png') }}" sizes="32x32">
    <link rel="icon" type="image/png" href="{{ asset('frontend/images/fav-icon/favicon-16x16.png') }}" sizes="16x16">
    

    


</head>

<body>

    <div class="boxed_wrapper">

        <div class="top-bar">
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
                        <button class="thm-btn donate-box-btn">donate now</button>

                    </div>


                </div>


            </div>
        </div>

        @include('frontend.layouts.navbar')


        @yield('content')


        @include('frontend.layouts.footer')

        <!-- preloader  -->
        <div class="preloader"></div>
        @include('frontend.layouts.donationPopUp')

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

        <script src="{{ asset('frontend/js/custom.js') }}"></script>



            <!-- google map js -->
     <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRvBPo3-t31YFk588DpMYS6EqKf-oGBSI"></script> 
 
    <script src="{{ asset('frontend/js/gmap.js') }}"></script>

    <script id="map-script" src="{{ asset('frontend/js/default-map.js') }}"></script>
    <script src="{{ asset('frontend/js/custom.js') }}"></script>





    </div>

</body>

</html>
