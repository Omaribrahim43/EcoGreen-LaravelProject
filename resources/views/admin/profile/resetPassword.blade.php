@extends('admin.login.master')

@section('content')
    <div id="app">
        <section class="section">
            <div class="container mt-5">
                <div class="row">
                    <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                        <div class="login-brand">
                            <img src="{{ asset('backend/assets/img/logo/logo1.png') }}" alt="logo" 
                             >
                        </div>

                        <div class="card card-primary">
                            <div class="card-header">
                                <h4>Reset Password</h4>
                            </div>

                            <div class="card-body">
                                <p class="text-muted">We will send a link to reset your password</p>


                                <form method="POST" action="{{ route('admin.profile.resetpassword') }}">

                                    @if (session('fail'))
                                        <div class="alert alert-danger">
                                            {{ session('fail') }}
                                        </div>
                                    @endif

                                    @if (session('success'))
                                        <div class="alert alert-success">
                                            {{ session('success') }}
                                        </div>
                                    @endif
                                    
                                    @csrf
                                    <div class="form-group">
                                        <label for="old_password">Old Password</label>
                                        <input id="old_password" type="password" class="form-control" name="old_password"
                                            tabindex="1" required autofocus>
                                            <span class="text-danger">
                                                @error('old_password')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                    </div>

                                    <div class="form-group">
                                        <label for="password">New Password</label>
                                        <input id="password" type="password" class="form-control pwstrength"
                                            data-indicator="pwindicator" name="new_password" tabindex="2" required>
                                            @error('new_password')
                                                    {{ $message }}
                                                @enderror

                                        <div id="pwindicator" class="pwindicator">
                                            <div class="bar"></div>
                                            <div class="label"></div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="password-confirm">Confirm Password</label>
                                        <input id="password-confirm" type="password" class="form-control"
                                            name="new_password" tabindex="2" required>
                                            @error('new_password')
                                                    {{ $message }}
                                                @enderror
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                            Reset Password
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="simple-footer">
                            Copyright &copy; Stisla 2018
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
