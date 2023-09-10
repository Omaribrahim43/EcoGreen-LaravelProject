
@extends('frontend.layouts.master')

@section('content')


<div class="inner-banner has-base-color-overlay text-center" style="background: url(images/background/4.jpg);">
    <div class="container">
        <div class="box">
            <h1>Event Single</h1>
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
                    <a href="event-1.html">event</a>
                </li>
                
                <li>
                    Event Single
                </li>
            </ul>
        </div>
        <div class="pull-right">
            <a href="#" class="get-qoute"><i class="fa fa-arrow-circle-right"></i>Become a Volunteer</a>
        </div>
    </div>
</div>

    {{-- start img-box --}}
    @include('frontend.service_project.singelProject.sections.img-box')
    {{-- End img-box --}}

    {{-- start content --}}
    @include('frontend.service_project.singelProject.sections.content')
    {{-- End content --}}


    {{-- start event-filter --}}
    @include('frontend.service_project.singelProject.sections.event-filter')
    {{-- End event-filter --}}

 
    {{-- start feed-area --}}
    @include('frontend.service_project.singelProject.sections.feed-area')
    {{-- End feed-area --}}

    {{-- start default-form-area --}}
    @include('frontend.service_project.singelProject.sections.default-form-area')
    {{-- End default-form-area --}}
    
    {{-- start popup --}}
    @include('frontend.service_project.singelProject.sections.popup')
    {{-- End popup --}}
    




@endsection