<section class="event-section style-3">
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-sm-12 col-xs-12">
                <h3>{{$project->title}}</h3>

                <div class="single-event sec-padd">
                    <div class="img-box">
                       @if ($project->image)
                          <img src="{{ asset('frontend/images/project/' . $item->image) }}" alt="{{ $item->name }}" width="300">
                        @endif
                       
                    </div>
                  

                </div>
                    

            </div>
           
        </div>
    </div>
</section>