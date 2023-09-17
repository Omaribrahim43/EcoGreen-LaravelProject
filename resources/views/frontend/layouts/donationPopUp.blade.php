@extends('frontend.layouts.navsticky')

@section('content')
    <div class="container">
        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
        <div class="donate-form-area">
            <div class="section-title center">
                <h2>Donation Information</h2>
            </div>

            <h3>How much would you like to donate:</h3>

            <form action="{{ route('paypal') }}" class="donate-form" method="post" novalidate="novalidate">
                @csrf
                <ul class="chicklet-list clearfix">
                    <li>
                        <input type="hidden" name="project_id" value="{{ $id }}" required>
                    </li>

                    <li>
                        <input type="radio" id="donate_amount-1" name="donate_amount" value="20" required>
                        <label for="donate_amount-1">20 JD</label>
                    </li>
                    <li>
                        <input type="radio" id="donate_amount-2" name="donate_amount" value="50" required>
                        <label for="donate_amount-2">50 JD</label>
                    </li>
                    <li>
                        <input type="radio" id="donate_amount-3" name="donate_amount" value="100" required>
                        <label for="donate_amount-3">100 JD</label>
                    </li>
                    <li>
                        <input type="radio" id="donate_amount-4" name="donate_amount" value="200" required>
                        <label for="donate_amount-4">200 JD</label>
                    </li>
                    <li>
                        {{-- <input type="radio" id="donate_amount-7" name="donate_amount" value="0" required> --}}
                        <input type="number" id="custom_amount" name="donate_amount" placeholder="Enter the  amount"
                            required>
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
                                <input type="text" id="" name="address" class="form-control" placeholder=""
                                    required="" value="{{ $user->address }}">
                            </div>
                        </div>



                    </div>
                </div>
                {{-- payment_method --}}


                <ul class="payment-option">
                    <li>
                        <h3>Choose your payment method:</h3>
                    </li>
                </ul>
                <div id="paymentpp">
                    <div class="form-check form-check-inline">

                        <h4> <input style="display: inline-block" type="radio" class="form-check-input" name="donate_method" value="Cash" required>
                            Cash
                            <span style="color: green !important"><i class="fa fa-money" aria-hidden="true"></i>
                        </h4>
                        </span>
                    </div>

                    <div class="form-check form-check-inline">

                        <h4> <input style="display: inline-block" type="radio" class="form-check-input"
                                name="donate_method" value="PayPal" required>
                            Paypal <span style="color:skyblue"><i class="fa fa-paypal" aria-hidden="true"></i>
                            </span>
                        </h4>

                    </div>
                </div>


                <div class="center">

                    <button class="thm-btn sbmt-btn" type="submit">Donate Now</button>
                </div>
            </form>
        </div>
    </div>
    <script>
        // Get references to the radio buttons and the custom amount input field
        const radioButtons = document.querySelectorAll('input[name="donate_amount"]');
        const customAmountInput = document.getElementById('custom_amount');

        // Add click event listeners to the radio buttons
        radioButtons.forEach(radioButton => {
            radioButton.addEventListener('click', () => {
                // Check if the custom amount radio button is selected
                if (radioButton.id === 'donate_amount-7') {
                    // Enable the custom amount input field
                    customAmountInput.removeAttribute('disabled');
                    customAmountInput.value = '';
                    // Clear the custom amount input
                } else {
                    // Disable the custom amount input field and set its value to the selected radio's value
                    // customAmountInput.setAttribute('disabled', 'true');
                    customAmountInput.value = radioButton.value;
                }
            });
        });

        // Add an input event listener to the custom amount input
        customAmountInput.addEventListener('input', () => {
            // Update the selected radio button's value when the custom amount input changes
            radioButtons.forEach(radioButton => {
                if (radioButton.id !== 'donate_amount-7') {
                    radioButton.checked = false;
                }
            });
        });
    </script>
@endsection
