 
@extends('frontend.layouts.master')
@section('content')




 

<div class="inner-banner has-base-color-overlay text-center" style="background: url(images/background/4.jpg);">
    <div class="container">
        <div class="box">
            <h1>Contact Us</h1>
        </div>
    </div>
</div>
<div class="breadcumb-wrapper">
    <div class="container">
        <div class="pull-left">
            <ul class="list-inline link-list">
                <li>
                    <a href="index.html">Home</a>
                </li>
                <li>
                    <a href="about.html">About Us</a>
                </li>
                
                <li>
                    Contact Us
                </li>
            </ul>
        </div>
        <div class="pull-right">
            <a href="#" class="get-qoute"><i class="fa fa-arrow-circle-right"></i>Become a Volunteer</a>
        </div>
    </div>
</div>


<!--Start contact area-->
@include('frontend.contact.sections.touchArea')

<!--End contact area-->


<!--Start contact form area-->
@include('frontend.contact.sections.contactFormArea')

<!--End contact form area-->



<section class="home-google-map">

    <div 
        class="google-map" 
        id="contact-google-map" 
        data-map-lat="40.108833" 
        data-map-lng="-74.782104" 
        data-icon-path="images/logo/map-marker.png"
        data-map-title="Chester"
        data-map-zoom="11" >

    </div>

</section>





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

 
@endsection