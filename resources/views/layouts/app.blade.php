<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <!-- set the viewport width and initial-scale on mobile devices -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD AJAX</title>
    
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css')}}">
    
    @yield('css')
</head>
<body>
  
    <div class="container">
        @yield('content')
    </div>
           
    <script type="text/javascript" src="{{ asset('assets/js/jquery.js')}}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/bootstrap.min.js')}}"></script>
    @yield('script')
</body>
</html>