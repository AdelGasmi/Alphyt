<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->


<head>
    <title>Alphyt</title>
    <meta charset="utf-8">
    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <![endif]-->
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/animations.css')}}">
    <link rel="stylesheet" href="{{asset('css/fonts.css')}}">
    <link rel="stylesheet" href="{{asset('css/main.css')}}" class="color-switcher-link">
    <script src="{{asset('js/vendor/modernizr-2.6.2.min.js')}}"></script>

    <!--[if lt IE 9]>
    <script src="{{asset('js/vendor/html5shiv.min.js')}}"></script>
    <script src="{{asset('s/vendor/respondj.min.js')}}"></script>
    <script src="{{asset('js/vendor/jquery-1.12.4.min.js')}}"></script>
    <![endif]-->

</head>

<body>
<!--[if lt IE 9]>
<div class="bg-danger text-center">You are using an <strong>outdated</strong> browser. Please <a
        href="http://browsehappy.com/" class="highlight">upgrade your browser</a> to improve your experience.
</div>
<![endif]-->

<div class="preloader">
    <div class="preloader_image"></div>
</div>


<!-- wrappers for visual page editor and boxed version of template -->
<div id="canvas">
    <div id="box_wrapper">
        @include('landing_layout.components.navbar')

        @yield('content')

        @include('landing_layout.components.footer')
    </div>
    <!-- eof #box_wrapper -->
</div>
<!-- eof #canvas -->

<script src="{{asset('js/compressed.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>

<script>
    $('#{{$active}}').addClass('active');
</script>
</body>


</html>