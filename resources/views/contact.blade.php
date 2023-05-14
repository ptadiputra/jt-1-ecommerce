@extends('user_layouts.user_master')
@section('content')
<div class="container-fluid ">
    <div class="row">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-lg-9">
                    
                    <!--
                    MAIN INFO
                    =============================================== -->
                    <div class="row blog-item-page">
                        
                        <div class="col-md-12">
                            
                            
        
                             
                            
                            <!-- Info panel -->
                            <div class="info-panel">
                                <ul>
                                    <li></li>
                                    <li><a></a></li>
                                    <li><a></a></li>
                                </ul>
                            </div>
                             <!-- Header -->
                             <div class="header">

<section id="contact-us" class="contact-us section">
    <div class="container">
            <div class="contact-head">
                <div class="row">
                    <div class="col-lg-8 col-12">
                        <div class="form-main">
                            <div class="title">
                                @php
                                    
                                @endphp
                                <h4>Get in touch</h4>
                                <h3>Write us a message @auth @else<span style="font-size:12px;" class="text-danger">[You need to login first]</span>@endauth</h3>
                            </div>
                            <form class="form-contact form contact_form" method="post" action="{{route('contact.store')}}" id="contactForm" novalidate="novalidate">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <label>Your Name<span>*</span></label>
                                            <input name="name" id="name" type="text" placeholder="Enter your name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <label>Your Subjects<span>*</span></label>
                                            <input name="subject" type="text" id="subject" placeholder="Enter Subject">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <label>Your Email<span>*</span></label>
                                            <input name="email" type="email" id="email" placeholder="Enter email address">
                                        </div>	
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <label>Your Phone<span>*</span></label>
                                            <input id="phone" name="phone" type="number" placeholder="Enter your phone">
                                        </div>	
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group message">
                                            <label>your message<span>*</span></label>
                                            <textarea name="message" id="message" cols="30" rows="9" placeholder="Enter Message"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group button">
                                            <button type="submit" class="btn-primary">Send Message</button>
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
<!--/ End Contact -->

<!--================Contact Success  =================-->
<div class="modal fade" id="success" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
            <h2 class="text-success">Thank you!</h2>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <p class="text-success">Your message is successfully sent...</p>
        </div>
      </div>
    </div>
</div>

<!-- Modals error -->
<div class="modal fade" id="error" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
            <h2 class="text-warning">Sorry!</h2>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <p class="text-warning">Something went wrong.</p>
        </div>
      </div>
    </div>
</div>
@endsection