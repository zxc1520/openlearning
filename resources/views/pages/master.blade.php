<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="utf-8">
     <meta content="width=device-width, initial-scale=1.0" name="viewport">

     <title>Open Learning</title>
     <meta content="" name="description">
     <meta content="" name="keywords">
     <meta name="csrf-token" content="{{ csrf_token() }}">

     <!-- Favicons -->
     <link href="{{ asset('img/favicon.png') }}" rel="icon">
     <link href="{{ asset('img/apple-touch-icon.png') }}" rel="apple-touch-icon">

     <!-- Google Fonts -->
     <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

     <!-- Vendor CSS Files -->
     <link href="{{ asset('vendor/animate.css/animate.min.css')}}" rel="stylesheet">
     <link href="{{ asset('vendor/aos/aos.css') }}" rel="stylesheet">
     <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
     <link href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
     <link href="{{ asset('vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
     <link href="{{ asset('vendor/remixicon/remixicon.css')}}" rel="stylesheet">
     <link href="{{ asset('vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

     <!-- Template Main CSS File -->
     <link href="{{ asset('css/style.css') }}" rel="stylesheet">

     <!-- =======================================================
  * Template Name: Mentor - v4.7.0
  * Template URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<body>
     @include('partials.navbar')

     @yield('content')

     @include('partials.footer')

     <div id="preloader"></div>
     <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

     <!-- Vendor JS Files -->
     <script src="{{ asset('vendor/purecounter/purecounter.js')}}"></script>
     <script src="{{ asset('vendor/aos/aos.js')}}"></script>
     <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
     <script src="{{ asset('vendor/swiper/swiper-bundle.min.js')}}"></script>
     <script src="{{ asset('vendor/php-email-form/validate.js')}}"></script>

     {{-- JS --}}
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="http://code.jquery.com/jquery-3.3.1.min.js"
      integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
      crossorigin="anonymous">
</script>

     <!-- Template Main JS File -->
     <script src="{{ asset('js/main.js')}}"></script>
     <script type="text/javascript">
          $(document).ready(function () {
               $('#search').on('keyup', function () {
                    var value = $(this).val();
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')
                        }
                    })
                    $.ajax({
                         url: "search",
                         type: "GET",
                         data: {
                            '_token': $('input[name="_token"]').val(),
                            'search': value,
                        },
                         success:function (data) {
                              $('.search-area').html(data)
                        },
                        error:function() {
                            alert('there is some error')
                        }
                    })
               })
          })
     </script>
</body>

</html>
