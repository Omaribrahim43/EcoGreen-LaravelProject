@extends('frontend.layouts.master')

@section('content')
    <div class="inner-banner has-base-color-overlay text-center"
        style="background-image: url({{ asset('frontend/images/background/back.jpg') }});">
        <div class="container">
            <div class="box">
                <h1>Our Projects</h1>
            </div>
        </div>
    </div>
    <div class="breadcumb-wrapper">
        <div class="container">
            <div class="pull-left">
                <ul class="list-inline link-list">
                    <li>
                        <a href="{{ route('index') }}">Home</a>
                    </li>

                    <li>
                        All Project
                    </li>
                </ul>
            </div>
            <div class="pull-right">
                <a href="#" class="get-qoute"><i class="fa fa-arrow-circle-right"></i>Become a Volunteer</a>
            </div>
        </div>
    </div>
    @include('frontend.project.sections.projectcared')


    <section class="call-out">
        <div class="container">
            <div class="float_left">
                <h4>Join Our Mission to create a greener and more sustainable future for our beautiful country</h4>
            </div>
            <div class="float_right">
                <a href="{{ route('register') }}" class="thm-btn style-3">Get Involeved</a>
            </div>
        </div>
    </section>
@endsection
