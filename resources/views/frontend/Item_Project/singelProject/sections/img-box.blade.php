
<section class="event-section style-3">
    <div class="container">
        <div class="row">

            <div class="col-md-6 col-sm-12 col-xs-12">



                <div class="img-box">

                    <img src="{{ asset($project->image) }}" alt="{{ $project->name }}" style="height: 450px; width:600px;">

                </div>
            </div>

            <div class="col-md-6 col-sm-12 col-xs-12">

                <br><br>
                <br>


                <div class="text">
                    <h2>{{ $project->title }}</h2>
                    <br><br>

                    <p style="font-size:17px">{{ $project->long_description }}</p>
                    <br>

                    <p> <b style="color: black; font-weight: bold;">Start date: </b>{{ $project->start_day }}</p>
                    <p> <b style="color: black; font-weight: bold;">Location : </b>{{ $project->location }}</p>

                    <br> 

                    <div style="text-align: left;">
                        <a href="{{ route('open.Iform', ['id' => $id]) }}" class="thm-btn style-2 donate-box-btn">Donate Now</a>
                    </div>


                </div><br><br>

            </div>




        </div>
    </div>
</section>
