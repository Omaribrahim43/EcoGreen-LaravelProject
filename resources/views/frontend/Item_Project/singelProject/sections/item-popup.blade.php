
@extends('frontend.layouts.master_popup')

@section('content')

{{-- <div id="donate-popup-item" class="donate-popup">
    <div class="close-donate theme-btn"><span class="fa fa-close"></span></div>
    <div class="popup-inner"> --}}



        <div class="container">
            <div class="donate-form-area">
                <div class="section-title center">
                    <h2>Donation Information</h2>
                </div>
                
                <form id="contact-form" class="default-form" action="{{ route('store.item') }}" method="post" novalidate="novalidate">
                    @csrf
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <p>Name</p>
                            <input type="text"  class="form-control"  required="" aria-required="true" value="{{$user->name}}" readonly> 
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <p>Your Email</p>
                            <input type="email" class="form-control required email"   required="" aria-required="true" value="{{$user->email}}" readonly> 
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <p>Phone</p>
                            <input type="text" class="form-control"  required=""  value="{{$user->phone}}" readonly> 
    
                        </div>
                    </div>

                            <div class="col-md-12 col-sm-12 col-xs-12">

                                <br><br>
                                <label>Choose Items for Donation:</label>
                                <br><br>


                                <div class="form-group">
                                    <input type="checkbox" name="donate_tree" value="yes">{{ $project->tree_type}}
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <input type="checkbox" name="donate_fertilizer" value="yes">{{ $project->fertilizer}}
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <input type="checkbox" name="donate_equipments" value="yes"> {{$project->equipments}}
                                </div>
                            </div>
                            <br><br>

                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <button class="thm-btn" type="submit" data-loading-text="Please wait...">submit now</button>
                                </div>
                            </div>   

                        </div>
                </form>
            </div>
        </div>



    {{-- </div>
</div> --}}
@endsection
