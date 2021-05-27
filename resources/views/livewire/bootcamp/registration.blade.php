<div x-data="{ registering: @entangle('registering') }">
    <div class="container" id="registration" x-show="registering">
        <div class="row justify-content-center">
            <div class="col-md-8 text-center">
                <h3 class="mb10">Bootcamp Registration</h3>
                <p>Dare to challenge world wide? Then continue ...</p>
                <p class="font-weight-bold">{{ $plan['title'] }} PLAN</p>
                @if (session()->has('registration'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('registration') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                @endif
            </div>
        </div>
        <div class="row justify-content-center mt30">
            <div class="col-md-9">
                <div class="form-block fdgn2 mt10 mb10">
                    <form wire:submit.prevent="registerNow">
                        <div class="fieldsets row">
                            <div class="col-md-6">
                                <input type="text" wire:model="firstname" placeholder="First Name" name="firstname" class="@error('firstname') is-invalid @enderror">
                                @error('firstname')
                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <input type="text" wire:model="lastname" placeholder="Last Name" name="lastname" class="@error('lastname') is-invalid @enderror">
                                @error('lastname')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="fieldsets row">
                            <div class="col-md-6 form-group">
                                <div class="row no-gutters">
                                    <div class="col-md-12 pl5">
                                        <input wire:model="phonenumber" class="@error('phonenumber') is-invalid @enderror" type="text" name="phonenumber" placeholder="Phone No*">
                                        @error('phonenumber')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <input wire:model="email" class="@error('email') is-invalid @enderror" type="email" placeholder="Email Address" name="email">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="fieldsets row">
                            <div class="col-md-12">
                                <textarea class="@error('message') is-invalid @enderror" wire:model="message" placeholder="Any message for us?" name="message"></textarea>
                                @error('message')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="fieldsets row mt30 pb20 justify-content-center">
                            <div class="col-md-8">
                                <button type="submit" class="lnk btn-main bg-btn" wire:loading.attr="disabled"><i class="fa fa-spinner fa-spin" wire:loading.delay wire:loading:target="registerNow"></i> Continue <i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="container" id="payment" x-show.transition.in.duration.200ms.out.duration.50ms="!registering">
      <section class="shop-products-prvw pt20 pb60">
        <div class="container shop-container">
          <div class="row justify-content-center">
              <div class="col-md-8 text-center">
                @if($alreadyRegistered && (!$registering))
                <h4 class="mb10 font-italic">Welcome back 😎, {{ $user->firstname }}. Complete your payment and join the train <br>
                 If you have any difficulties, you can contact me through call/whatsapp on <strong>08167297386</strong></h4>
                 <hr>
                 @endif
                <h3 class="mb10">Bootcamp Payment</h3>
                <p>Dare to challenge world wide? ...</p>
                <p class="font-weight-bold text-uppercase">{{ $plan['title'] }} PLAN</p>
                
                @if (session()->has('payment_error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                  {{ session('payment_error') }}
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                @endif
              </div>
          </div>

          <div class="row justify-content-center align-items-center">
            <div class="col-lg-6">
              <div class="rpb-item-infodv">
                  <ul>
                      <li class="price">
                          <strong>Price</strong>
                          <div class="nx-rt">
                            <div class="rpb-itm-pric"> 
                                <span class="offer-prz"> &#8358;{{ $amount }} </span>
                                @if(isset($plan['original_amount']))
                                <span class="regular-prz">&#8358;{{ $original_amount }}</span>
                                @endif
                            </div>
                          </div>
                      </li>

                      <li>
                          <strong>Spots</strong>
                          <div class="nx-rt"> Just you 😉</div>
                      </li>
                      <li>
                          <a class="btn-main bg-btn w-100" wire:click="initiatePayment" wire:loading.attr="disabled"><i class="fa fa-spinner fa-spin" wire:loading.delay wire:loading:target="initiatePayment"></i> Make Payment <span class="circle"></span> </a>
                          <a href="https://wa.link/1ppghj" target="_blank" class="btn-main bg-btn3 lnk w-100 mt10">Chat with Us <span class="circle"></span> </a>
                      </li>

                  </ul>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
</div>