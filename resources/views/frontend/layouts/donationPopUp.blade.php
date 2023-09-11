 @extends('frontend.layouts.master_popup')

 @section('content')
     {{-- <div id="donate-popup" class="donate-popup">
    <div class="close-donate theme-btn"><span class="fa fa-close"></span></div>
    <div class="popup-inner"> --}}

     <div class="container">
         <div class="donate-form-area">
             <div class="section-title center">
                 <h2>Donation Information</h2>
             </div>

             <h4>How much would you like to donate:</h4>

             <form action="{{ route('store.donation') }}" class="donate-form" method="post" novalidate="novalidate">
                 @csrf
                 <ul class="chicklet-list clearfix">
                     <li>
                         <input type="radio" id="donate_amount-1" name="donate_amount" />
                         <label for="donate_amount-1" value="10 JD" required="">10 JD</label>

                     </li>
                     <li>
                         <input type="radio" id="donate_amount-1" name="donate_amount" />
                         <label for="donate_amount-1" value="20 JD" required="">20 JD</label>
                     </li>
                     <li>
                         <input type="radio" id="donate_amount-2" name="donate_amount" checked="checked" />
                         <label for="donate_amount-2" value="50 JD" required=""> 50 JD</label>
                     </li>
                     <li>
                         <input type="radio" id="donate_amount-3" name="donate_amount" />
                         <label for="donate_amount-3" value="100 JD" required=""> 100 JD</label>
                     </li>
                     <li>
                         <input type="radio" id="donate_amount-4" name="donate_amount" />
                         <label for="donate_amount-4" value="200 JD"required=""> 200 JD</label>
                     </li>

                     <li>
                         <input type="radio" id="donate_amount-4" name="donate_amount" />
                         <label for="donate_amount-4" value="300 JD"required=""> 300 JD</label>
                     </li>


                 </ul>

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

                         <div class="col-md-6 col-sm-6 col-xs-12">
                             <div class="form-group">
                                 <p>Address*</p>
                                 <input type="text" name="address" placeholder="" required="" value="{{ $user->address }}" readonly>
                             </div>
                         </div>


                     </div>
                 </div>

                 <ul class="payment-option">

                     <li>
                         <h4>Choose your payment method:</h4>
                     </li>

                 </ul>
                 <div class="form-check form-check-inline">
                     <input type="radio" class="form-check-input" name="donate_method" value="Cash" required>
                     <label class="form-check-label">Cash</label>
                 </div>

                 <div class="form-check form-check-inline">
                     <input type="radio" class="form-check-input" name="donate_method" value="PayPal" required>
                     <label class="form-check-label">PayPal</label>
                 </div>





                 <div class="center">

                     <button class="thm-btn sbmt-btn" type="submit">Donate Now</button>
                 </div>



             </form>
         </div>
     </div>





     {{-- </div>
</div> --}}
 @endsection
