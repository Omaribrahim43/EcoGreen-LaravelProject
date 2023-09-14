 @extends('frontend.layouts.master_popUp')

 @section('content')
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
                        <input type="hidden" name="project_id" value="{{ $id }}" required >
                        
                    </li>
                    <li>
                        <input type="radio" id="donate_amount-1" name="donate_amount" value="10 " required>
                        <label for="donate_amount-1">10 JD</label>
                    </li>
                    <li>
                        <input type="radio" id="donate_amount-2" name="donate_amount" value="20 " required>
                        <label for="donate_amount-2">20 JD</label>
                    </li>
                    <li>
                        <input type="radio" id="donate_amount-3" name="donate_amount" value="50 " required>
                        <label for="donate_amount-3">50 JD</label>
                    </li>
                    <li>
                        <input type="radio" id="donate_amount-4" name="donate_amount" value="100 " required>
                        <label for="donate_amount-4">100 JD</label>
                    </li>
                    <li>
                        <input type="radio" id="donate_amount-5" name="donate_amount" value="200 " required>
                        <label for="donate_amount-5">200 JD</label>
                    </li>
                    <li>
                        <input type="radio" id="donate_amount-6" name="donate_amount" value="300 " required>
                        <label for="donate_amount-6">300 JD</label>
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
                                 <input type="text" class="form-control" required="" value="{{ $user->phone }}"
                                     name="phone">
                             </div>
                         </div>

                         <div class="col-md-12 col-sm-12 col-xs-12">
                             <div class="form-group">
                                 <p>Address*</p>
                                 <input type="text" name="address" class="form-control" placeholder="" required=""
                                     value="{{ $user->address }}">
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
 @endsection
