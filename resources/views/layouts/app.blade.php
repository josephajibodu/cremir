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
    <link href="images/favicon.png" rel="icon">
    <!--plugin-css-->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/plugin.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <!-- template-style-->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/cremir.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
</head>
<body>
<!--Start Preloader -->
<div class="onloadpage" id="page_loader">
    <div class="pre-content">
        <div class="logo-pre"><img src="images/logo.png" alt="Logo" class="img-fluid" /></div>
        <div class="pre-text-"><span>Cremir - Creative Website Design Agency</span>Have Patience</div>
    </div>
</div>
<!--End Preloader -->

@include('partials.nav')

@yield('content')

@include('partials.footer')
<!--scroll to top-->
<a id="scrollUp" href="#top"></a>
<!-- js placed at the end of the document so the pages load faster -->
<script src="js/vendor/modernizr-3.5.0.min.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/plugin.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="js/preloader.js"></script>
<!--common script file-->
<script src="js/main.js"></script>
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
              text: '{{ $error }}',
              icon: 'error',
            })
        @elseif (Session()->has('success'))
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
@stack('script')
</body>
</html>
