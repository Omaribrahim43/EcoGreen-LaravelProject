@extends('frontend.layouts.master')
@section('content')
<div class="inner-banner has-base-color-overlay text-center" style="background-image: url({{ asset('frontend/images/background/back.jpg') }});">
    <div class="container">
            <div class="box">
                <h1> Project Detailes </h1>
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
                        <a href="event-1.html">Project</a>
                    </li>

                    <li>
                        Project Detailes
                    </li>
                </ul>
            </div>
        </div>
    </div>

    {{-- start img-box --}}
    @include('frontend.singelProject.sections.img-box')
    {{-- End img-box --}}

    {{-- start content --}}
    @include('frontend.singelProject.sections.content')
    {{-- End content --}}


    {{-- start section-title --}}
    @include('frontend.singelProject.sections.section-title')
    {{-- End section-title --}}


    {{-- start default-event-filter --}}
    @include('frontend.singelProject.sections.default-event-filter')
    {{-- End default-event-filter --}}


    {{-- start feed-area --}}
    @include('frontend.singelProject.sections.feed-area')
    {{-- End feed-area --}}

    {{-- start default-form-area --}}
    @include('frontend.singelProject.sections.default-form-area')
    {{-- End default-form-area --}}

    {{-- start popup.blade --}}
    @include('frontend.singelProject.sections.popup.blade')
    {{-- End popup.blade --}}
@endsection
