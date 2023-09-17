@extends('frontend.layouts.master_popup')
 @section('content')
 

 <div class="container">
    <div class="donate-form-area">
        <div class="section-title center">
            <h2>Donation Information</h2>
        </div>

        <h4>How much would you like to donate:</h4>

        <form action="{{ route('sorte.service') }}" class="donate-form" method="post" novalidate="novalidate">
            @csrf
      
           

            <h3>Donor Information</h3>

            <div class="form-bg">
                <div class="row clearfix">

                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <p>Name</p>
                            <input type="text" class="form-control" required="" aria-required="true"
                                value="{{ $user->name }}" readonly>
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
                            <input type="text" class="form-control" required=""
                                value="{{ $user->phone }}"readonly>
                        </div>
                    </div>

                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <p>Address*</p>
                            <input type="text" name="address" class="form-control" placeholder="" required=""
                                value="{{ $user->address }}" readonly>
                        </div>
                    </div>


                </div>
            </div>

            <ul class="payment-option">

                <li>
                    <h4> Choose the Donation Service:</h4>
                </li>

            </ul>
            <div class="form-check form-check-inline">
               <input type="radio" class="form-check-input" name="choosen_shift" value="Cash" required>
               <label class="form-check-label">Transportation </label>
           </div>
           
           <div class="form-check form-check-inline">
               <input type="radio" class="form-check-input" name="choosen_shift" value="PayPal" required>
               <label class="form-check-label"> Planting </label>
           </div>

           <div class="form-check form-check-inline">
               <input type="radio" class="form-check-input" name="choosen_shift" value="PayPal" required>
               <label class="form-check-label"> Organizing </label>
           </div>
           
            <div class="center">

             

                <button class="thm-btn sbmt-btn" type="submit">Donate Now</button>
            </div>
        </form>
    </div>
</div>
  

@endsection



