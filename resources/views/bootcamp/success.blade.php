@extends('layouts.app')

@section('content')
    <!--Start 404 Error-->
    <section class="error @if (session()->has('success')) bg-gradient @else bg-gradient1 @endif pad-tb">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center mt50 mb50">
                    <div class="">
                        @if (session()->has('success'))
                        <div class="error-block">
                            <h1 class="wow fadeInUp" data-wow-delay=".4s">Payment Successful</h1>
                            <p>Welcome onboard on the journey to becoming a proficient website developer.</p>
                            <div class="images mt20">
                                <span class="fa fa-check-circle text-success fa-4x wow zoomInDown" data-wow-delay=".6s"></span>
                            </div>
                            <a href="https://chat.whatsapp.com/KSeXbrSF4D7AC6rSnheldW" class="btn-outline">Click here to join others</a>
                        </div>
                        @endif

                        @if (session()->has('error'))
                        <div class="error-block">
                            <h1 class="wow fadeInUp" data-wow-delay=".4s">Payment Unsuccessful</h1>
                            <p>Your payment was unsuccessful. We'd love you to be a part of this power-packed event. Click the link below</p>
                            <div class="images mt20">
                                <span class="fa fa-times text-danger fa-4x wow zoomInDown" data-wow-delay=".6s"></span>
                            </div>
                            <a href="https://wa.link/1ppghj" class="btn-outline">Click here to connect with me</a>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End 404 Error-->
@endsection
