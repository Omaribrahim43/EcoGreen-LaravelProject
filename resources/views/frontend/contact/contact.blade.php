 @extends('frontend.layouts.master')
 @section('content')
     <div class="inner-banner has-base-color-overlay text-center"style="background-image: url({{ asset('frontend/images/background/back_ground.jpg') }});"
>
         <div class="container">
             <div class="box">
                 <h1>Contact Us</h1>
             </div>
         </div>
     </div>
     <div class="breadcumb-wrapper">
         <div class="container">
             <div class="pull-left">
                 <ul class="list-inline link-list">
                     <li>
                         <a href={{ route('index') }}>Home</a>
                     </li>
                     

                     <li>
                         Contact Us
                     </li>
                 </ul>
             </div>
             <div class="pull-right">
                 <a href="{{ route('login') }}" class="get-qoute"><i class="fa fa-arrow-circle-right"></i>Become a Volunteer</a>
             </div>
         </div>
     </div>


     <!--Start contact area-->
     <!--Start contact area-->
     @include('frontend.contact.sections.touchArea')

     <!--End contact area-->
     <!--End contact area-->


     <!--Start contact form area-->




     <div class="sec-title text-center">
        <h3>Send us a messgae</h3> </div> <br>
     <section class="contact-form-area">
         <div class="container">
             <div class="row">

                 <div class="col-md-12">
                    
                     <div class="default-form-area">
                         @if (session('success'))
                             <div class="alert alert-success">
                                 {{ session('success') }}
                             </div>
                         @endif
                         <form action="{{ route('store.contact') }}" method="POST"  name="contact_form"
                             class="default-form">
                             @csrf
                             <div class="row clearfix">
                                 <div class="col-md-6 col-sm-6 col-xs-12">



                                     <div class="form-group">
                                         <input type="text" name="name" class="form-control" value=""
                                             placeholder="Your Name *" required="">
                                     </div>
                                 </div>
                                 <div class="col-md-6 col-sm-6 col-xs-12">
                                     <div class="form-group">
                                         <input type="email" name="email" class="form-control required email"
                                             value="" placeholder="Your Mail *" required="">
                                     </div>
                                 </div>
                                 <div class="col-md-6 col-sm-6 col-xs-12">
                                     <div class="form-group">
                                         <input type="text" name="phone" class="form-control" value=""
                                             placeholder="Phone">
                                     </div>
                                 </div>
                                 <div class="col-md-6 col-sm-6 col-xs-12">
                                     <div class="form-group">
                                         <input type="text" name="subject" class="form-control" value=""
                                             placeholder="Subject">
                                     </div>
                                 </div>
                                 <div class="col-md-12 col-sm-12 col-xs-12">
                                     <div class="form-group">
                                         <textarea name="message" class="form-control textarea required" placeholder="Your Message...."></textarea>
                                     </div>
                                 </div>
                                 <div class="col-md-12 col-sm-12 col-xs-12">
                                     <div class="form-group center">
                                         <button type="submit" id="submit-button" class="thm-btn style-2" >Send Message</button>

                                     </div>
                                 </div>

                             </div>

                         </form>
                     </div>
                 </div>



              

             </div>
         </div>
     </section>

     <!--End contact form area-->

     <iframe style="width:77%;margin:0 0 0 12%" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3363.009560388833!2d35.84709387523376!3d32.55259009542224!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151c7715f2c2e7ab%3A0x51755840c8ddbefd!2sOrange%20Digital%20Village%20Irbid!5e0!3m2!1sen!2sjo!4v1694412713482!5m2!1sen!2sjo" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
     @include('frontend.contact.sections.contactFormArea')
 @endsection
