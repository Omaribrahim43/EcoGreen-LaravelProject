<section class="theme_menu stricky">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="main-logo">
                    <a href="index.html"><img src="{{ asset('frontend/images/logo/logo.png') }}" alt=""></a>
                </div>
            </div>
            <div class="col-md-9 menu-column">

                <nav class="menuzord" id="main_menu">
                    <ul class="menuzord-menu">
                        <li><a href="index.html">Home</a></li>

                        <li><a href="service.html">Service</a>
                            <ul class="dropdown">
                                <li><a href="service.html">All Services</a></li>
                                <li><a href="recycling.html">Recycling</a></li>
                                <li><a href="Eco-System.html">Eco System</a></li>
                                <li><a href="Save-Water.html">Save Water</a></li>
                                <li><a href="Save-Animals.html">Save Animals</a></li>
                                <li><a href="Organic-Living.html">Organic Living</a></li>
                                <li><a href="Good-Nature.html">Good Nature</a></li>
                            </ul>
                        </li>

                        <li><a href="#">Pages</a>
                            <ul class="dropdown">
                                <li><a href="about.html">About Us</a></li>
                                <li><a href="Campaign-Grid-View.html">Campaign Grid View</a></li>
                                <li><a href="Campaign-List-View.html">Campaign List View</a></li>
                                <li><a href="Events.html">Events</a></li>
                                <li><a href="testimonial.html">Testimonials</a></li>
                                <li><a href="faq.html">FAQ’s</a></li>
                                <li><a href="error.html">404 Page</a></li>
                            </ul>
                        </li>

                        <li><a href="blog-1.html">blog</a>
                            <ul class="dropdown">
                                <li><a href="blog-1.html">Blog Grid View</a></li>
                                <li><a href="blog-large.html">Blog With Sidebar</a></li>
                                <li><a href="blog-details.html">Single Post</a></li>
                            </ul>
                        </li>

                        <li><a href="#">Shop</a>
                            <ul class="dropdown">
                                <li><a href="shop.html">Shop Products</a></li>
                                <li><a href="shop-single.html">Single Shop</a></li>
                                <li><a href="shop-cart.html">Shopping Cart</a></li>
                                <li><a href="checkout.html">Checkout</a></li>
                                <li><a href="account.html">My Account</a></li>
                            </ul>
                        </li>

                        <li><a href="contact.html">contact</a></li>


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
            <div class="right-column">
                <div class="right-area">

                </div>

            </div>


        </div>


    </div>
</section>
