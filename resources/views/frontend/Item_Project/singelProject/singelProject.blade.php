@extends('frontend.layouts.master')

@section('content')
    <div class="inner-banner has-base-color-overlay text-center"
        style="background-image: url({{ asset('frontend/images/background/back.jpg') }});">
        <div class="container">
            <div class="box">
                <h1> Item Project </h1>
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
                        <a href="{{ route('All.projects', ['id' => $project->category_id]) }}"> All Item Projects</a>
                    </li>

                    <li>
                       Item Project
                    </li>
                </ul>
            </div>
            <div class="pull-right">
                <a href="#" class="get-qoute"><i class="fa fa-arrow-circle-right"></i>Become a Volunteer</a>
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
                            <div class="share clearfix">

                                <div class="justify-content" style="text-align: center;">
                                    <a href="{{ route('open.Iform', ['id' => $id]) }}"
                                        class="thm-btn style-2 donate-box-btn">Donate Now</a>
                                </div>
    
                            </div>
                            @include('frontend.home.sections.clients')
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
