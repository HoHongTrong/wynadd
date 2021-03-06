<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
  <meta charset="utf-8"/>
  <title>WynAds</title>
  <base href="{{asset('')}}">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta content="width=device-width, initial-scale=1" name="viewport"/>
  <meta content="" name="description"/>
  <meta content="" name="author"/>
  <link href="http://fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet" type="text/css">
  {!! Html::style('vendor/simple-line-icons/simple-line-icons.min.css') !!}
  {!! Html::style('vendor/bootstrap/css/bootstrap.min.css') !!}
  {!! Html::style('css/animate.css') !!}
  {!! Html::style('vendor/swiper/css/swiper.min.css') !!}
  {!! Html::style('css/layout.min.css') !!}
  {!! Html::style('css/hht.css') !!}
  {!! Html::style('css/owl.carousel.css') !!}
  <link rel="shortcut icon" href="favicon.ico"/>
</head>
<body>
@include('pages.layout.header')
@yield('content')
@include('pages.layout.footer')
<a href="javascript:void(0);" class="js-back-to-top back-to-top">Top</a>
{!! Html::script('vendor/jquery.min.js') !!}
{!! Html::script('vendor/jquery-migrate.min.js') !!}
{!! Html::script('vendor/bootstrap/js/bootstrap.min.js') !!}
{!! Html::script('vendor/jquery.easing.js') !!}
{!! Html::script('vendor/jquery.back-to-top.js') !!}
{!! Html::script('vendor/jquery.smooth-scroll.js') !!}
{!! Html::script('vendor/jquery.wow.min.js') !!}
{!! Html::script('vendor/swiper/js/swiper.jquery.min.js') !!}
{!! Html::script('vendor/masonry/jquery.masonry.pkgd.min.js') !!}
{!! Html::script('vendor/masonry/imagesloaded.pkgd.min.js') !!}
{!! Html::script('js/layout.min.js') !!}
{!! Html::script('js/components/wow.min.js') !!}
{!! Html::script('js/components/swiper.min.js') !!}
{!! Html::script('js/components/masonry.min.js') !!}
</body>
</html>