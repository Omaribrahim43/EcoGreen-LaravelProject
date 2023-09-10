
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
                    <a href="index.html">Home</a>
                </li>
                <li>
                    <a href="event-1.html">event</a>
                </li>
                
                <li>
                    Project Details
                </li>
            </ul>
        </div>
       
    </div>
</div>

    {{-- start img-box --}}
    @include('frontend.Item_Project.singelProject.sections.img-box')
    {{-- End img-box --}}

    {{-- start content --}}
    @include('frontend.Item_Project.singelProject.sections.content')
    {{-- End content --}}

    {{-- start share clearfix --}}
    @include('frontend.Item_Project.singelProject.sections.share clearfix')
    {{-- End share clearfix --}}



    {{-- start default-event-filter --}}
    @include('frontend.Item_Project.singelProject.sections.event-filter')
    {{-- End default-event-filter --}}

 
    {{-- start feed-area --}}
    @include('frontend.Item_Project.singelProject.sections.feed-area')
    {{-- End feed-area --}}

    {{-- start default-form-area --}}
    @include('frontend.Item_Project.singelProject.sections.default-form-area')
    {{-- End default-form-area --}}
    
    {{-- start popup --}}
    @include('frontend.Item_Project.singelProject.sections.popup')
    {{-- End popup --}}
    




@endsection