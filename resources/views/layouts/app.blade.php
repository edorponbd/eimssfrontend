<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en">
<![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8" lang="en">
<![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<!-- Mirrored from templates.esmet.me/universe/Blue/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 18 Oct 2020 05:30:19 GMT -->
<head>
    <title>{{isset($gschool_info->school_name)?$gschool_info->school_name:''}}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="College Education Responsive Template">
    <meta name="author" content="Esmet">
    <meta charset="UTF-8">

    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800' rel='stylesheet' type='text/css'>


    <!-- Favicons -->

    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{isset($gschool_info->favicon)?$gschool_info->favicon:''}}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{isset($gschool_info->favicon)?$gschool_info->favicon:''}}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{isset($gschool_info->favicon)?$gschool_info->favicon:''}}">
    <link rel="apple-touch-icon-precomposed" href="{{isset($gschool_info->favicon)?$gschool_info->favicon:''}}">
    <link rel="shortcut icon" href="{{isset($gschool_info->favicon)?$gschool_info->favicon:''}}">

    <!-- CSS Bootstrap & Custom -->
    <link href="{{asset('assets/front-end/bootstrap/css/bootstrap.css')}} " rel="stylesheet" media="screen">
    <link href="{{asset('assets/front-end/css/font-awesome.min.css')}} " rel="stylesheet" media="screen">
    <link href="{{asset('assets/front-end/css/animate.css')}}  " rel="stylesheet" media="screen">

    <link href="{{asset('assets/front-end/style.css')}}" rel="stylesheet" media="screen">

    <!-- JavaScripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://code.jquery.com/jquery-migrate-1.4.1.min.js"></script>
    <script src="{{asset('assets/front-end/js/modernizr.js')}} "></script>

    @stack('css')
    <!--[if lt IE 8]>
    <div style=' clear: both; text-align:center; position: relative;'>
        <a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" alt="" /></a>
    </div>
    <![endif]-->
</head>
<body>

<!-- This one in here is responsive menu for tablet and mobiles -->
@include("layouts.partials.topbar")

@include("layouts.partials.header")

@yield('content')

<!-- begin The Footer -->
@include("layouts.partials.footer")

<script src="{{asset('assets/front-end/bootstrap/js/bootstrap.min.js')}}"></script>
{{--<script src="{{asset('assets/front-end/js/plugins.js')}}"></script>--}}
<script src="https://templates.esmet.me/universe/Blue/js/plugins.js"></script>
<script src="{{asset('assets/front-end/js/custom.js')}} "></script>
@stack('js')
</body>

</html>
