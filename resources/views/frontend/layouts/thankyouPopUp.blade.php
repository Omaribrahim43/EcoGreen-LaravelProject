@extends('frontend.layouts.master')

@section('content')

<center>
        <div class="container-thanks" style="margin:165px 0; width: 70%;">
           
            <h2 class="thm-color">Thank You for Your Donation!</h2><br>
            <p class="p-thanks">Your donation has been received successfully.</p> <br>
            <p class="p-thanks">Our customer service team will contact you shortly to gather more details <br>and provide further assistance.</p><br>
            <a href="{{ route('index') }}" class="thm-btn thm-tran-bg" >  Home Page</a>

        </div>
</center>

@endsection
