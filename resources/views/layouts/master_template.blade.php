<!DOCTYPE html>
<html lang="{{app()->getLocale() }}">
<head>
<meta charset="utf-8">
<title>Electronic Journalist visa</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="csrf-token" content="{{csrf_token()}}">

<!-- Datatables -->
<link href="{{ asset('assets/vendor/datatables/datatables.min.css') }}" rel="stylesheet">

<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
<link href="{{asset('css/bootstrap-responsive.min.css')}}" rel="stylesheet">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600"
        rel="stylesheet">
<link href="{{asset('css/font-awesome.css')}}" rel="stylesheet">
<link href="{{asset('css/style.css')}}" rel="stylesheet">
<link href="{{asset('css/pages/dashboard.css')}}" rel="stylesheet">

@stack('styles')
<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>
<div class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container"> <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span
                    class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span> </a><a class="brand" href="index.html">Electronic Journalist Visa</a>
      <div class="nav-collapse">
        <ul class="nav pull-right">

          <li class="dropdown"><a href="signup.html" ><i class="icon-user"></i> Account <b class="caret"></b></a>


          </li>
        </ul>
      </div>
      <!--/.nav-collapse -->
    </div>
    <!-- /container -->
  </div>
  <!-- /navbar-inner -->
</div>
<!-- /navbar -->
<div class="subnavbar">
  <div class="subnavbar-inner">
    <div class="container">
      <ul class="mainnav">
        <li class="active"><a href="index.html"><i class="icon-dashboard"></i><span>Dashboard</span> </a> </li>
        <li><a href="faq.html"><i class="icon-list-alt"></i><span>FAQ</span> </a> </li>
        <li><a href="{{route('opening.index')}}"><i class="icon-code"></i><span>Current Apps</span> </a> </li>

      </ul>
    </div>
    <!-- /container -->
  </div>
  <!-- /subnavbar-inner -->
</div>
<!-- /subnavbar -->
<div class="main">
  <div class="main-inner">
    <div class="container">

      @yield('content')

      <!-- /row -->
    </div>
    <!-- /container -->
  </div>
  <!-- /main-inner -->
</div>
<!-- /main -->

<div class="extra">
  <div class="extra-inner">
    <div class="container">
      <div class="row">
                    <div class="span12">
                        <h4>
                            Disclaimer
                          </h4>
                          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                    </div>

                </div>
      <!-- /row -->
    </div>
    <!-- /container -->
  </div>
  <!-- /extra-inner -->
</div>

<div class="footer">
  <div class="footer-inner">
    <div class="container">
      <div class="row">
        <div class="span12"> Copyright 2016 - 2018 Embassy of the Republic of Indonesia in London | 30 Great Peter Street, London SW1P 2BU | Ph. +44 (20) 74997661 | Fax. | All Rights Reserved
          https://consular.indonesianembassy.org.uk </div>
        <!-- /span12 -->
      </div>
      <!-- /row -->
    </div>
    <!-- /container -->
  </div>
  <!-- /footer-inner -->
</div>
<!-- /footer -->
<!-- Le javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{{asset('js/jquery-1.7.2.min.js')}}"></script>
<script src="{{asset('js/excanvas.min.js')}}"></script>
<script src="{{asset('js/chart.min.js')}}" type="text/javascript"></script>
<script src="{{asset('js/bootstrap.js')}}"></script>
<script language="javascript" type="text/javascript" src="{{asset('js/full-calendar/fullcalendar.min.js')}}"></script>

<script src="{{asset('js/base.js')}}"></script>
@stack('styles')


<!-- Datatables -->
<script src="{{ asset('assets/vendor/datatables/datatables.min.js') }}"></script>
<script src="{{ asset('js/form.js') }}"></script>

@stack('scripts')
@stack('sidebar')
</body>
</html>
