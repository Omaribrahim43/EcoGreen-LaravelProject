
                        <div class="text">

                            <h3>{{$project->title}}</h3>
                            <p>{{ $project->long_description }}</p>
                        </div><br><br>
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="event-timeline">
                                    <div class="section-title style-2">
                                        <h3>Project Timeline</h3>
                                    </div>
                                    <ul>
                                        {{-- <li><i class="fa fa-clock-o"></i><b>Project Time:  {{ $project->start_date->format('D M y') }}</b> at {{ $project->volunteering_hours_start->format('H')}} <br>to {{ $project->start_date->format('D M y') }}<br> at {{ $project->volunteering_hours_end->format('H')}}  </li> --}}
                                        <li><i class="fa fa-clock-o"></i><b>Project Time: {{ $project->start_date }}</b>
                                            at {{ $project->volunteering_hours_start }} <br>to
                                            {{ $project->start_date }}<br> at {{ $project->volunteering_hours_end }}
                                        </li>
                                        <li><i class="fa fa-map-marker"></i><b>Project Venue:</b>
                                            {{ $project->location }}</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="section-title style-2">
                                    <h3>Project requiered </h3>
                                </div>

                                <ul class="list2">

                                    <li><i class="fa fa-check-circle"></i> Tree_type : {{ $project->tree_type }}</li>
                                    <li><i class="fa fa-check-circle"></i> Fertilizer : {{ $project->fertilizer }}</li>
                                    <li><i class="fa fa-check-circle"></i> Equipments : {{ $project->equipments }}</li>
                                    <li class="bolod"><i class="fa fa-check-circle"></i> Total Budget :
                                        {{ $project->budget }} JOD</li>

                                </ul>
                            </div>
                        </div>


                    
