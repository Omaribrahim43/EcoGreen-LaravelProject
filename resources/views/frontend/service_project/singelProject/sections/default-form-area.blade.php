<section class="event-section style-3">
    <div class="container">
        <div class="row">
            
            <div class="col-md-3 col-sm-12 col-xs-12 mt-20">
                <div class="blog-sidebar sec-padd">
                    <br><br>
                    <br><br>
                    <div class="default-form-area ">

                        <form id="contact-form" name="contact_form" class="default-form" action="{{ route('form.service') }}" method="post" novalidate="novalidate">
                            @csrf
                            
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <button class="thm-btn" type="submit" data-loading-text="Please wait...">Submit Now</button>
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

<div class="form-group">
    <label for="email"> Email </label>
    <input type="email" class="form-control" placeholder="Enter Your Email" name="email" value="{{old('email')}}"> 
    <span class="text-danger">@error('email') {{$message}}@enderror</span></div>





