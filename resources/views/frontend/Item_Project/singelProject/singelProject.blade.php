@extends('frontend.layouts.master')

@section('content')


<div class="inner-banner has-base-color-overlay text-center" style="background: url(images/background/4.jpg);">
    <div class="container">
        <div class="box">
            <h1> Project Details </h1>
        </div>
    </div>
</div>
<div class="breadcumb-wrapper">
    <div class="container">
        <div class="pull-left">
            <ul class="list-inline link-list">
                <li>
                    <a href="{{route('index')}}">Home</a>
                </li>
                <li>
                    <a href="{{route('All.projects',2)}}"> Item Projects </a>
                </li>
                <li>
                    Single Item Project
                </li>
            </ul>
        </div>
       
    </div>
</div>

    <section class="event-section style-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="single-event sec-padd">
                        @include('frontend.Item_Project.singelProject.sections.img-box')


                        <div class="content">
                            @include('frontend.Item_Project.singelProject.sections.content')

                        
                            <br>
                            <br><br>
                            <div class="section-title style-2">
                                <h3>Our Sponsors</h3>
                            </div>
                            <ul class="brand-carousel2">
                                <li><a href="#"><img src="{{asset('frontend/images/partners/logo.png')}}" alt="Awesome Image" style="width: 60px"></a></li>
                                <li><a href="#"><img src="{{asset('frontend/images/partners/farm.png')}}" alt="Awesome Image"></a></li>
                                <li><a href="#"><img src="{{asset('frontend/images/partners/env.png')}}" alt="Awesome Image">
                                </a></li>
                                <li><a href="#"><img src="{{asset('frontend/images/partners/work.png')}}" alt="Awesome Image" style="width: 90px"></a></li>
                                <li><a href="#"><img src="{{asset('frontend/images/partners/irbid.png')}}" alt="Awesome Image"></a></li>
                            </ul>
                        </div>
                        <div class="share clearfix">
                          
                            <div class="float_right">
                                <a href="{{route('open.Sform')}}" >
                                <button class="thm-btn donate-box-btn">Donate Now</button>
                            </a>
                            </div>




                        </div>
                   

                </div>
            
            </div>
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