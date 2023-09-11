


    {{-- ........................item form................................ --}}
    <div id="donate-popup" class="donate-popup">
        <div class="close-donate theme-btn"><span class="fa fa-close"></span></div>
        <div class="popup-inner">



            <div class="container">
                <div class="donate-form-area">
                    <div class="section-title center">
                        <h2>Donation Information</h2>
                    </div>

                    <h4>How much would you like to donate:</h4>


                    <form id="contact-form" class="default-form" action="{{ route('store.item',1) }}"
                        method="post" novalidate="novalidate">
                        @csrf
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <p>Name</p>
                                <input type="text" class="form-control" required="" aria-required="true"
                                value="{{$user->name}}" readonly> 
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <p>Your Email</p>
                                <input type="email" class="form-control required email" required=""
                                    aria-required="true"
                                value="{{$user->email}}" readonly> 
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <p>Phone</p>
                                <input type="text" class="form-control" required=""
                                value="{{$user->phone}}" readonly> 

                            </div>
                        </div>

                        <div class="col-md-12 col-sm-12 col-xs-12">

                            <br><br>
                            <label>Choose Items for Donation:</label>
                            <br><br>


                            <div class="form-group">
                                <input type="checkbox" name="donate_tree" value="yes">{{ $project->tree_type }}
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <input type="checkbox" name="donate_fertilizer"
                                    value="yes">{{ $project->fertilizer }}
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <input type="checkbox" name="donate_equipments" value="yes">
                                {{ $project->equipments }}
                            </div>
                        </div>
                        <br><br>

                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <button class="thm-btn" type="submit" data-loading-text="Please wait...">submit
                                    now</button>
                            </div>
                        </div>

                </div>
                </form>
            </div>
        </div>



    </div>
</div>
        

            <div class="container">
                <div class="donate-form-area">
                    <div class="section-title center">
                        <h2>Donation Information</h2>
                    </div>


                    <form id="contact-form" name="contact_form" class="default-form" action="{{ route('sorte.service') }}"
                        method="post" novalidate="novalidate">
                        @csrf
                        <div class="row clearfix">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <p>Name</p>
                                    <input type="text" class="form-control" required="" aria-required="true"
                                        value="{{ $user->name }} " readonly>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <p>Your Email</p>
                                    <input type="email" class="form-control required email" required=""
                                        aria-required="true" value="{{ $user->email }}" readonly>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <p>Phone</p>
                                    <input type="text" class="form-control" value="{{ $user->phone }}" readonly>

                                </div>
                            </div>

                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <fieldset>
                                    <legend>Number of Participating Hours</legend>
                                    <div class="form-group">
                                        <label>
                                            <input type="radio" name="choosen_shift" value="Full_day" required> Full Day
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <label>
                                            <input type="radio" name="choosen_shift" value="Part_time" required> Part time
                                        </label>

                                </fieldset>
                            </div>

                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <button class="thm-btn" type="submit" data-loading-text="Please wait...">Submit
                                        Now</button>
                                </div>
                            </div>
                        </div>
                    </form>



                </div>
            </div>
