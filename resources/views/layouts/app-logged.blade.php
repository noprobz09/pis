<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Patient Information System </title>
        <!-- Bootstrap core CSS -->
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('fonts/css/font-awesome.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/animate.min.css') }}" rel="stylesheet">
        <!-- Custom styling plus plugins -->
        <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
        <link href="{{ asset('css/icheck/flat/green.css') }}" rel="stylesheet" />
        <link href="{{ asset('css/floatexamples.css') }}" rel="stylesheet" type="text/css" />

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        @yield('css')
    </head>
    <body class="nav-md">

      <div id="app">
        <app></app>
      </div>

      
      <script src="{{ asset('js/jquery.min.js') }}"></script>
      <script src="{{ asset('js/nprogress.js') }}"></script>
      <!--[if lt IE 9]>
      <script src="../assets/js/ie8-responsive-file-warning.js"></script>
      <![endif]-->
      <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
      <script src="{{ asset('js/bootstrap.min.js') }}"></script>
      <!-- bootstrap progress js -->
      <script src="{{ asset('js/progressbar/bootstrap-progressbar.min.js') }}"></script>
      <script src="{{ asset('js/nicescroll/jquery.nicescroll.min.js') }}"></script>
      <!-- daterangepicker -->
      <script type="text/javascript" src="{{ asset('js/moment/moment.min.js') }}"></script>
      <script type="text/javascript" src="{{ asset('js/datepicker/daterangepicker.js') }}"></script>
      <!-- chart js -->
      <script src="{{ asset('js/chartjs/chart.min.js') }}"></script>
      
      <script>
        const URL = {
          base: '{{ url("/") }}',
          asset: {
            images: '{{ asset("images") }}'
          },
        };
      </script>
      <script src="{{ asset('js/app.js') }}"></script>

  </body>
</html>