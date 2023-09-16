
<div class="row">
    <div class="col-md-6 col-sm-6 col-xs-12">
        <div class="event-timeline">
            <div class="section-title style-2">
                <h3>Project Timeline</h3>
            </div>
            <ul>
                <li><i class="fa fa-clock-o"></i><b> Project Start Date:</b> 
                    {{ $project->volunteering_days }}
                </li>
                <li><i class="fa fa-clock-o"></i><b>Volunteering Hours: </b>
                    {{ $project->volunteering_hours_start }} to
                    {{ $project->volunteering_hours_end }}
                </li>
                
            </ul>
        </div>
    </div>
    <div class="col-md-6 col-sm-6 col-xs-12">
        <div class="section-title style-2">
            <br><br>
            <h3>Project required</h3>
        </div>

        <ul class="list2">

            <li><i class="fa fa-check-circle"></i> <b style="color: black; font-weight: bold;"> Tree_type :</b> {{ $project->tree_type }}</li>
            <li><i class="fa fa-check-circle"></i><b style="color: black; font-weight: bold;"> Fertilizer :</b> {{ $project->fertilizer }}</li>
            <li><i class="fa fa-check-circle"></i><b style="color: black; font-weight: bold;"> Equipments :</b> {{ $project->equipments }}</li>
            <li><i class="fa fa-check-circle"></i><b style="color: black; font-weight: bold;"> Volunteering_number :</b> {{ $project->volunteering_number }}</li>
          

        </ul>
    </div>
</div>
