{{-- <section class="event-section style-3">
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-sm-12 col-xs-12">
                

                <div class="single-event sec-padd"> --}}
                    <h3>{{$project->title}}</h3>
                    <div class="img-box">
                       @if ($project->image)
                          <img src="{{ asset($project->image) }}" alt="{{ $project->name }}" width="300">
                        @endif
                       
                    </div>
                  
{{-- 
                </div>
                    

            </div>
           
        </div>
    </div>
</section> --}}