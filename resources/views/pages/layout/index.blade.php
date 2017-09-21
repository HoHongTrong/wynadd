<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>WYNADD</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
  <meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
  <meta name="author" content="FREEHTML5.CO" />
  @yield('css')

<!--
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE
	DESIGNED & DEVELOPED by FREEHTML5.CO

	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  <!-- Facebook and Twitter integration -->
  <meta property="og:title" content=""/>
  <meta property="og:image" content=""/>
  <meta property="og:url" content=""/>
  <meta property="og:site_name" content=""/>
  <meta property="og:description" content=""/>
  <meta name="twitter:title" content="" />
  <meta name="twitter:image" content="" />
  <meta name="twitter:url" content="" />
  <meta name="twitter:card" content="" />

  <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
  <link rel="shortcut icon" href="favicon.ico">

  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>

  {!! Html::style('css/animate.css') !!}
  {!! Html::style('css/icomoon.css') !!}
  {!! Html::style('css/bootstrap.css') !!}
  {!! Html::style('css/owl.carousel.min.css') !!}
  {!! Html::style('css/owl.theme.default.min.css') !!}
  {!! Html::style('css/style.css') !!}
  {!! Html::style('js/modernizr-2.6.2.min.js') !!}
  {!! Html::style('js/respond.min.js') !!}

</head>
<body>
<div class="box-wrap">
@include('pages.layout.header')
  <br>
@yield('content')
@include('pages.layout.footer')
</div>

{!! Html::script('js/jquery.min.js') !!}
{!! Html::script('js/jquery.easing.1.3.js') !!}
{!! Html::script('js/bootstrap.min.js') !!}
{!! Html::script('js/owl.carousel.min.js') !!}
{!! Html::script('js/jquery.waypoints.min.js') !!}
{!! Html::script('js/jquery.stellar.min.js') !!}
{!! Html::script('js/main.js') !!}

</body>
</html>

