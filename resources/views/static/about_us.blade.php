@extends('layouts.app')

@section('content')
    <!--Breadcrumb Area-->
    <section class="breadcrumb-area banner-1" data-background="images/banner/9.jpg">
        <div class="text-block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 v-center">
                        <div class="bread-inner">
                            <div class="bread-menu">
                                <ul>
                                    <li><a href="index.html">Home</a>
                                    </li>
                                    <li><a href="#">About Us</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="bread-title">
                                <h2>About Cremic Inc.</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Breadcrumb Area-->

    <!--Start About-->
    <section class="about-agency pad-tb block-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 v-center">
                    <div class="about-image">
                        <img src="images/about/company-about.png" alt="about us" class="img-fluid" />
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="common-heading text-l ">
                        <span>About Us</span>
                        <h2>About Agency</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type
                            specimen book. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. is simply dummy text of the printing and typesetting industry.</p>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. is simply dummy text of the printing and typesetting industry. Lorem Ipsum is
                            simply dummy text of the printing and typesetting industry. is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                    <div class="row in-stats small about-statistics">
                        <div class="col-lg-4 col-sm-4">
                            <div class="statistics">
                                <div class="statnumb counter-number">
                                    <span class="counter">450</span>
                                    <p>Happy Clients</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-4">
                            <div class="statistics">
                                <div class="statnumb">
                                    <span class="counter">95</span><span>k</span>
                                    <p>Hours Worked</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-4">
                            <div class="statistics mb0">
                                <div class="statnumb counter-number">
                                    <span class="counter">850</span>
                                    <p>Projects Done</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End About-->

    <!--Start why-choose-->
    <section class="why-choose pad-tb">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="common-heading">
                        <span>We Are Awesome</span>
                        <h2 class="mb30">Why Choose Us</h2>
                    </div>
                </div>
            </div>
            <div class="row upset">
                <div class="col-lg-3 col-sm-6 mt30">
                    <div class="s-block up-hor">
                        <div class="s-card-icon">
                            <img src="images/icons/research.svg" alt="service" class="img-fluid" />
                        </div>
                        <h4>Reasearch and Analysis</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mt30">
                    <div class="s-block up-hor">
                        <div class="s-card-icon">
                            <img src="images/icons/chat.svg" alt="service" class="img-fluid" />
                        </div>
                        <h4>Negotiation and power</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mt30">
                    <div class="s-block up-hor">
                        <div class="s-card-icon">
                            <img src="images/icons/monitor.svg" alt="service" class="img-fluid" />
                        </div>
                        <h4>Creative and innovative solutions</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mt30">
                    <div class="s-block up-hor">
                        <div class="s-card-icon">
                            <img src="images/icons/trasparency.svg" alt="service" class="img-fluid" />
                        </div>
                        <h4>Trasparency and ease of work</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End why-choose-->
@endsection
