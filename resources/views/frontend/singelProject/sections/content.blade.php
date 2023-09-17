<section class="event-section style-3">
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-sm-12 col-xs-12">
                <div class="single-event sec-padd">
        
                   
                    <div class="content">
                            
                        <div class="text">
                            {{-- <p>Organizer: Tom Maddy</p> --}}
                            {{-- <h3>{{$project->title}}</h3> --}}
                            <p>{{$project->description}}</p>
                        </div><br><br>
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="event-timeline">
                                    <div class="section-title style-2">
                                        <h3>Project Timeline</h3>
                                    </div>
                                    <ul>
                                        <li><i class="fa fa-clock-o"></i><b>Project Time:  {{ $project->start_date->format('D M y') }}</b>on {{ $project->volunteering_hours_start->format('H')}} <br>to {{ $project->start_date->format('D M y') }}<br> on {{ $project->volunteering_hours_end->format('H')}}  </li>
                                        <li><i class="fa fa-map-marker"></i><b>Project Venue:</b> {{$project->location}}</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="section-title style-2">
                                    <h3>Project requiered </h3>
                                </div>
                                
                                <ul class="list2">

                                    <li><i class="fa fa-check-circle"></i> Total work dayes: {{$project->volunteering_days}}</li>
                                    <li><i class="fa fa-check-circle"></i> Min unmber of volunter : {{$project->volunteering_number}}</li>
                                    <li><i class="fa fa-check-circle"></i> Tree_type : {{$project->tree_type}}</li>
                                    <li><i class="fa fa-check-circle"></i> Fertilizer : {{$project->fertilizer}}</li>
                                    <li><i class="fa fa-check-circle"></i> Equipments : {{$project->equipments}}</li>
                                </ul>
                            </div>      
                        </div><br>

                      <br><br>
                      {{--start Sponsors --}}
                      @include('frontend.singelProject.sections.Sponsors')
                      {{--start Sponsors --}}


                    </div>
               

                </div>
                    

            </div>
            
        </div>
    </div>
</section>