@extends('frontend.layouts.master_popup')

@section('content')
    <center>
            <div class="container-thanks" style="margin:165px 0; width: 70%;">

                <h2 class="thm-color">Thank You for Your Donation!</h2><br>
                <strong class="p-thanks">Your donation has been received successfully By <span style="color:skyblue"><i
                            class="fa fa-paypal" aria-hidden="true"></i>
                    </span> Paypal.</strong> <br>
                <p class="p-thanks">Our customer service team will contact you shortly to gather more details <br>and provide
                    further assistance.</p><br>
                <a href="{{ route('index') }}" class="thm-btn style-1"> Home Page</a>

            </div>
     </center>
@endsection