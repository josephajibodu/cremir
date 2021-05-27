@extends('layouts.app')

@section('content')

<!--Breadcrumb Area-->
<section class="breadcrumb-areav2" data-background="{{ asset('images/bootcamp/bootcamp-cover.png') }}">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-7">
        <div class="bread-titlev2" style="position: relative;">
          <h1 class="wow fadeInUp" data-wow-delay="1.0s">A 4-Week Web development</h1>
          <h1 class="wow fadeInUp" data-wow-delay="1.3s">
            <img src="{{ asset('images/bootcamp/bc.png') }}" height="100" style="top: 0;" />
          </h1>
          <p class="mt20 wow fadeInUp" data-wow-delay="1.9s">Equip yourself to become a proficient web-developer</p>
          <a href="#bootcamp-pricing" class="btn-main bg-btn2 lnk mt20 wow zoomInDown" data-wow-delay="2.2s">Register
            Now<i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>
        </div>
      </div>
    </div>
  </div>
</section>
<!--End Hero-->


<section class="service pad-tb">
  <div class="container">
    <div class="row">
      <div class="col-lg-7">
        <div class="text-l service-desc- pr25">
          <h3 class="wow fadeInUp" data-wow-delay=".3s">Get a complete practical knowledge in website development</h3>
          <h5 class="mt10 mb20 font-italic wow fadeInUp" data-wow-delay=".4s">You get to intern with CREMIR if you perform excellently</h5>
          <p class="wow fadeInUp" data-wow-delay=".5s">The WEB DEVELOPMENT TRAINING is a fully practical-oriented class where each trainee is equipped with
            industry standard skills needed to complete in the software development industry <b>globally</b>.
          </p>
          <p class="wow fadeInUp" data-wow-delay=".6s"> We raised
            well equiped developers, hence we test your ability with full-stack projects and not a random academical
            computer-based-test which is irrelevant to website development.
          </p>
          <p class="wow fadeInUp" data-wow-delay=".7s">Lastly, we prepare you to be ready for real-life projects. Hence, you'd be work-ready once you are done
            with our training.</p>

          <a href="#bootcamp-pricing" class="btn-main bg-btn2 lnk mt30 wow zoomInDown" data-wow-delay=".9s">Start Now <i
              class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>
        </div>
      </div>
      <div class="col-lg-5">
        <div class="servie-key-points">
          <h4 class="wow fadeInUp" data-wow-delay=".3s">Benefits</h4>
          <ul class="key-points mt20">
            <li class="wow slideInRight" data-wow-delay=".4s">Standard portfolio with 3 or more projects</li>
            <li class="wow slideInRight" data-wow-delay=".45s">Full knowledge of deploying a website</li>
            <li class="wow slideInRight" data-wow-delay=".5s">Knowledge of Git, SSH and other relevant tools</li>
            <li class="wow slideInRight" data-wow-delay=".55s">Knowledge and use of various libraries and frameworks</li>
            <li class="wow slideInRight" data-wow-delay=".6s">Exposure to job opportunities</li>
            <li class="wow slideInRight" data-wow-delay=".65s">Long-term mentorship</li>
            <li class="wow slideInRight" data-wow-delay=".7s">Opportunity to intern with us</li>
            <li class="wow slideInRight" data-wow-delay=".75s">Certification</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<!--Start Tech-->
<div class="techonology-used-">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-6">
        <div class="common-heading ptag pt-3">
          <h6>Tools you'd learn</h6>
          <p class="mb-0">I can assure you this is a power-packed training. At the end of the training, you will be
            confident to handle clients project.</p>
        </div>
      </div>
    </div>

    <ul class="h-scroll tech-icons wow slideInRight" data-wow-delay=".4s">
      <li>
        <a>
          <img src="images/icons/stack-icon1.png" alt="PHP">
        </a>
      </li>
      <li>
        <a>
          <img src="{{ asset('images/bootcamp/html.png')}}" alt="HTML5">
        </a>
      </li>
      <li>
        <a>
          <img src="{{ asset('images/bootcamp/css.png')}}" alt="CSS3">
        </a>
      </li>
      <li>
        <a>
          <img src="{{ asset('images/bootcamp/js.png')}}" alt="JS">
        </a>
      </li>
      <li>
        <a>
          <img src="{{ asset('images/bootcamp/git.png')}}" alt="GIT">
        </a>
      </li>
      <li>
        <a>
          <img src="{{ asset('images/bootcamp/github.png')}}" alt="GITHUB">
        </a>
      </li>
      <li>
        <a>
          <img src="{{ asset('images/bootcamp/bootstrap.svg')}}" alt="Bootstrap">
        </a>
      </li>
      <li>
        <a>
          <img src="{{ asset('images/bootcamp/sql.png')}}" alt="Sql Query">
        </a>
      </li>
      <li>
        <a>
          <img src="{{ asset('images/bootcamp/mysql.png')}}" alt="MySQL Database">
        </a>
      </li>
    </ul>
  </div>
</div>
<!--End Tech-->


<!--Start Service-->
<section class="service-block bg-gradient6 pad-tb">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-6">
        <div class="common-heading ptag">
          <h2>Major Skills</h2>
          <p class="mb30">Here is the list of the major skills you would learn and build confidence on this bootcamp</p>
        </div>
      </div>
    </div>
    <div class="row upset link-hover">

      <div class="col-lg-6 col-sm-6 mt30  wow fadeInUp" data-wow-delay=".2s">
        <div class="s-block wide-sblock">
          <div class="s-card-icon-large">
            <img src="{{ asset('images/bootcamp/html.png') }}" alt="HTML5 Training" class="img-fluid skills-img" />
          </div>
          <div class="s-block-content-large">
            <h4>Markup with HTML5 </h4>
            <p>HTML is the universal markup language for the Web. ... HTML lets you format text, add graphics, create
              links, input forms, frames and tables, etc.</p>
          </div>
        </div>
      </div>

      <div class="col-lg-6 col-sm-6 mt30 wow fadeInUp" data-wow-delay=".4s">
        <div class="s-block wide-sblock">
          <div class="s-card-icon-large">
            <img src="{{ asset('images/bootcamp/css.png') }}" alt="CSS3 Training" class="img-fluid skills-img" />
          </div>
          <div class="s-block-content-large">
            <h4>Styling with CSS3</h4>
            <p>Beautify your HTML pages with CSS3. CSS comes through and specifies your document's
              style—page layouts, colors, and fonts.</p>
          </div>
        </div>
      </div>

      <div class="col-lg-6 col-sm-6 mt30 wow fadeInUp" data-wow-delay=".6s">
        <div class="s-block wide-sblock">
          <div class="s-card-icon-large">
            <img src="{{ asset('images/bootcamp/js.png') }}" alt="Javascript Training" class="img-fluid skills-img" />
          </div>
          <div class="s-block-content-large">
            <h4>Real-time Interactivity</h4>
            <p>Take your websites to the next level with Javascript which adds responsiveness and interactivity to your
              website.</p>
          </div>
        </div>
      </div>

      <div class="col-lg-6 col-sm-6 mt30 wow fadeInUp" data-wow-delay=".8s">
        <div class="s-block wide-sblock">
          <div class="s-card-icon-large">
            <img src="{{ asset('images/bootcamp/php.png') }}" alt="PHP Training" class="img-fluid skills-img" />
          </div>
          <div class="s-block-content-large">
            <h4>Back-end Development</h4>
            <p>With PHP, your website is enabled to communicate with a web server and also connect to a database for
              persistence of data.</p>
          </div>
        </div>
      </div>


    </div>
    <div class="-cta-btn mt70">
      <div class="free-cta-title v-center wow zoomInDown" data-wow-delay="1.1s">
        <p>Hire a <span>Dedicated Developer</span>
        </p>
        <a href="#" class="btn-main bg-btn2 lnk">Hire Now<i class="fas fa-chevron-right fa-icon"></i><span
            class="circle"></span></a>
      </div>
    </div>
  </div>
</section>
<!--End Service-->

<!--Start Pricing-->
<section class="block-a1 pad-tb" id="bootcamp-pricing">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="common-heading ptag">
          <span>Training Categories</span>
          <h2>Choose your preferred training category</h2>
          <hr>
          <h5><span class="text-danger">20% Discount</span> till Wednesday, 2nd of June, 2021</h5>
          <hr>
        </div>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-lg-4 col-md-6">
        @livewire('bootcamp.plan', ['name' => 'basic'])
      </div>
      <div class="col-lg-4 col-md-6">
        @livewire('bootcamp.plan', ['name' => 'advanced'])
      </div>
      
    </div>
  </div>
</section>
<!--End Pricing-->


<!--Start CTA-->
<section class="cta-area pad-tb">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="common-heading">
          <span>Wanna talk to us?</span>
          <h2>We Love to Listen to You</h2>
          <a href="mailto:bootcamp@cremir.org" class="btn-outline">Send us a Mail <i
              class="fas fa-chevron-right fa-icon"></i></a>
          <p class="cta-call">Or call us now <a href="tel:+2348167297386"><i class="fas fa-phone-alt"></i>0816 729
              7386</a>
          </p>
        </div>
      </div>
    </div>
  </div>
  <div class="shape shape-a1">
    <img src="images/shape/shape-3.svg" alt="shape" />
  </div>
  <div class="shape shape-a2">
    <img src="images/shape/shape-4.svg" alt="shape" />
  </div>
  <div class="shape shape-a3">
    <img src="images/shape/shape-13.svg" alt="shape" />
  </div>
  <div class="shape shape-a4">
    <img src="images/shape/shape-11.svg" alt="shape" />
  </div>
</section>
<!--End CTA-->

@endsection