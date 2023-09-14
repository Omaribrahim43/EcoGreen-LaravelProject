
<div class="row">
    <div class="col-md-6 col-sm-6 col-xs-12">
        <div class="event-timeline">
            <div class="section-title style-2">
                <h3>Project Timeline</h3>
            </div>
            <ul>
                {{-- <li><i class="fa fa-clock-o"></i><b>Project Time:  {{ $project->start_date->format('D M y') }}</b> at {{ $project->volunteering_hours_start->format('H')}} <br>to {{ $project->start_date->format('D M y') }}<br> at {{ $project->volunteering_hours_end->format('H')}}  </li> --}}
                <li><i class="fa fa-clock-o"></i><b> Project Start Date:</b> 
                    {{ $project->start_day }}
                </li>
                <li><i class="fa fa-clock-o"></i><b>Volunteering Hours: </b>
                    {{ $project->volunteering_hours_start }} to
                    {{ $project->start_date }} {{ $project->volunteering_hours_end }}
                </li>
                
            </ul>
        </div>
    </div>
    <div class="col-md-6 col-sm-6 col-xs-12">
        <div class="section-title style-2">
            <br><br>

            <h3>Project requiered </h3>
        </div>

        <ul class="list2">

            <li><i class="fa fa-check-circle"></i> Tree_type : {{ $project->tree_type }} 10 JOD / tree</li>
            <li><i class="fa fa-check-circle"></i> Fertilizer : {{ $project->fertilizer }} 50 JOD</li>
            <li><i class="fa fa-check-circle"></i> Equipments : {{ $project->equipments }} 50 JOD</li>
          

        </ul>
    </div>
</div>
