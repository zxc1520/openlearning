<!DOCTYPE html>
<html lang="en">

<head>

     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <meta name="description" content="">
     <meta name="author" content="">

     <title>Instructor - Dashboard</title>

     <!-- Custom fonts for this template-->
     <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
     <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

     <!-- Custom styles for this template-->
     <link href="{{ asset('admin/css/sb-admin-2.min.css') }}" rel="stylesheet">

</head>

<body id="page-top">
     <div id="wrapper">
          @include('dashboard.partials.sidebar')

          @yield('content')


     </div>
     <!-- Bootstrap core JavaScript-->
     <script src="{{ asset('admin/vendor/jquery/jquery.min.js') }}"></script>
     <script src="{{ asset('admin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

     <!-- Core plugin JavaScript-->
     <script src="{{ asset('admin/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

     <!-- Custom scripts for all pages-->
     <script src="{{ asset('admin/js/sb-admin-2.min.js') }}"></script>

     {{-- <!-- Page level plugins -->
     <script src="{{ asset('admin/vendor/chart.js/Chart.min.js') }}"></script> --}}

     {{-- <!-- Page level custom scripts -->
     <script src="{{ asset('admin/js/demo/chart-area-demo.js') }}"></script>
     <script src="{{ asset('admin/js/demo/chart-pie-demo.js') }}"></script> --}}
     <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
     {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js
     "></script> --}}
     <script>
          // CKEditor
          $(document).ready(function() {
               $('.ckeditor').ckeditor()
          })

          $(document).ready(function() {
               $('#button-addon2').on('click', function() {
                    var tag = '';

                    tag += '<div class="input-group mb-3" id="field"> <input type="text" name="requirements[]" class="form-control @error("requirements")is-invalid @enderror" aria-describedby="button-addon2"> <button class="btn btn-outline-danger" type="button" id="del">-</button> </div>';

                    $('#field').append(tag);
               })
          })

          $(document).on('click', '#del', function() {
               $(this).closest('div').remove();
          })

     </script>
</body>
</html>
