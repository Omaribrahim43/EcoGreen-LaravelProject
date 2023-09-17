<section class="event-section style-3">
    <div class="container">
        <div class="row">

            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="img-box">

                    <img src="{{ asset($project->image) }}" alt="{{ $project->name }}" style="height: 450px; width:100%;">

                </div>
                <div>
                    <div class="progress-bar"
                        style="width: {{ $projectProgress[$id]['progress'] }}%;background-color:#8DC63F">
                        {{ $projectProgress[$id]['progress'] }}%
                    </div>
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
                    <p> <b style="color: black; font-weight: bold;"> Budget: {{ $project->budget }}</b></p>
                    <p> <b style="color: black; font-weight: bold;"> Location : </b>{{ $project->location }}</p>
                    <p> <span style="color: black; font-weight: bold "> Remaining Amount : </span>JD {{ $remainingAmount }}</p>


                    <br>

                    @if ($projectProgress[$id]['progress'] < 100)
                        <div class="justify-content" style="text-align: center;">
                            <a href="{{ route('open.form', ['id' => $id]) }}"
                                class="thm-btn style-2 donate-box-btn">Donate Now</a>
                        </div>
                    @else
                        <div class="justify-content" style="text-align: center; color:black;font-weight:800">
                            <p>thanks for your help </p>
                        </div>
                    @endif



                </div><br><br>

            </div>
        </div>





</section>
