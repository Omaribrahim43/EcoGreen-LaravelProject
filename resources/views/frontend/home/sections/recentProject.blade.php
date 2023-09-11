        <section class="urgent-cause2 sec-padd">
            <div class="container">
                <div class="section-title">
                    <h1 class="thm-color">Our Recent Projects </h1>

                    <p> Discover our recent initiatives that are making a positive impact on the environment and our
                        community</p>
                </div>
                <div class="cause-carousel">

                    @foreach ($project as $item)
                        <div class="item clearfix">
                            <figure class="img-box">
                                <a> <img src="{{ asset($item->image) }}" style="height:350 px; width:350px"> </a>
                            </figure>
                            <div class="content">
                                <div class="text center">
                                    <a href="#">
                                        <h4 class="title">{{ $item->title }}</h4>
                                    </a>
                                    <p> {{ $item->short_description }}</p>
                                </div>
                                <div class="donate clearfix">
                                    <div class="donate"
                                        style="text-align: center; display:flex; justify-content:space-around"><span>
                                            Goal:
                                            {{ $item->budget }} </span>
                                        <a href="" class="thm-btn style-2">Donate Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
