@extends('layouts.app')

@section('content')
    <!--Breadcrumb Area-->
    <section class="breadcrumb-area banner-6">
        <div class="text-block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 v-center">
                        <div class="bread-inner">
                            <div class="bread-menu wow fadeInUp" data-wow-delay=".2s">
                                <ul>
                                    <li><a href="index.html">Home</a>
                                    </li>
                                    <li><a href="#">Contact</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="bread-title wow fadeInUp" data-wow-delay=".5s">
                                <h2>Contact</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Breadcrumb Area-->

    <!--Start Enquire Form-->
    <section class="contact-page pad-tb">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 v-center">
                    <div class="common-heading text-l">
                        <span>Contact Now</span>
                        <h2 class="mt0 mb0">Have Question? Write a Message</h2>
                        <p class="mb60 mt20">We will catch you as early as we receive the message</p>
                    </div>
                    <div class="form-block">
                        <form id="contact-form" method="post" action="{{ route('quote') }}" data-toggle="validator">
                            @csrf
                            <div class="messages"></div>
                            <div class="fieldsets row">
                                <div class="col-md-6 form-group">
                                    <input id="form_name" type="text" name="name" placeholder="Enter your name *" required="required" data-error="Name is required.">
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="col-md-6 form-group">
                                    <input id="form_email" type="email" name="email" placeholder="Enter your email *" required="required" data-error="Valid email is required.">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="fieldsets row">
                                <div class="col-md-6 form-group">
                                    <input id="form_phone" type="text" name="phone" placeholder="Enter your Phone No *" required="required" data-error="Phone No is required.">
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="col-md-6 form-group">
                                    <select id="form_need" name="service" required="required" data-error="Specify your need.">
                                        <option value="">Select Service</option>
                                        <option value="Graphic Design">Graphic Design</option>
                                        <option value="Web Design">Web Design</option>
                                        <option value="App Design">App Design</option>
                                        <option value="Other">Other</option>
                                    </select>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="fieldsets form-group">
                                <textarea id="form_message" name="message" placeholder="Message for me *" rows="4" required="required" data-error="Please, leave us a message."></textarea>
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck" name="agreement" checked="checked">
                                <label class="custom-control-label" for="customCheck">I agree to the <a href="javascript:void(0)">Terms &amp; Conditions</a> of Cremir.</label>
                            </div>
                            <div class="fieldsets mt20">
                                <button type="submit" class="lnk btn-main bg-btn">Submit <span class="circle"></span>
                                </button>
                            </div>
                            <p class="trm"><i class="fas fa-lock"></i>We hate spam, and we respect your privacy.</p>
                        </form>
                    </div>
                </div>
                <div class="col-lg-5 v-center">
                    <div class="contact-details">
                        <div class="contact-card wow fadeIn" data-wow-delay=".2s">
                            <div class="info-card v-center">
                                <span><i class="fas fa-phone-alt"></i> Phone:</span>
                                <div class="info-body">
                                    <p>Assistance hours: Monday – Saturday, 9 am to 5 pm</p>
                                    <a href="tel:+2348167297386">+234 816 7297 386</a>
                                </div>
                            </div>
                        </div>
                        <div class="email-card mt30 wow fadeIn" data-wow-delay=".5s">
                            <div class="info-card v-center">
                                <span><i class="fas fa-envelope"></i> Email:</span>
                                <div class="info-body">
                                    <p>Our support team will get back to in 24-h during standard business hours.</p>
                                    <a href="mailto:info@cremir.org">info@cremir.org</a>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="skype-card mt30 wow fadeIn" data-wow-delay=".9s">
                            <div class="info-card v-center">
                                <span><i class="fab fa-skype"></i> Skype:</span>
                                <div class="info-body">
                                    <p>We Are Online: Monday – Friday, 9 am to 5 pm</p>
                                    <a href="skype:niwax.company?call">niwax.company</a>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Enquire Form-->
@endsection
