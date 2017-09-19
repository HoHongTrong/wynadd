<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">
  <title>Dashboar</title>

  {!! Html::style('admin_asset/css/bootstrap.min.css') !!}
  {!! Html::style('admin_asset/css/bootstrap-theme.css') !!}
  {!! Html::style('admin_asset/css/elegant-icons-style.css') !!}
  {!! Html::style('admin_asset/css/font-awesome.min.css') !!}
  {!! Html::style('admin_asset/assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css') !!}
  {!! Html::style('admin_asset/assets/fullcalendar/fullcalendar/fullcalendar.css') !!}
  {!! Html::style('admin_asset/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css') !!}
  {!! Html::style('admin_asset/css/owl.carousel.css') !!}
  {!! Html::style('admin_asset/css/jquery-jvectormap-1.2.2.css') !!}
  {!! Html::style('admin_asset/css/fullcalendar.css') !!}
  {!! Html::style('admin_asset/css/widgets.css') !!}
  {!! Html::style('admin_asset/css/style.css') !!}
  {!! Html::style('admin_asset/css/style-responsive.css') !!}
  {!! Html::style('admin_asset/css/xcharts.min.css') !!}
  {!! Html::style('admin_asset/css/jquery-ui-1.10.4.min.css') !!}
  @yield('style')
</head>

<body>

<!-- container section start -->
<section id="container" class="">
  @include('admin.layouts.header.header')
  @include('admin.layouts.sidebars.sidebar')

    <!--main content start-->
    <section id="main-content">
      <div class="wrapper">
        @yield('content')
      </div>
    </section>
    <!--main content end-->

</section>
<!-- container section start -->

<!-- javascripts -->
{!! Html::script('admin_asset/js/jquery.js') !!}
{!! Html::script('admin_asset/js/jquery-ui-1.10.4.min.js') !!}
{!! Html::script('admin_asset/js/jquery-1.8.3.min.js') !!}
{!! Html::script('admin_asset/js/jquery-ui-1.9.2.custom.min.js') !!}
{!! Html::script('admin_asset/js/bootstrap.min.js') !!}
{!! Html::script('admin_asset/js/jquery.scrollTo.min.js') !!}
{!! Html::script('admin_asset/js/jquery.nicescroll.js') !!}
{!! Html::script('admin_asset/assets/jquery-knob/js/jquery.knob.js') !!}
{!! Html::script('admin_asset/js/jquery.sparkline.js') !!}
{!! Html::script('admin_asset/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js') !!}
{!! Html::script('admin_asset/js/owl.carousel.js') !!}
{!! Html::script('admin_asset/js/fullcalendar.min.js') !!}
{!! Html::script('admin_asset/assets/fullcalendar/fullcalendar/fullcalendar.js') !!}
{!! Html::script('admin_asset/js/calendar-custom.js') !!}
{!! Html::script('admin_asset/js/jquery.rateit.min.js') !!}
{!! Html::script('admin_asset/js/jquery.customSelect.min.js') !!}
{!! Html::script('admin_asset/assets/chart-master/Chart.js') !!}
{!! Html::script('admin_asset/js/scripts.js') !!}
{!! Html::script('admin_asset/js/sparkline-chart.js') !!}
{!! Html::script('admin_asset/js/easy-pie-chart.js') !!}
{!! Html::script('admin_asset/js/jquery-jvectormap-1.2.2.min.js') !!}
{!! Html::script('admin_asset/js/jquery-jvectormap-world-mill-en.js') !!}
{!! Html::script('admin_asset/js/xcharts.min.js') !!}
{!! Html::script('admin_asset/js/jquery.autosize.min.js') !!}
{!! Html::script('admin_asset/js/jquery.placeholder.min.js') !!}
{!! Html::script('admin_asset/js/gdp-data.js') !!}
{!! Html::script('admin_asset/js/morris.min.js') !!}
{!! Html::script('admin_asset/js/sparklines.js') !!}
{!! Html::script('admin_asset/js/charts.js') !!}
{!! Html::script('admin_asset/js/jquery.slimscroll.min.js') !!}

@yield('script')
<script type="text/javascript" language="javascript" src="admin_asset/ckeditor/ckeditor.js" ></script>
<script>
$(document).ready(function () {
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });
});


  //knob
  $(function() {
    $(".knob").knob({
      'draw' : function () {
        $(this.i).val(this.cv + '%')
      }
    })
  });

  //carousel
  $(document).ready(function() {
    $("#owl-slider").owlCarousel({
      navigation : true,
      slideSpeed : 300,
      paginationSpeed : 400,
      singleItem : true

    });
  });

  //custom select box

  $(function(){
    $('select.styled').customSelect();
  });

  /* ---------- Map ---------- */
  $(function(){
    $('#map').vectorMap({
      map: 'world_mill_en',
      series: {
        regions: [{
          values: gdpData,
          scale: ['#000', '#000'],
          normalizeFunction: 'polynomial'
        }]
      },
      backgroundColor: '#eef3f7',
      onLabelShow: function(e, el, code){
        el.html(el.html()+' (GDP - '+gdpData[code]+')');
      }
    });
  });

</script>

</body>
</html>
