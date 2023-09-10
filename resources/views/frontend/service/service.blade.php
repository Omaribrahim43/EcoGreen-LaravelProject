
@extends('frontend.layouts.master')

@section('content')
<div class="inner-banner has-base-color-overlay text-center" style="background: url(images/background/4.jpg);">
    <div class="container">
        <div class="box">
            <h1>Services</h1>
        </div>
    </div>
</div>

 {{-- link for pages  --}}

<div class="breadcumb-wrapper">
    <div class="container">
        <div class="pull-left">
            <ul class="list-inline link-list">
                <li>
                    <a href="index.html">Home</a>
                </li>                
                <li>
                    Services
                </li>
            </ul>
        </div>
        <div class="pull-right">
            <a href="#" class="get-qoute"><i class="fa fa-arrow-circle-right"></i>Become a Volunteer</a>
        </div>
    </div>
</div>

  {{-- start service --}}
  @include('frontend.service.sections.default-section')
  {{-- End service --}}

@endsection




