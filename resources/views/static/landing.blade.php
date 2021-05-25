@extends('layouts.app')

@section('content')
<!--Start Hero-->
<section class="hero-section business-startup">
  <div class="text-block">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 v-center">
          <div class="header-heading">
            <h1 class="wow fadeInUp" data-wow-delay=".2s">We Build Scalable & Smart Solution</h1>
            <p class="wow fadeInUp" data-wow-delay=".4s">
              Need your business online or make it stand out?
              Communicate your brand message with <span style='color: #2196F3;'>CREMIR</span>.
              You do the work, let's help put it out there!
            </p>
            <a href="{{ route('static', 'get-quote') }}" class="btn-main bg-btn3 lnk wow fadeInUp"
              data-wow-delay=".6s">GET STARTED<i class="fas fa-chevron-right fa-icon"></i><span
                class="circle"></span></a>
          </div>
        </div>
        <div class="col-lg-6 v-center">
          <div class="hero-photo"><img src="images/hero/designer-girl-animate.svg" alt="img"></div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--End Hero-->

<!--Start About-->
<section class="about-agency pad-tb">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 v-center">
        <div class="image-block">
          <img src="images/about/about-image.png" alt="about" class="img-fluid no-shadow" />
        </div>
      </div>
      <div class="col-lg-6">
        <div class="common-heading text-l">
          <span>We Are Creative Agency</span>
          <h2>About Agency</h2>
          <p>We are a team of creatives focusing majorly on loosing your business knots. We help brand your business
            digitally with our services ranging from Website Development to Digital Marketing to Mobile app development
            to logo and graphic designs. We help your business/ brand stand out amongst your competitors thereby making
            you visible to your potential client.</p>
          <p class="quote">I make sure that every client that comes to CREMIR with their business or brand challenges
            get wowed by the time a solution is provided.</p>
          <div class="user- mt30">
            <div class="media">
              <div class="user-image bdr-radius"><img src="images/user-thumb/ceo.png" alt="girl" class="img-fluid" />
              </div>
              <div class="media-body user-info v-center">
                <h5>Joseph Ajibodu</h5>
                <p>Founder of <span>CREMIR</span></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--End About-->
<!--Start Service-->
<section class="service-section web-servic pad-tb">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="common-heading">
          <span>Services We’re Provided</span>
          <h2 class="mb30">Our Design & Development Services</h2>
        </div>
      </div>
    </div>
    <div class="row upset link-hover shape-num justify-content-center">
      <div class="col-lg-3 col-sm-6 mt30 shape-loc wow fadeInUp" data-wow-delay="0.2s">
        <div class="s-block" data-tilt data-tilt-max="5" data-tilt-speed="1000">
          <div class="s-card-icon"><img src="images/icons/branding.svg" alt="service" class="img-fluid" /></div>
          <h4>Logo & Branding Service</h4>
          <p>We don't take branding lightly, it is the representation of what you have built as a company.</p>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6 mt30 shape-loc wow fadeInUp" data-wow-delay="0.4s">
        <div class="s-block" data-tilt data-tilt-max="5" data-tilt-speed="1000">
          <div class="s-card-icon"><img src="images/icons/development.svg" alt="service" class="img-fluid" /></div>
          <h4>Website Design & Development</h4>
          <p>We build the best and amazing design that suits your brand.</p>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6 mt30 shape-loc wow fadeInUp" data-wow-delay="0.6s">
        <div class="s-block" data-tilt data-tilt-max="5" data-tilt-speed="1000">
          <div class="s-card-icon"><img src="images/icons/app.svg" alt="service" class="img-fluid" /></div>
          <h4>Mobile App Development</h4>
          <p>Native or Hybrid, our apps are compliant with the latest technological standards to ensure the best
            performance.</p>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6 mt30 shape-loc wow fadeInUp" data-wow-delay="0.8s">
        <div class="s-block mb0" data-tilt data-tilt-max="5" data-tilt-speed="1000">
          <div class="s-card-icon"><img src="images/icons/marketing.svg" alt="service" class="img-fluid" /></div>
          <h4>Digital Marketing Service</h4>
          <p>We'll help you stay on top and drive massive traffic and sales to your business.</p>
        </div>
      </div>
    </div>
    <div class="-cta-btn mt70">
      <div class="free-cta-title v-center wow zoomInDown" data-wow-delay=".9s">
        <p>Hire a <span>Dedicated Developer</span></p>
        <a href="{{ route('static', 'get-quote') }}" class="btn-main bg-btn2 lnk">Hire Now<i
            class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>
      </div>
    </div>
  </div>
</section>
<!--End Service-->
<!--Start statistics-->
<div class="statistics-section bg-gradient pad-tb tilt3d">
  <div class="container">
    <div class="row justify-content-center t-ctr">
      <div class="col-lg-4 col-sm-6">
        <div class="statistics">
          <div data-tilt data-tilt-max="20" data-tilt-speed="1000" class="statistics-img">
            <img src="images/icons/startup.svg" alt="years" class="img-fluid" />
          </div>
          <div class="statnumb">
            <span class="counter">4</span><span>+</span>
            <p>Year In Business</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6">
        <div class="statistics">
          <div data-tilt data-tilt-max="20" data-tilt-speed="1000" class="statistics-img">
            <img src="images/icons/team.svg" alt="team" class="img-fluid" />
          </div>
          <div class="statnumb">
            <span class="counter">10</span><span>+</span>
            <p>Team Members</p>
          </div>
        </div>
      </div>
    </div>
    <div class="row small t-ctr">
      <div class="col-lg-3 col-sm-6">
        <div class="statistics">
          <div data-tilt data-tilt-max="20" data-tilt-speed="1000" class="statistics-img">
            <img src="images/icons/deal.svg" alt="happy" class="img-fluid" />
          </div>
          <div class="statnumb">
            <span class="counter">10</span><span>k</span>
            <p>Happy Clients</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6">
        <div class="statistics">
          <div data-tilt data-tilt-max="20" data-tilt-speed="1000" class="statistics-img">
            <img src="images/icons/computers.svg" alt="project" class="img-fluid" />
          </div>
          <div class="statnumb counter-number">
            <span class="counter">25</span>
            <p>Projects Done</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6">
        <div class="statistics">
          <div data-tilt data-tilt-max="20" data-tilt-speed="1000" class="statistics-img">
            <img src="images/icons/worker.svg" alt="work" class="img-fluid" />
          </div>
          <div class="statnumb">
            <span class="counter">15</span><span>k</span>
            <p>Hours Worked</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6">
        <div class="statistics mb0">
          <div data-tilt data-tilt-max="20" data-tilt-speed="1000" class="statistics-img">
            <img src="images/icons/customer-service.svg" alt="support" class="img-fluid" />
          </div>
          <div class="statnumb">
            <span>24/7</span>
            <p>Support Available</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--End statistics-->

<!--Start Portfolio-->
<section class="portfolio-section pad-tb">
  <div class="container">
    <div class="row justify-content-center ">
      <div class="col-lg-8">
        <div class="common-heading">
          <span>Our Work</span>
          <h2 class="mb0">Our Latest Creative Work</h2>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-8 col-sm-8 mt60 wow fadeInUp" data-wow-delay="0.2s">
        <div class="isotope_item hover-scale">
          <div class="item-image" data-tilt data-tilt-max="2" data-tilt-speed="1000">
            <a href="#"><img src="images/portfolio/konnect-1.png" alt="image" class="img-fluid" /> </a>
          </div>
          <div class="item-info">
            <h4><a href="#">Ecommerce Development</a></h4>
            <p>Web Application</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-4 mt60 wow fadeInUp" data-wow-delay="0.4s">
        <div class="isotope_item hover-scale">
          <div class="item-image" data-tilt data-tilt-max="2" data-tilt-speed="1000">
            <a href="#"><img src="images/portfolio/onlinehealthhub370_380.png" alt="image" class="img-fluid" /> </a>
          </div>
          <div class="item-info">
            <h4><a href="#">Blogging Website</a></h4>
            <p>Wordpress</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-4 mt60 wow fadeInUp" data-wow-delay="0.6s">
        <div class="isotope_item hover-scale">
          <div class="item-image" data-tilt data-tilt-max="2" data-tilt-speed="1000">
            <a href="#"><img src="images/portfolio/rise_podcast.png" alt="image" class="img-fluid" /> </a>
          </div>
          <div class="item-info">
            <h4><a href="#">Logo Design</a></h4>
            <p>Graphic, Print</p>
          </div>
        </div>
      </div>
      <div class="col-lg-8 col-sm-8 mt60 wow fadeInUp" data-wow-delay="0.8s">
        <div class="isotope_item hover-scale">
          <div class="item-image" data-tilt data-tilt-max="2" data-tilt-speed="1000">
            <a href="#"><img src="images/portfolio/tradegoal.png" alt="image" class="img-fluid" /> </a>
          </div>
          <div class="item-info">
            <h4><a href="#">Investment Website</a></h4>
            <p>Web Application</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--End Portfolio-->
<!--Start Clients-->
<section class="clients-section pad-tb">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="common-heading">
          <span>Our happy customers</span>
          <h2>Some of our Clients</h2>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <div class="clients-logos text-center col-12">
          <ul class="row justify-content-center text-center clearfix">
            <li class="col-lg-2 col-md-3 col-sm-4 col-6 wow fadeIn" data-wow-delay=".2s"
              style="visibility: visible; animation-delay: 0.2s; animation-name: fadeIn;">
              <div class="brand-logo"><img src="{{ asset('images/client/konnect.png') }}" alt="Konnect.ng"
                  class="img-fluid"></div>
              <p>konnect.ng, Osun State.</p>
            </li>
            <li class="col-lg-2 col-md-3 col-sm-4 col-6 wow fadeIn" data-wow-delay=".2s"
              style="visibility: visible; animation-delay: 0.2s; animation-name: fadeIn;">
              <div class="brand-logo"><img src="{{ asset('images/client/cardvest.png') }}" alt="Cardvest.ng"
                  class="img-fluid"></div>
              <p>cardvest.ng, Lagos.</p>
            </li>
            <li class="col-lg-2 col-md-3 col-sm-4 col-6 wow fadeIn" data-wow-delay=".2s"
              style="visibility: visible; animation-delay: 0.2s; animation-name: fadeIn;">
              <div class="brand-logo"><img src="{{ asset('images/client/tradegoal.png') }}" alt="tradegoal.com"
                  class="img-fluid"></div>
              <p>tradegoal.com, Lagos.</p>
            </li>
            <li class="col-lg-2 col-md-3 col-sm-4 col-6 wow fadeIn" data-wow-delay=".2s"
              style="visibility: visible; animation-delay: 0.2s; animation-name: fadeIn;">
              <div class="brand-logo"><img src="{{ asset('images/client/vrpark.png') }}" alt="Vrpark.ng"
                  class="img-fluid"></div>
              <p>vrpark.ng, Ile-Ife.</p>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="-cta-btn mt70">
      <div class="free-cta-title v-center wow zoomInDown" data-wow-delay="1.2s">
        <p>We <span>Promise.</span> We <span>Deliver.</span></p>
        <a href="{{ route('static', 'get-quote') }}" class="btn-main bg-btn2 lnk">Let's Work Together<i
            class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>
      </div>
    </div>
  </div>
</section>
<!--End Clients-->
<!--Start work-category-->
<section class="work-category pad-tb tilt3d">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 v-center">
        <div class="common-heading text-l">
          <span>Industries we work for</span>
          <h2>Helping Businesses in All Domains</h2>
          <p>Successfully delivered digital products Lorem Ipsum is simply dummy text of the printing and typesetting
            industry.</p>
        </div>
      </div>
      <div class="col-lg-8">
        <div class="work-card-set">
          <div class="icon-set wow fadeIn" data-wow-delay=".2s">
            <div class="work-card cd1">
              <div class="icon-bg"><img src="images/icons/icon-1.png" alt="Industries" /></div>
              <p>Social Networking</p>
            </div>
          </div>
          <div class="icon-set wow fadeIn" data-wow-delay=".4s">
            <div class="work-card cd2">
              <div class="icon-bg"><img src="images/icons/icon-2.png" alt="Industries" /></div>
              <p>Digital Marketing</p>
            </div>
          </div>
          <div class="icon-set wow fadeIn" data-wow-delay=".6s">
            <div class="work-card cd3">
              <div class="icon-bg"><img src="images/icons/icon-3.png" alt="Industries" /></div>
              <p>Ecommerce Development</p>
            </div>
          </div>
          <div class="icon-set wow fadeIn" data-wow-delay=".8s">
            <div class="work-card cd4">
              <div class="icon-bg"><img src="images/icons/icon-4.png" alt="Industries" /></div>
              <p>Video Service</p>
            </div>
          </div>
          <div class="icon-set wow fadeIn" data-wow-delay="1s">
            <div class="work-card cd5">
              <div class="icon-bg"><img src="images/icons/icon-5.png" alt="Industries" /></div>
              <p>Banking Service</p>
            </div>
          </div>
          <div class="icon-set wow fadeIn" data-wow-delay="1.2s">
            <div class="work-card cd6">
              <div class="icon-bg"><img src="images/icons/icon-6.png" alt="Industries" /></div>
              <p>Enterprise Service</p>
            </div>
          </div>
          <div class="icon-set wow fadeIn" data-wow-delay="1.4s">
            <div class="work-card cd7">
              <div class="icon-bg"><img src="images/icons/icon-7.png" alt="Industries" /></div>
              <p>Education Service</p>
            </div>
          </div>
          <div class="icon-set wow fadeIn" data-wow-delay="1.6s">
            <div class="work-card cd8">
              <div class="icon-bg"><img src="images/icons/icon-8.png" alt="Industries" /></div>
              <p>Tour and Travels</p>
            </div>
          </div>
          <div class="icon-set wow fadeIn" data-wow-delay="1.8s">
            <div class="work-card cd9">
              <div class="icon-bg"><img src="images/icons/icon-9.png" alt="Industries" /></div>
              <p>Health Service</p>
            </div>
          </div>
          <div class="icon-set wow fadeIn" data-wow-delay="2s">
            <div class="work-card cd10">
              <div class="icon-bg"><img src="images/icons/icon-10.png" alt="Industries" /></div>
              <p>Event & Ticket</p>
            </div>
          </div>
          <div class="icon-set wow fadeIn" data-wow-delay="2.2s">
            <div class="work-card cd11">
              <div class="icon-bg"><img src="images/icons/icon-11.png" alt="Industries" /></div>
              <p>Restaurant Service</p>
            </div>
          </div>
          <div class="icon-set wow fadeIn" data-wow-delay="2.4s">
            <div class="work-card cd12">
              <div class="icon-bg"><img src="images/icons/icon-12.png" alt="Industries" /></div>
              <p>Business Consultant</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--End  work-category-->
<!--Start Testinomial-->
<section class="testinomial-section pad-tb">
  <div class="container">
    <div class="row">
      <div class="col-lg-5 v-center">
        <div class="common-heading text-l">
          <span>Clients Testimonial</span>
          <h2 class="mb0">What our clients say about our Company.</h2>
        </div>
      </div>
      <div class="col-lg-7">
        <div class="owl-carousel testimonial-card-a pl25">
          <div class="testimonial-card">
            <div class="t-text">
              <p>Cremir is my number one stop for Website development and Graphic designs.
                When I contacted them for a logo for my podcast show! I was wowed at the outcome!
                They are loyal and quick to deliver!</p>
            </div>
            <div class="client-thumbs mt30">
              <div class="media v-center">
                <div class="user-image bdr-radius"><img src="images/user-thumb/woman.png" alt="Lady"
                    class="img-fluid" /></div>
                <div class="media-body user-info v-center">
                  <h5>Esther Alade</h5>
                  <p>Rise Podcast, <small>Ile-Ife, Nigeria</small></p>
                </div>
              </div>
            </div>
          </div>
          <div class="testimonial-card">
            <div class="t-text">
              <p>You don't need to look further!
                All what you look for can be gotten at Cremir</p>
            </div>
            <div class="client-thumbs mt30">
              <div class="media v-center">
                <div class="user-image bdr-radius"><img src="images/user-thumb/man.png" alt="Man" class="img-fluid" />
                </div>
                <div class="media-body user-info">
                  <h5>Lawson Finidi</h5>
                  <p>OnlineHealthHub, <small>Ibadan, Nigeria</small></p>
                </div>
              </div>
            </div>
          </div>
          <div class="testimonial-card">
            <div class="t-text">
              <p>Wow!! Just checked the features you added. Perfect!! I like the way you arranged the admin dashboard as
                well. Thank you so much.</p>
            </div>
            <div class="client-thumbs mt30">
              <div class="media v-center">
                <div class="user-image bdr-radius"><img src="images/user-thumb/man.png" alt="Man" class="img-fluid" />
                </div>
                <div class="media-body user-info">
                  <h5>Jubril</h5>
                  <p>CEO of Konnect.ng</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--End Testinomial-->

<!--Start Enquire Form-->
<section class="enquire-form pad-tb">
  <livewire:contact />
</section>
<!--End Enquire Form-->

@endsection

@push('script')
<script src="https://cdn.jsdelivr.net/npm/typeit@7.0.4/dist/typeit.min.js"></script>

<script>
new TypeIt('#typed', {
    // speed: 50,
    loop: true
  })
  .type("Need your business online?")
  .pause(1000)
  .delete(null, {
    delay: 1000
  })
  .type("Help your business standout?")
  .pause(1000)
  .delete(null, {
    delay: 1000
  })
  .type("<em>Way forward</em>")
  .pause(1000)
  .delete(null, {
    delay: 1000
  })
  .type("Communicate your brand message with <span style='color: #2196F3;'>CREMIR</span>")
  .pause(1000)
  .delete(null, {
    delay: 1000
  })
  .type("...")
  .pause(1000)
  .delete(null, {
    delay: 1000
  })
  .type("You do the work, let's help put it out there!")
  .pause(2500)
  .empty()
  .go();
</script>
@endpush
