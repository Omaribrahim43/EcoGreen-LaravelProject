@extends('frontend.layouts.master')

@section('content')
    {{-- Slider --}}
    <section class="rev_slider_wrapper">
        <div id="slider1" class="rev_slider" data-version="5.0">
            <ul>

                <li data-transition="fade">
                    <img src="images/slider/1.jpg" alt="" width="1920" height="888" data-bgposition="top center"
                        data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="1">

                    <div class="tp-caption  tp-resizeme" data-x="left" data-hoffset="15" data-y="top" data-voffset="260"
                        data-transform_idle="o:1;"
                        data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;"
                        data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                        data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" data-splitin="none" data-splitout="none"
                        data-responsive_offset="on" data-start="700">
                        <div class="slide-content-box">
                            <h1>Let’s<span>... go With ECO green</span></h1>
                            <h3>to get our global clean</h3>
                            <p>Great explorer of the truth, the master-builder of human happiness <br>not know how
                                to pursue pleasure rationally... </p>
                        </div>
                    </div>
                    <div class="tp-caption tp-resizeme" data-x="left" data-hoffset="15" data-y="top" data-voffset="480"
                        data-transform_idle="o:1;"
                        data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                        data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-splitin="none"
                        data-splitout="none" data-responsive_offset="on" data-start="2300">
                        <div class="slide-content-box">
                            <div class="button">
                                <a class="thm-btn" href="#">read more</a>
                            </div>
                    </div>
                    <div class="tp-caption tp-resizeme" data-x="left" data-hoffset="200" data-y="top" data-voffset="480"
                        data-transform_idle="o:1;"
                        data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                        data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-splitin="none"
                        data-splitout="none" data-responsive_offset="on" data-start="2600">
                        <div class="slide-content-box">
                            <div class="button">
                                <a class="thm-btn style-3" href="cause.html">Get Involved</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li data-transition="fade">
                    <img src="images/slider/2.jpg" alt="" width="1920" height="580" data-bgposition="top center"
                        data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="1">

                    <div class="tp-caption  tp-resizeme" data-x="center" data-hoffset="" data-y="top" data-voffset="275"
                        data-transform_idle="o:1;"
                        data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;"
                        data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                        data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" data-splitin="none" data-splitout="none"
                        data-responsive_offset="on" data-start="700">
                        <div class="slide-content-box center">
                            <h2>Protect the Wild animals</h2>
                            <p>Great explorer of the truth, the master-builder of human happiness <br>not know how
                                to pursue pleasure rationally... </p>
                        </div>
                    </div>
                    <div class="tp-caption tp-resizeme" data-x="center" data-hoffset="-90" data-y="top" data-voffset="450"
                        data-transform_idle="o:1;"
                        data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                        data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-splitin="none"
                        data-splitout="none" data-responsive_offset="on" data-start="2300">
                        <div class="slide-content-box">
                            <div class="button">
                                <a class="thm-btn" href="#">read more</a>
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
                                <a class="thm-btn style-3" href="#">get involved</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li data-transition="fade">
                    <img src="images/slider/3.jpg" alt="" width="1920" height="888"
                        data-bgposition="top center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="1">

                    <div class="tp-caption  tp-resizeme" data-x="left" data-hoffset="500" data-y="top"
                        data-voffset="260" data-transform_idle="o:1;"
                        data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;"
                        data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                        data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" data-splitin="none" data-splitout="none"
                        data-responsive_offset="on" data-start="700">
                        <div class="slide-content-box">
                            <h1>Save<span>...World By Planting</span></h1>
                            <h3>trees Your Surrounding</h3>
                            <p>Great explorer of the truth, the master-builder of human happiness <br>not know how
                                to pursue pleasure rationally... </p>
                        </div>
                    </div>
                    <div class="tp-caption tp-resizeme" data-x="left" data-hoffset="500" data-y="top"
                        data-voffset="480" data-transform_idle="o:1;"
                        data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                        data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-splitin="none"
                        data-splitout="none" data-responsive_offset="on" data-start="2300">
                        <div class="slide-content-box">
                            <div class="button">
                                <a class="thm-btn" href="#">read more</a>
                            </div>
                        </div>
                    </div>
                    <div class="tp-caption tp-resizeme" data-x="left" data-hoffset="700" data-y="top"
                        data-voffset="480" data-transform_idle="o:1;"
                        data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                        data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-splitin="none"
                        data-splitout="none" data-responsive_offset="on" data-start="2600">
                        <div class="slide-content-box">
                            <div class="button">
                                <a class="thm-btn style-3" href="cause.html">Get Involved</a>
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

    {{-- Facts Counter --}}
    @include('frontend.home.sections.factCounter')
    {{-- End Facts Counter --}}

    {{-- About --}}
    @include('frontend.home.sections.about')
    {{-- End About --}}

    {{-- why Choose Us --}}
    @include('frontend.home.sections.whyChooseUs')
    {{-- End why Choose Us --}}

    {{-- Gallary --}}
    @include('frontend.home.sections.gallary')
    {{-- End Gallary --}}

    {{-- Fund Rasing --}}
    @include('frontend.home.sections.fundRasing')
    {{-- End Fund Rasing --}}

    {{-- Events --}}
    @include('frontend.home.sections.events')
    {{-- End Events --}}

    {{-- Blog --}}
    @include('frontend.home.sections.blog')
    {{-- End Blog --}}

    {{-- Clients --}}
    @include('frontend.home.sections.clients')
    {{-- End Clients --}}

    {{-- Call Out --}}
    <section class="call-out">
        <div class="container">
            <div class="float_left">
                <h4>Join Our Mission to Improve a Child's Feature, Pet’s Life and Our Planet.</h4>
            </div>
            <div class="float_right">
                <a href="#" class="thm-btn style-3">Get Involeved</a>
            </div>

        </div>
    </section>
    {{-- End Call Out --}}
@endsection
