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
                                {{-- <img src="https://d25rq8gxcq0p71.cloudfront.net/dictionary-images/900/370c14b0-d054-441d-a6da-fe3fe3802c71.jpg" alt="" style="height:350 px; width:350px"> --}}
                            </figure>

                            <div class="content">

                                <div class="text center">
                                    <a href="#">
                                        <h4 class="title">{{ $item->name }}</h4>
                                        {{-- <h4 class="title">Save White Tiger</h4> --}}
                                    </a>

                                    <p> {{ $item->description }}</p>
                                    {{-- <p>We are dedicated to ending homelessness by delive- ring life-changing services for
                                    change the poor childrens life...</p> --}}
                                </div>
                                {{-- <div class="progress-box">
                                <div class="bar">
                                    <div class="bar-inner animated-bar" data-percent="48%">
                                        <div class="count-text">48%</div>
                                    </div>
                                </div>
                            </div> --}}
                                <div class="donate clearfix">

                                    <div class="donate float_left" style="text-align: center;"><span> Goal: {{ $item->budget }} </span></div>
                                    {{-- <div class="donate"style="text-align: center;"><span>Goal: $92000 </span></div> --}}
                                </div>

                            </div>

                        </div>
                    @endforeach




                </div>
            </div>
        </section>
