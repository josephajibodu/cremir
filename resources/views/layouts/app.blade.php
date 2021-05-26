<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="utf-8"/>
    <title>Cremir - Web Design Agency</title>
    <meta name="description" content="Website Design Agency">
    <meta name="keywords" content="Creative Agency, Website Design, Android App Development, Software Development">
    <meta name="author" content="Cremir">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="theme-color" content="#c7ecff">
    <!--website-favicon-->
    <link href="{{ asset('images/favicon.png') }}" rel="icon">
    <!--plugin-css-->
    <link href="{{ asset('css/bootstrap.min.css?v2.0') }}" rel="stylesheet">
    <link href="{{ asset('css/plugin.min.css?v2.0') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <!-- template-style-->
    <link href="{{ asset('css/style.css?v2.0') }}" rel="stylesheet">
    <link href="{{ asset('css/responsive.css?v2.0') }}" rel="stylesheet">
    <link href="{{ asset('css/cremir.css?v2.0') }}" rel="stylesheet">
    @livewireStyles
    @stack('css')
</head>
<body>
<!--Start Preloader -->
<div class="onloadpage" id="page_loader">
    <div class="pre-content">
        <div class="logo-pre"><img src="{{ asset('images/logo.png') }}" alt="Logo" class="img-fluid" /></div>
        <div class="pre-text-"><span>Cremir - Creative Website Design Agency</span>Relaaaax ... 😎</div>
    </div>
</div>
<!--End Preloader -->

@include('partials.nav')

@yield('content')

@include('partials.footer')
<!--scroll to top-->
<a id="scrollUp" href="#top"></a>
<!-- js placed at the end of the document so the pages load faster -->
<script src="{{ asset('js/vendor/modernizr-3.5.0.min.js') }}"></script>
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
<!-- <script src="{{ asset('js/popper.min.js') }}"></script> -->
<script src="{{ asset('js/plugin.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="{{ asset('js/preloader.js') }}"></script>
<!--common script file-->
<script src="{{ asset('js/main.js?v2.0') }}"></script>
<script>
  $(window).on('load', function() {
        @if($errors)
        @foreach($errors->all() as $error)
        Swal.fire({
            title: 'Ooops!!!',
            text: '{{ $error }}',
            icon: 'error',
          })
        @endforeach
        @endif

        @if (Session()->has('error'))
          Swal.fire({
              title: 'Ooops!!!',
              text: '{{ session('error') }}',
              icon: 'error',
            })
        @elseif (session()->has('success'))
        Swal.fire({
            title: 'Welcome!',
            text: '{{ session('success') }}',
            icon: 'success',
          })
        @elseif (Session()->has('info'))
        Swal.fire({
            title: 'Note',
            text: '{{ session('info') }}',
            icon: 'info',
          })
        @elseif (Session()->has('warning'))
        Swal.fire({
            title: 'Warning',
            text: '{{ session('warning') }}',
            icon: 'warning',
          })
        @endif
    });
</script>
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>
@livewireScripts
@stack('script')
</body>
</html>
