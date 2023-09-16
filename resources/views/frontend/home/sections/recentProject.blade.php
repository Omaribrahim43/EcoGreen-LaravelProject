<section class="urgent-cause2 sec-padd">
    <div class="container">
        <div class="section-title">
            <h1 class="thm-color">Our Recent Projects</h1>
            <p>Discover our recent initiatives that are making a positive impact on the environment and our community
            </p>
        </div>
        <div class="cause-carousel">
            @foreach ($project as $item)
                <div class="item clearfix">
                    <figure class="img-box">
                        <a> <img src="{{ asset($item->image) }}" style="height: 220px; width:650px;"></a>
                        @if (isset($projectProgress[$item->id]))
                                <div class="progress-bar"
                                    style="width: {{ $projectProgress[$item->id]['progress'] }}%;background-color:#8DC63F">
                                    {{ $projectProgress[$item->id]['progress'] }}%
                                </div>
                        @endif
                        <div class="overlay">
                            <div class="inner-box">
                                <div class="content-box">
                                    @if ($item->category->id == 1)
                                        <a href="{{ route('show.Donation', ['id' => $item->id]) }}">
                                            <button class="thm-btn style-2 donate-box-btn">
                                                donate now</button>
                                        </a>
                                    @elseif ($item->category->id == 2)
                                        <a href="{{ route('show.item', ['id' => $item->id]) }}">
                                            <button class="thm-btn style-2 donate-box-btn">
                                                donate now</button>
                                        </a>
                                    @elseif ($item->category->id == 3)
                                        <a href="{{ route('show.service', ['id' => $item->id]) }}">
                                            <button class="thm-btn style-2 donate-box-btn">
                                                donate now</button>
                                        </a>
                                    @endif
                                   
                                </div>
                            </div>
                        </div>
                    </figure>
                    <div class="content">
                        <div class="text center">
                            <a href="#">
                                <h4 class="title">
                                    
                                    @if ($item->category->id == 1)
                                        <a href="{{ route('show.Donation', ['id' => $item->id]) }}">
                                            <h4>{{ $item->title }}</h4>
                                        </a>
                                    @elseif ($item->category->id == 2)
                                        <a href="{{ route('show.item', ['id' => $item->id]) }}">
                                            <h4>{{ $item->title }}</h4>
                                        </a>
                                    @elseif ($item->category->id == 3)
                                        <a href="{{ route('show.service', ['id' => $item->id]) }}">
                                            <h4>{{ $item->title }}</h4>
                                        </a>
                                    @endif
                                </h4>
                            </a>
                            <p >
                                    
                                <?php
                                $shortDescription = strip_tags($item->short_description);
                                $limit = 132; // Adjust this to your desired character limit
                            
                                if (strlen($shortDescription) > $limit) {
                                    $shortDescription = substr($shortDescription, 0, $limit) . '...';
                                }
                                ?>
                            
                                {{ $shortDescription }}

                            </p>
                            {{-- <p> {{ $item->short_description }}</p> --}}
                          
                        </div>
                        <div class="donate clearfix">
                            <div class="donate" style="text-align: center; display:flex; justify-content:space-around">
                                <div class="donate float_left " style="margin-left: 10px"> <span> {{ optional($item->category)->name }}</span> </div>
                                    

                                @if ($item->category->id == 1)
                                    <a href="{{ route('show.Donation', ['id' => $item->id]) }}">
                                        <button class="thm-btn style-2 donate-box-btn">
                                            donate now</button>
                                    </a>
                                @elseif ($item->category->id == 2)
                                    <a href="{{ route('show.item', ['id' => $item->id]) }}">
                                        <button class="thm-btn style-2 donate-box-btn">
                                            donate now</button>
                                    </a>
                                @elseif ($item->category->id == 3)
                                    <a href="{{ route('show.service', ['id' => $item->id]) }}">
                                        <button class="thm-btn style-2 donate-box-btn">
                                            donate now</button>
                                    </a>
                                @endif
                            </div>
                        </div>
                        {{-- Add the progress bar here --}}
                        {{-- <h1>Project Progress</h1> --}}

                    </div>
                </div>
            @endforeach
        </div>
    </div>


</section>