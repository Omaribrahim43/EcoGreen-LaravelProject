@extends('frontend.layouts.master')

@section('content')

 

<div class="inner-banner has-base-color-overlay text-center" style="background: url(images/background/4.jpg);">
    <div class="container">
        <div class="box">
            <h1>Events Grid View</h1>
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
                    Events Grid View
                </li>
            </ul>
        </div>
      
    </div>
</div>


 {{-- start projectcared --}}
 @include('frontend.service_project.project.sections.projectcared')
 {{-- End projectcared --}}
 

 {{-- start default-event-filter --}}
 @include('frontend.service_project.singelProject.sections.default-event-filter')
 {{-- End default-event-filter --}}

 

 {{-- start feed-area --}}
 @include('frontend.service_project.singelProject.sections.feed-area')
 {{-- End feed-area --}}

@endsection



      


