<section class="theme_menu stricky" id="theme_menu">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="main-logo">
                    <a href="{{ route('index') }}"><img
                            src="{{ asset('frontend/images/logo/green_hands_logo-removebg-preview.png') }}" alt=""
                            style="height: 75px ; width:124px"></a>
                </div>
            </div>

            <div class="col-md-9 menu-column">

                <nav class="menuzord" id="main_menu">
                    <ul class="menuzord-menu">
                        <li><a href="{{ route('index') }}">Home</a></li>
                        <li><a href="#">Services</a>
                            <ul class="dropdown text-center"  >
                                <li><a href="{{ route('All.projects') }}" >All Project</a></li>
                               
                                <li><a href="{{ route('All.projects', 1) }}"  >Financial Donation </a></li>
                                <li><a href="{{ route('All.projects', 2) }}" >Item Donation </a></li>
                                <li><a href="{{ route('All.projects', 3) }}" >Service Donation </a></li>
                            </ul>
                        </li>
                        <li><a href="{{ route('show.contact') }}">contact</a></li>
                        <li><a href="{{ route('about') }}">About</a></li>

                     
                        
                        @if (Route::has('login'))
                            @auth
                                <li><a>My Account</a>
                                    <ul class="dropdown text-center">
                                        <li><a href="{{ route('profile2.profile.index') }}">Profile</a></li>
                                        <form method="POST" action="{{ route('logout') }}" x-data>
                                            @csrf
                                            <li><a href="{{ route('logout') }}">Logout</a></li>
                                        </form>
                                        
                                    </ul>
                                </li>
                                <li style="margin-top: -6px"> <a href="{{url('http://127.0.0.1:8000/chatify')}}" > <svg  width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 13.5997 2.37562 15.1116 3.04346 16.4525C3.22094 16.8088 3.28001 17.2161 3.17712 17.6006L2.58151 19.8267C2.32295 20.793 3.20701 21.677 4.17335 21.4185L6.39939 20.8229C6.78393 20.72 7.19121 20.7791 7.54753 20.9565C8.88837 21.6244 10.4003 22 12 22ZM8 13.25C7.58579 13.25 7.25 13.5858 7.25 14C7.25 14.4142 7.58579 14.75 8 14.75H13.5C13.9142 14.75 14.25 14.4142 14.25 14C14.25 13.5858 13.9142 13.25 13.5 13.25H8ZM7.25 10.5C7.25 10.0858 7.58579 9.75 8 9.75H16C16.4142 9.75 16.75 10.0858 16.75 10.5C16.75 10.9142 16.4142 11.25 16 11.25H8C7.58579 11.25 7.25 10.9142 7.25 10.5Z" fill="#8dc63f"  ></path> </g></svg></a> </li>
                            @else
                                <li><a id="loginbnt" class="thm-btn style-2" href="{{ route('login') }}"
                                        class="">Login</a></li>
                                @if (Route::has('register'))
                                    <li><a id="loginbnt" class="thm-btn style-2" href="{{ route('register') }}"
                                            class="">Register</a></li>
                                @endif
                            @endauth
                        @endif
                        {{-- <li><a id="loginbnt" class="thm-btn style-2" href="{{ route('open.help.form') }}"
                            class="">Quick Help</a>
                        </li> --}}
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</section>
