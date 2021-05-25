<!--Start Header -->
<header class="nav-bg-w main-header navfix fixed-top menu-white">
  <div class="container-fluid m-pad">
    <div class="menu-header">
      <div class="dsk-logo"><a class="nav-brand" href="/">
          <img src="{{ asset('images/white-logo.png') }}" alt="Logo" class="mega-white-logo" />
          <img src="{{ asset('images/logo.png') }}" alt="Logo" class="mega-darks-logo" />
        </a></div>
      <div class="custom-nav" role="navigation">
        <ul class="nav-list">
          <li><a href="/" class="menu-links">Home</a></li>
          <li><a href="{{ route('bootcamp') }}" class="menu-links">Bootcamp</a></li>
          <!-- <li><a href="{{ route('static', ['services']) }}" class="menu-links">Services</a></li> -->
          <!-- <li><a href="{{ route('static', ['about-us']) }}" class="menu-links">About</a></li> -->
          <!-- <li><a href="{{ route('static', ['why-us']) }}" class="menu-links">Why Us</a></li> -->
          <!-- <li><a href="{{ route('static', ['blog']) }}" class="menu-links">Blog</a></li> -->
          <li><a href="#" class="menu-links right-bddr">&nbsp;</a></li>
          <!--menu right border-->
          <li class="contact-show"><a href="#" class="btn-round- trngl btn-br bg-btn"><i
                class="fas fa-phone-alt"></i></a>
            <div class="contact-inquiry">
              <div class="contact-info-">
                <div class="contct-heading">Cremir Contacts</div>
                <div class="inquiry-card-nn hrbg">
                  <div class="title-inq-c">FOR HR DEPARTMENT</div>
                  <ul>
                    <li class="mb0"><img src="{{ asset('images/flags/ng.svg') }}" alt="Nigeria office" class="flags-size"> <a
                        href="tel:2348167297386">+234 816 7297 386</a></li>
                  </ul>
                </div>
                <div class="inquiry-card-nn">
                  <div class="title-inq-c">FOR SALES DEPARTMENT</div>
                  <ul>
                    <li><i class="fas fa-envelope"></i><a href="mailto:info@cremir.org">info@cremir.org</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </li>
          <li><a href="{{ route('static', ['get-quote']) }}" class="btn-br bg-btn3 btshad-b2 lnk">Request A Quote <span
                class="circle"></span></a> </li>
        </ul>
      </div>
      <div class="mobile-menu2">
        <ul class="mob-nav2">
          <!-- <li><a href="#" class="btn-round- trngl btn-br bg-btn btshad-b1" data-toggle="modal"
              data-target="#menu-popup"><i class="fas fa-envelope-open-text"></i></a></li> -->
          <li class="contact-show"><a href="#" class="btn-round- trngl btn-br bg-btn"><i
                class="fas fa-phone-alt"></i></a>
            <div class="contact-inquiry">
              <div class="contact-info-">
                <div class="contct-heading">Cremir Contacts</div>
                <div class="inquiry-card-nn hrbg">
                  <div class="title-inq-c">FOR HR DEPARTMENT</div>
                  <ul>
                    <li class="mb0"><img src="{{ asset('images/flags/ng.svg') }}" alt="Nigeria office" class="flags-size"> <a
                        href="tel:2348167297386">+234 816 7297 386</a></li>
                  </ul>
                </div>
                <div class="inquiry-card-nn">
                  <div class="title-inq-c">FOR SALES DEPARTMENT</div>
                  <ul>
                    <li><i class="fas fa-envelope"></i><a href="mailto:info@cremir.org">info@cremir.org</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </li>
          <li class="navm-"> <a class="toggle" href="#"><span></span></a></li>
        </ul>
      </div>
    </div>
    <!--Mobile Menu-->
    <nav id="main-nav">
      <ul class="first-nav">
        <li><a href="/">Home</a></li>
        <li><a href="{{ route('bootcamp') }}">Bootcamp</a></li>
        <li><a href="{{ route('static', ['get-quote']) }}">Get Quote</a></li>
      </ul>
      <ul class="bottom-nav">
        <li class="prb">
          <a href="tel:+2348167297386">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 384">
              <path
                d="M353.188,252.052c-23.51,0-46.594-3.677-68.469-10.906c-10.719-3.656-23.896-0.302-30.438,6.417l-43.177,32.594
                            c-50.073-26.729-80.917-57.563-107.281-107.26l31.635-42.052c8.219-8.208,11.167-20.198,7.635-31.448
                            c-7.26-21.99-10.948-45.063-10.948-68.583C132.146,13.823,118.323,0,101.333,0H30.813C13.823,0,0,13.823,0,30.813
                            C0,225.563,158.438,384,353.188,384c16.99,0,30.813-13.823,30.813-30.813v-70.323C384,265.875,370.177,252.052,353.188,252.052z" />
            </svg>
          </a>
        </li>
        <li class="prb">
          <a href="mailto:info@cremir.com">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
              <path
                d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z" />
              <path d="M0 0h24v24H0z" fill="none" />
            </svg>
          </a>
        </li>
        <li class="prb">
          <a href="wa.me/2348167297386?text=">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
              <path
                d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z" />
            </svg>
          </a>
        </li>
      </ul>
    </nav>
  </div>
</header>

<!--Mobile contact-->
<div class="popup-modal1">
  <div class="modal" id="menu-popup">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <div class="common-heading">
            <h4 class="mt0 mb0">Write a Message</h4>
          </div>
          <button type="button" class="closes" data-dismiss="modal">&times;</button>
        </div>
        <!-- Modal body -->
        <div class="modal-body">
          <div class="form-block fdgn2 mt10 mb10">
            <form action="{{ route('contact') }}" method="post" name="feedback-form">
              @csrf
              <div class="fieldsets row">
                <div class="col-md-12">
                  <input type="text" placeholder="Enter your name" name="name" required="required"
                    data-error="Name is required.">
                  <div class="help-block with-errors"></div>
                </div>

                <div class="col-md-12">
                  <input type="email" name="email" placeholder="Enter your email *" required="required"
                    data-error="Valid email is required.">
                  <div class="help-block with-errors"></div>
                </div>

                <div class="col-md-12">
                  <input type="text" name="phone" placeholder="Enter your phone number" required="required"
                    data-error="Phone No is required.">
                  <div class="help-block with-errors"></div>
                </div>

                <div class="col-md-12">
                  <input type="text" placeholder="Enter subject " name="subject" required="required"
                    data-error="Specify the subject of conversation">
                  <div class="help-block with-errors"></div>
                </div>

                <div class="col-md-12">
                  <textarea placeholder="Message" name="message" required="required"
                    data-error="Please leave us a message"></textarea>
                  @error('message')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>
              <input type="hidden" name="agreement" value="on">
              <div class="fieldsets mt20 pb20">
                <button type="submit" name="submit" class="lnk btn-main bg-btn">Submit <i
                    class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--Mobile contact-->

<!--End Header -->

