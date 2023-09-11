<section class="theme_menu stricky">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="main-logo">
                    <a href="index.html"><img src="{{ asset('frontend/images/logo/green_hands_logo-removebg-preview.png') }}" alt="" style="height: 62px ; width:97px"></a>
                </div>
            </div>
            <div class="col-md-9 menu-column">

                <nav class="menuzord" id="main_menu">
                    <ul class="menuzord-menu">
                        <li><a href="{{ route('index') }}">Home</a></li>
                        <li><a href="{{ route('about') }}">About</a></li>
                        <li><a href="#">Services</a>
                            <ul class="dropdown">
                                <li><a href="{{ route('All.projects') }}">All Project</a></li>
                               
                                <li><a href="{{ route('All.projects', 1) }}">Donation Project</a></li>
                                <li><a href="{{ route('All.projects', 2) }}">Item Project</a></li>
                                <li><a href="{{ route('All.projects', 3) }}">Service Project</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Pages</a>
                            <ul class="dropdown">
                                <li><a href="{{ route('testimonial') }}">Testimonials</a></li>
                                <li><a href="{{ route('about') }}">About Us</a></li>
                            </ul>
                        </li>
                        <li><a href="{{ route('show.contact') }}">contact</a></li>
                        @if (Route::has('login'))
                            @auth
                                <li><a>My Account</a>
                                    <ul class="dropdown">
                                        <li><a href="{{ route('profile2.profile.index') }}">Profile</a></li>
                                        <form method="POST" action="{{ route('logout') }}" x-data>
                                            @csrf
                                            <li><a href="{{ route('logout') }}">Logout</a></li>
                                        </form>
                                    </ul>
                                </li>
                            @else
                                <li><a href="{{ route('login') }}" class="">Login</a></li>
                                @if (Route::has('register'))
                                    <li><a href="{{ route('register') }}" class="">Register</a></li>
                                @endif
                            @endauth
                        @endif
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</section>
