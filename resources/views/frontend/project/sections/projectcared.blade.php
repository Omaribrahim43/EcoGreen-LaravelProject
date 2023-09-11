<section class="eventlist">
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-sm-12 col-xs-12">
                <div class="outer-box sec-padd event-style2">
                    @foreach ($project as $item)
                       

                        <div class="item style-1 clearfix">
                            <div class="img-column float_left">
                                <figure class="img-holder">
                                    @if ($item->image)
                                        <img src="{{ asset($item->image) }}"
                                            alt="{{ $item->name }}" style="height: 200px; width:300px;">
                                    @endif
                                    {{-- <div class="date"><span>{{ $item->start_day }}<br>{{ $item->start_date }}
                                        </span></div> --}}
                                </figure>
                            </div>
                            <div class="text-column float_left">
                                <div class="lower-content">



                                    <a href="{{ route('show.Donation', ['id' => $item->id]) }}">
                                        <h4>{{ $item->title }}</h4>
                                    </a>

                                    <div class="text">
                                        <p>{{ $item->short_description }}
                                        </p>
                                    </div>
                                </div>
                                <ul class="post-meta list_inline">
                                    <li><i class="fa fa-clock-o"></i>Started On: {{ $item->start_day }}</li>
                                    |&nbsp;&nbsp;&nbsp;
                                    <li><i class="fa fa-map-marker"></i> {{ $item->location }}</li>
                                </ul>
                            </div>
                        </div>
                    @endforeach




                </div>
            </div>




        </div>
    </div>
</section>
