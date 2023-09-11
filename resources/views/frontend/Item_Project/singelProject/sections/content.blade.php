<section class="event-section style-3">
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-sm-12 col-xs-12">
                <div class="single-event sec-padd">
        
                   
                    <div class="content">
                            
                        <div class="text">
                           
                            {{-- <h3>{{$project->title}}</h3> --}}
                            <p>{{$project->long_description}}</p>
                        </div><br><br>
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="event-timeline">
                                    <div class="section-title style-2">
                                        <h3>Event Timeline</h3>
                                    </div>
                                    <ul>
                                        <li><i class="fa fa-clock-o"></i><b>Event Time:  {{ $project->start_date}}</b>on {{ $project->volunteering_hours_start}} <br>to {{ $project->start }}<br> on {{ $project->volunteering_hours_end}}  </li>
                                        <li><i class="fa fa-map-marker"></i><b>Event Venue:</b> {{$project->location}}</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="section-title style-2">
                                    <h3>Project requiered </h3>
                                </div>
                                <div class="text">
                                </div>
                                <ul class="list2">
                                    <li><i class="fa fa-check-circle"></i>Tree_type : {{$project->tree_type}}</li>
                                    <li><i class="fa fa-check-circle"></i>Fertilizer : {{$project->fertilizer}}</li>
                                    <li><i class="fa fa-check-circle"></i>Equipments : {{$project->equipments}}</li>
                                </ul>
                            </div>      
                        </div><br>

                      <br><br>
           

                    </div>
               

                </div>
                    

            </div>
            
        </div>
    </div>
</section>