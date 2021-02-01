<div>
    <div class="container">
        <div class="row light-bgs">
            <div class="col-lg-6">
                <div class="common-heading text-l">
                    <span>Contact Now</span>
                    <h2 class="mt0">Have Question? Write a Message</h2>
                </div>
                @if (session()->has('error'))
                    <script>
                        Swal.fire({
                            title: 'Ooops!!!',
                            text: '{{ session('error') }}',
                            icon: 'error',
                        })
                    </script>
                @endif
                @if (session()->has('success'))
                    <script>
                        Swal.fire({
                            title: 'Thank you',
                            text: '{{ session('success') }}',
                            icon: 'success',
                        })
                    </script>
                @endif
                @error('agreement')
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ $message }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @enderror

                <div class="form-block">
                    <form action="{{ route('contact') }}" wire:submit.prevent="send" method="post" name="feedback-form">

                        @csrf
                        <div class="fieldsets row">
                            <div class="col-md-6">
                                <input type="text" wire:model.lazy="name" class="@error('name') is-invalid @enderror" placeholder="Full Name" value="{{ old('name') }}" name="name">
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <input type="email" wire:model.lazy="email" class="@error('email') is-invalid @enderror" placeholder="Email Address" value="{{ old('email') }}" name="email">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                        </div>
                        <div class="fieldsets row">
                            <div class="col-md-6">
                                <input type="text" wire:model.lazy="phone" class="@error('phone') is-invalid @enderror" placeholder="Contact Number" value="{{ old('phone') }}" name="phone">
                                @error('phone')
                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <input type="text" wire:model.lazy="subject" class="@error('subject') is-invalid @enderror" placeholder="Subject" value="{{ old('subject') }}" name="subject">
                                @error('subject')
                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                        </div>
                        <div class="fieldsets">
                            <textarea placeholder="Message" wire:model.lazy="message" class="@error('message') is-invalid @enderror" name="message"></textarea>
                            @error('message')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" wire:model.lazy="agreement" class="@error('message') is-invalid @enderror custom-control-input" id="customCheck" name="agreement" checked="checked">
                            <label class="custom-control-label" for="customCheck">I agree to the <a href="javascript:void(0)">Terms &amp; Conditions</a> of Cremir.</label>
                        </div>

                        <div class="fieldsets mt20"> <button type="submit" name="submit" class="lnk btn-main bg-btn" wire:loading.attr="disabled"> <i class="fa fa-spinner fa-spin" wire:loading></i> Submit <i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></button> </div>
                        <p class="trm"><i class="fas fa-lock"></i>We hate spam, and we respect your privacy.</p>
                    </form>
                </div>
            </div>
            <div class="col-lg-6 v-center">
                <div class="enquire-image">
                    <img src="images/about/hellopic.png" alt="enquire" class="img-fluid" />
                </div>
            </div>
        </div>
    </div>
</div>
