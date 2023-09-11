<section class="event-section style-3">
    <div class="container">
        <div class="row">

            <div class="col-md-3 col-sm-12 col-xs-12 mt-20">
                <div class="blog-sidebar sec-padd">
                    <br><br>
                    <br><br>
                    <div class="default-form-area ">

                        <form id="contact-form" name="contact_form" class="default-form"
                            action="{{ route('form.Donation' . $id) }}" method="post" novalidate="novalidate">
                            @csrf
                            <div class="row clearfix">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <p>Name</p>
                                        <input type="text" name="form_name" class="form-control" value=""
                                            placeholder="" required="" aria-required="true">
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <p>Your Email</p>
                                        <input type="email" name="form_email" class="form-control required email"
                                            value="" placeholder="" required="" aria-required="true">
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <p>Phone</p>
                                        <input type="text" name="form_phone" class="form-control" value=""
                                            placeholder="">
                                    </div>
                                </div>

                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <fieldset>
                                        <legend>Number of Participating Hours</legend>
                                        <div class="form-group">
                                            <label>
                                                <input type="radio" name="numberofparticipatehoure" value="0"
                                                    required> Full Day
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label>
                                                <input type="radio" name="numberofparticipatehoure" value="2"
                                                    required> 2 Hours
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label>
                                                <input type="radio" name="numberofparticipatehoure" value="3"
                                                    required> 3 Hours
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label>
                                                <input type="radio" name="numberofparticipatehoure" value="4"
                                                    required> 4 Hours
                                            </label>
                                        </div>
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
            </div>
        </div>
    </div>
</section>
