

                    <!--Login Form-->
                    <div class="styled-form login-form">
                        <form method="put" action="{{ route('profile2.profile.index') }}">
                            @csrf
                            <div class="form-group">
                                <span class="adon-icon"><span class="fa fa-envelope-o"></span></span>
                                <input type="text" name="name" placeholder="Enter Name">
                            </div>
                            <div class="form-group">
                                <span class="adon-icon"><span class="fa fa-envelope-o"></span></span>
                                <input type="email" name="email" placeholder="Enter Email">
                            </div>
                            {{-- <div class="form-group">
                                <span class="adon-icon"><span class="fa fa-unlock-alt"></span></span>
                                <input type="password" name="password" required placeholder="Enter Password">
                            </div>
                            <div class="form-group">
                                <span class="adon-icon"><span class="fa fa-unlock-alt"></span></span>
                                <input type="password" name="password_confirmation" required placeholder="Confirm Password">
                            </div> --}}
                            <div class="clearfix">
                                <div class="form-group pull-left">
                                    <a href="{{route('profile2.profile.index')}}"><button type="submit" class="thm-btn thm-tran-bg">login now</button></a>
                                </div>
                                <div class="form-group social-links-two padd-top-5 pull-right">
                                    Or login with <a href="#" class="img-circle facebook"><span
                                            class="fa fa-facebook-f"></span></a>
                                    <a href="{{ url('authorized/google') }}" class="img-circle google-plus"><span
                                            class="fa fa-google-plus"></span></a>
                                </div>
                            </div>

                            <div class="clearfix">
                                <div class="pull-left">
                                    <input type="checkbox" id="remember-me"><label for="remember-me">&nbsp; Remember
                                        Me</label>
                                </div>
                            </div>

                        </form>

