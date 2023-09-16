<section class="service sec-padd3" id="services">
    <div class="container">
      
        <br>
        <div class="section-title center" >
            <h1 > <span class="thm-color" > Our Services </span>   </h1>
        </div>
      
                    <div class="container">
                        <div class="row">
                            @foreach ($categories as $item)
                           
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="service-item text-center">
                                        
                                        <div class="image">
                                            <a href="{{route('All.projects',$item->id)}}">
                                           
                                                <img src="{{ asset($item->image) }}" style="height: 150px; width: 150px;">
                                                {{-- <img src="frontend/images/service/item.jpg" style="height:150 px; width:150px"> --}}

                                        </a>
                                        </div>
                                       <br>
                                        

                                        <h3>{{ $item->name }}</h3> <br> 
                                     {{-- </a> --}}
                                        {{-- <p>{{ $item->description }}</p> --}}
                                        <p>
                                            <?php
                                            $description = strip_tags($item->description);
                                            $limit = 150; // Adjust this to your desired character limit
                                        
                                            if (strlen($description) > $limit) {
                                                $shortDescription = substr($description, 0, $limit) . '...';
                                            } else {
                                                $shortDescription = $description;
                                            }
                                            ?>
                                        
                                            {{ $shortDescription }}
                                        </p>
                                        <br>

                                        <a href="{{ route('All.projects',$item->id) }}" class="thm-btn thm-tran-bg" >Donate Now</a>
                                    </div>
                                    
                                </div>
                            @endforeach
                        </div>
                    </div>
                    
    </div>
</section>

