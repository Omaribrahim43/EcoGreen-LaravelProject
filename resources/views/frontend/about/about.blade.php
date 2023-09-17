@extends('frontend.layouts.master')

@section('content')
    <div class="inner-banner has-base-color-overlay text-center" style="background: url({{ asset('frontend/images/team/tree2.jpeg') }});">
        <div class="container">
            <div class="box">
                <h1>About Us</h1>
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
                        about us
                    </li>
                </ul>
            </div>
            <div class="pull-right">
                <a  href="{{ route('register') }}" class="get-qoute"><i class="fa fa-arrow-circle-right"></i>Become a
                    Volunteer</a>
            </div>
        </div>
    </div>

    @include('frontend.about.sections.aboutUs')

    @include('frontend.about.sections.ourTeam')

    @include('frontend.about.sections.whyChooseUs')

    {{-- @include('frontend.about.sections.reviews') --}}

    @include('frontend.about.sections.partners')

    <section class="call-out">
        <div class="container">
            <div class="float_left">
                <h4>Join Our Mission to Improve a Child's Feature, Pet’s Life and Our Planet.</h4>
            </div>
            <div class="float_right">
                <a href="{{ route('register') }}" class="thm-btn style-3">Get Involeved</a>
            </div>

        </div>
    </section>
@endsection
