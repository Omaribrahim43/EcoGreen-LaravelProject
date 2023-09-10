
<section class="default-section sec-padd">
    <div class="container"> 
        <div class="row">

            {{-- <div class="col-lg-3 col-md-4 col-sm-12">
                <div class="default-sidebar">
                    <ul class="service-catergory">
                        <li><a href="recycling.html">Recycling</a></li>
                        <li><a href="Eco-System.html">Eco System</a></li>
                        <li><a href="Save-Water.html">Save Water</a></li>
                        <li><a href="Save-Animals.html">Save Animals</a></li>
                        <li><a href="Organic-Living.html">Organic Living</a></li>
                        <li><a href="Good-Nature.html">Good Nature</a></li>
                    </ul>
                    <div class="link"><a href="#" class="thm-btn style-2">Become a Volunteer</a></div>
                </div>
            </div> --}}

            <div class="col-lg-9 col-md-8 col-sm-12">
                <div class="service">
                    <div class="row">

                        {{-- route missing --}}

                        @foreach($category as $item){
                       
                        <div class="col-md-4 col-sm-6 col-x-12">
                            <div class="service-item center">
                                <div class="icon-box">
                                    @if ($item->image)
                                         <img src="{{ asset('frontend/images/service/' . $item->image) }}" alt="{{ $item->name }}" width="300">
                                     @endif

                                </div>
                                <h4>{{$item->name}}</h4>
                                <p>{{$item->description}}</p>

                            </div>
                        </div>
                            }
                     
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>



