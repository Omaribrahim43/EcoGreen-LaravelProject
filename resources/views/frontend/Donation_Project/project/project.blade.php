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
                    <a href="index.html">Home</a>
                </li>
                <li>
                    <a href="#">Pages</a>
                </li>

                <li>
                    Events Grid View
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
            <h4>Join Our Mission to Improve a Child's Feature, Pet’s Life and Our Planet.</h4>
        </div>
        <div class="float_right">
            <a href="#" class="thm-btn style-3">Get Involeved</a>
        </div>

    </div>
</section>





@endsection



      


