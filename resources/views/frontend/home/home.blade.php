@extends('frontend.layouts.master')

@section('content')
    {{-- Slider --}}
    <section class="rev_slider_wrapper">
        <div id="slider1" class="rev_slider" data-version="5.0">
            <ul>
                <li data-transition="fade">
                    <img src="https://bighearts.wgl-demo.net/wp-content/uploads/2023/08/h14-s1-1.jpg" alt=""
                        width="1920" height="888" data-bgposition="top center" data-bgfit="cover" data-bgrepeat="no-repeat"
                        data-bgparallax="1">

                    <div class="tp-caption  tp-resizeme" data-x="left" data-hoffset="15" data-y="top" data-voffset="260"
                        data-transform_idle="o:1;"
                        data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;"
                        data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                        data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" data-splitin="none" data-splitout="none"
                        data-responsive_offset="on" data-start="700">
                        <div class="slide-content-box">
                            <h2 class="thm-color">We are <span class="thm-color">Green Hands </span></h2>
                            <p style="font-size:28px">a passionate community dedicated to preserving and enhancing <br>our
                                planet's green spaces. </p>

                        </div>
                    </div>
                    <div class="tp-caption tp-resizeme" data-x="left" data-hoffset="15" data-y="top" data-voffset="480"
                        data-transform_idle="o:1;"
                        data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                        data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-splitin="none"
                        data-splitout="none" data-responsive_offset="on" data-start="2300">
                        <div class="slide-content-box">
                            <div class="button">
                                <a class="thm-btn" href="{{ route('about') }}">read more</a>
                            </div>
                        </div>
                    </div>
                    <div class="tp-caption tp-resizeme" data-x="left" data-hoffset="200" data-y="top" data-voffset="480"
                        data-transform_idle="o:1;"
                        data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                        data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-splitin="none"
                        data-splitout="none" data-responsive_offset="on" data-start="2600">
                        <div class="slide-content-box">
                            <div class="button">
                                <a class="thm-btn style-3" href="#services">Get Involved</a>
                            </div>
                        </div>
                    </div>
                </li>





                <li data-transition="fade">
                    <img src="https://th.bing.com/th/id/R.8088ed438001b81ab5807dc72f74e2b6?rik=NUhararFqqKPGw&pid=ImgRaw&r=0"
                        alt="" width="1920" height="580" data-bgposition="top center" data-bgfit="cover"
                        data-bgrepeat="no-repeat" data-bgparallax="1">

                    <div class="tp-caption  tp-resizeme" data-x="center" data-hoffset="" data-y="top" data-voffset="275"
                        data-transform_idle="o:1;"
                        data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;"
                        data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                        data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" data-splitin="none" data-splitout="none"
                        data-responsive_offset="on" data-start="700">
                        <div class="slide-content-box center">
                            <h2>Make Our Country a better place</h2>

                            <p style="font-size:26px">Join us in making our country a better place for all through
                                environmental <br>stewardship and community engagement.</p>
                        </div>
                    </div>
                    <div class="tp-caption tp-resizeme" data-x="center" data-hoffset="-90" data-y="top" data-voffset="450"
                        data-transform_idle="o:1;"
                        data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                        data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-splitin="none"
                        data-splitout="none" data-responsive_offset="on" data-start="2300">
                        <div class="slide-content-box">
                            <div class="button">
                                <a class="thm-btn" href="{{ route('about') }}">read more</a>
                            </div>
                        </div>
                    </div>
                    <div class="tp-caption tp-resizeme" data-x="center" data-hoffset="100" data-y="top"
                        data-voffset="450" data-transform_idle="o:1;"
                        data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                        data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-splitin="none"
                        data-splitout="none" data-responsive_offset="on" data-start="2600">
                        <div class="slide-content-box">
                            <div class="button">
                                <a class="thm-btn style-3" href="#services">get involved</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li data-transition="fade">
                    <img src="https://mamlakatalzuhur.com/wp-content/uploads/2022/10/plant-for-the-earth-royalty-free-image-1635783818-1536x864.jpg"
                        alt="" width="1920" height="888" data-bgposition="top center" data-bgfit="cover"
                        data-bgrepeat="no-repeat" data-bgparallax="1">

                    <div class="tp-caption  tp-resizeme" data-x="left" data-hoffset="15" data-y="top"
                        data-voffset="260" data-transform_idle="o:1;"
                        data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;"
                        data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                        data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" data-splitin="none" data-splitout="none"
                        data-responsive_offset="on" data-start="700">
                        <div class="slide-content-box">
                            <h2> Save <span>...World By Planting</span></h2>
                            <h3>trees Your Surrounding</h3>
                            <p style="font-size:26px">Great explorer of the truth, the master-builder of human happiness
                                <br>not know how
                                to pursue pleasure rationally... </p>
                        </div>
                    </div>
                    <div class="tp-caption tp-resizeme" data-x="left" data-hoffset="15" data-y="top"
                        data-voffset="480" data-transform_idle="o:1;"
                        data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                        data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-splitin="none"
                        data-splitout="none" data-responsive_offset="on" data-start="2300">
                        <div class="slide-content-box">
                            <div class="button">
                                <a class="thm-btn" href="{{ route('about') }}">read more</a>
                            </div>
                        </div>
                    </div>
                    <div class="tp-caption tp-resizeme" data-x="left" data-hoffset="200" data-y="top"
                        data-voffset="480" data-transform_idle="o:1;"
                        data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                        data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-splitin="none"
                        data-splitout="none" data-responsive_offset="on" data-start="2600">
                        <div class="slide-content-box">
                            <div class="button">
                                <a class="thm-btn style-3" href="#services">Get Involved</a>
                            </div>
                        </div>
                    </div>
                </li>

            </ul>
        </div>
    </section>
    {{-- End Slider --}}



    {{-- Services --}}
    @include('frontend.home.sections.services')
    {{-- End Services --}}



    {{-- About --}}
    @include('frontend.home.sections.about')
    {{-- End About --}}

    {{-- why Choose Us --}}
    @include('frontend.home.sections.whyChooseUs')
    {{-- End why Choose Us --}}


    {{-- Fund Rasing --}}
    @include('frontend.home.sections.recentProject')
    {{-- End Fund Rasing --}}

    {{-- Facts Counter --}}
    @include('frontend.home.sections.factCounter')
    {{-- End Facts Counter --}}


    {{-- Clients --}}
    @include('frontend.home.sections.clients')
    {{-- End Clients --}}

    {{-- Call Out --}}
    <section class="call-out">
        <div class="container">
            <div class="float_left">
                <h4>Join Our Mission to create a greener and more sustainable future for our beautiful country</h4>
            </div>
            <div class="float_right">
                <a href="{{ route('login') }}" class="thm-btn style-3">Get Involeved</a>
            </div>

        </div>
    </section>
    {{-- End Call Out --}}
@endsection
