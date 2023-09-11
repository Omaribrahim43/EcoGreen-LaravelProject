@extends('frontend.layouts.master_popup')
 @section('content')
    {{-- ....................service form.............................. --}}

{{-- <div id="donate-popup" class="donate-popup">
    <div class="close-donate theme-btn"><span class="fa fa-close"></span></div>
    <div class="popup-inner"> --}}

        <div class="container">
            <div class="donate-form-area">
                <div class="section-title center">
                    <h2>Donation Information</h2>
                </div> 


                <form name="contact_form" class="default-form"
                    action="{{ route('sorte.service', 1) }}" method="post" novalidate="novalidate">
                    @csrf
                    <div class="row clearfix">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <p>Name</p>
                                <input type="text" class="form-control" required="" aria-required="true"
                                    value="{{ $user->name }} " readonly> </div>
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
                                    <input type="text" class="form-control"
                                    value="{{ $user->phone }}" readonly>

                                </div>
                            </div>

                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <fieldset>
                                    <legend>Choose the Donation Service:</legend>
                                        <label>
                                            <input type="radio" name="choosen_shift" value="Transportation" required>
                                            Transportation
                                        </label>
                                        <label>
                                            <input type="radio" name="choosen_shift" value="Planting" required>
                                            Planting
                                        </label>
                                        <label>
                                            <input type="radio" name="choosen_shift" value="Organizing" required>
                                            Organizing
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



            {{-- </div>
        </div>
    </div> --}}

@endsection
