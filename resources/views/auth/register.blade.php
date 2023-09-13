@extends('frontend.layouts.master')

@section('content')
    <div class="inner-banner has-base-color-overlay text-center"
        style="background: url({{ asset('frontend/images/background/4.jpg') }});">
        <div class="container">
            <div class="box">
                <h1>Register</h1>
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
                        Register
                    </li>
                </ul>
            </div>
          
        </div>
    </div>



    <section class="register-section sec-padd-top">
        <div class="container">
            <div class="row" style="display: flex; justify-content:center">

                <!--Form Column-->
                <div class="form-column column col-lg-6 col-md-8 col-sm-12 col-xs-12">

                    <div class="section-title style-2">
                        <h3>Register Now</h3>
                    </div>

                    <!--Login Form-->
                    <div class="styled-form login-form">
                        <form method="post" action="{{ route('register') }}">
                            @csrf
                            <div class="form-group">
                                <span class="adon-icon"><span class="fa fa-envelope-o"></span></span>
                                <input type="text" name="name" placeholder="Enter Name">
                            </div>
                            <div class="form-group">
                                <span class="adon-icon"><span class="fa fa-envelope-o"></span></span>
                                <input type="email" name="email" placeholder="Enter Email">
                            </div>
                            <div class="form-group">
                                <span class="adon-icon"><span class="fa fa-unlock-alt"></span></span>
                                <input type="password" name="password" required placeholder="Enter Password">
                            </div>
                            <div class="form-group">
                                <span class="adon-icon"><span class="fa fa-unlock-alt"></span></span>
                                <input type="password" name="password_confirmation" required placeholder="Confirm Password">
                            </div>
                            <div class="clearfix">
                                <div class="form-group pull-left">
                                    <button type="submit" class="thm-btn thm-tran-bg">Register now</button>
                                </div>
                                <div class="form-group social-links-two padd-top-5 pull-right">
                                    Or login with <a href="#" class="img-circle facebook"><span
                                            class="fa fa-facebook-f"></span></a>
                                    <a href="{{ url('authorized/google') }}" class="img-circle google-plus"><span
                                            class="fa fa-google-plus"></span></a>
                                </div>
                            </div>
                            <a href="{{ route('login') }}" style="text-decoration: underline"> Already Have An Account!</a></div> <br>
                            {{-- <div class="clearfix">
                                <div class="pull-left">
                                    <input type="checkbox" id="remember-me"><label for="remember-me">&nbsp; Remember
                                        Me</label>
                                </div>
                            </div> --}}

                        </form>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
