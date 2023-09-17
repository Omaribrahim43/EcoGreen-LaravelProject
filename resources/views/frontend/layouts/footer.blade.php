<footer class="main-footer">

    <!--Widgets Section-->
    <div class="widgets-section">
        <div class="container">
            <div class="row">
                <!--Big Column-->
                <div class="big-column col-md-6 col-sm-12 col-xs-12">
                    <div class="row clearfix">

                        <!--Footer Column-->
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            {{-- fore logo  and descreption --}}


                            <div class="footer-widget about-column">
                                <figure class="footer-logo"><a href="{{ route('index') }}"><img style="width: 65%;"
                                            src="{{ asset('frontend/images/logo/green_hands_logo-removebg-preview.png') }}"
                                            alt=""></a>
                                </figure>

                                <div class="text">
                                    <p>Welcome to the Green Hands website! Which connects eco-conscious volunteers with
                                        green initiatives and community efforts. </p>
                                </div>
                            </div>






                        </div>
                        <!--Footer Column-->
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="footer-widget link-column">
                                <div class="section-title">
                                    <h4>Quick Links</h4>
                                </div>
                                {{-- class="menuzord" id="main_menu" --}}
                                <div class="widget-content">
                                    <ul class="list">
                                        <li><a href="{{ route('index') }}" class="">Home</a></li>
                                        <li><a href="{{ route('All.projects') }}">Services</a></li>
                                        <li><a href="{{ route('about') }}" class="">About </a></li>
                                        <li><a href="{{ route('show.contact') }}">Contact</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Big Column-->
                <div class="big-column col-md-6 col-sm-12 col-xs-12">
                    <div class="row clearfix">

                        <!--Footer Column-->
                        <div class="col-md-6 col-sm-6 col-xs-12">


                            <div class="footer-widget about-column">
                                <div class="section-title">
                                    <h4>Contact US</h4>

                                </div>
                                <ul class="contact-info"><a href="https://goo.gl/maps/cpXzX7GYA3TqGpDa9">
                                        <li><span class="icon-signs"></span> Building 16 <br>
                                            Al-Sheikh Khalil St. <br>
                                            Irbid, center of city, HKJ</li>
                                    </a>
                                    <li><span class="icon-phone-call"></span> Phone: +962777415591</li>
                                    <li><span class="icon-note"></span>Supportus@GreenHands.com</li>
                                </ul>
                            </div>

                        </div>

                        <!--Footer Column-->
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            {{-- put any thing  --}}


                            <div class="footer-widget contact-column">
                                <div class="section-title">
                                    <h4>Follow Us</h4>
                                </div>
                                <h6>Stay connected with us to stay updated on all the latest developments.</h6>


                                <br>
                                <ul class="social-icon">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>


                    </div>
                </div>

            </div>
        </div>
    </div>
</footer>

<!--Footer Bottom-->
<section class="footer-bottom">
    <div class="container">
        <div class="pull-left copy-text">
            <p><a href="#">Copyrights © 2023</a> All Rights Reserved. Powered by <a href="#">Green Hands</a>
            </p>

        </div>

    </div><!-- /.container -->
</section>

<!-- Scroll Top  -->
<button class="scroll-top tran3s color2_bg"><span class="fa fa-angle-up"></span></button>
