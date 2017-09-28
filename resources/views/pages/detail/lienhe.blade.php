@extends('pages.layout.index')
@section('content')

<!--========== PARALLAX ==========-->
<div class="parallax-window" data-parallax="scroll" data-image-src="img/1920x1080/banner6.png">
  <div class="parallax-content container">
    <h1 class="carousel-title"></h1>
  </div>
</div>
<!--========== PARALLAX ==========-->

<!--========== PAGE LAYOUT ==========-->
<!-- Contact List -->

<div class="section-seperator">
  <div class="content-lg container">
    <div class="row">
      <!-- Contact List -->
      <div class="col-sm-4 sm-margin-b-50">
        <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".3s">
          <h3><a href="#">Hồ Thị Hồng Hậu</a> <span class="text-uppercase margin-l-20"></span></h3>
          <p>Địa chỉ: 451/62 Xô Viết Nghệ Tĩnh, P.26, Q.Bình Thạnh, Tp.HCM</p>
          <ul class="list-unstyled contact-list">
            <li><i class="margin-r-10 color-base icon-call-out"></i>(+84)  0904.192028</li>
            <li><i class="margin-r-10 color-base icon-envelope"></i> Chuyengiathuonghieu@WynAds.com, WynAdsDesign@gmail.com</li>
          </ul>
        </div>
      </div>
      <!-- End Contact List -->

      <!-- Contact List -->
      <div class="col-sm-4 sm-margin-b-50">
        <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".3s">
          <h3><a href="#">Phan Việt Dũng</a> <span class="text-uppercase margin-l-20"></span></h3>
          <p>Địa chỉ: 451/62 Xô Viết Nghệ Tĩnh, P.26, Q.Bình Thạnh, Tp.HCM </p>
          <ul class="list-unstyled contact-list">
            <li><i class="margin-r-10 color-base icon-call-out"></i>(+84) 0935 045 481</li>
            <li><i class="margin-r-10 color-base icon-envelope"></i> WynAdsDesign@gmail.com</li>
          </ul>
        </div>
      </div>
      <!-- End Contact List -->

      <!-- End Contact List -->
    </div>
    <!--// end row -->
  </div>
</div>
<div class="promo-section overflow-h">
  <div class="container">
    <div class="clearfix">
      <div class="ver-center">
        <div class="ver-center-aligned">
          <div class="promo-section-col">
            <h2>WynAds</h2>
            <h5>Chúng tôi có 15 năm kinh nghiệm về thiết kế đồ họa và đặc biệt là gần 6 năm kinh nghiệp làm phim hoạt hình Nhật bản. Chúng tôi cực kỳ tự hào vì điều này vì khi nói về giá trị nghệ thuật thì chỉ có Nhật Bản là đứng đầu trên thế giới.

              Chúng tôi tin tưởng sẽ luôn là người đồng hành đáng tin cậy trên bước đường thành công của thương hiệu.</h5>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="promo-section-img-right">
    <img  style="position: relative;top: -50px;" class="img-responsive" src="img/1920x1080/1n.jpg" alt="Content Image">
  </div>
</div>
<!-- End Contact List -->

<!-- Back To Top -->
<a href="javascript:void(0);" class="js-back-to-top back-to-top">Top</a>

<!-- JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- CORE PLUGINS -->
<script src="vendor/jquery.min.js" type="text/javascript"></script>
<script src="vendor/jquery-migrate.min.js" type="text/javascript"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>

<!-- PAGE LEVEL PLUGINS -->
<script src="vendor/jquery.easing.js" type="text/javascript"></script>
<script src="vendor/jquery.back-to-top.js" type="text/javascript"></script>
<script src="vendor/jquery.smooth-scroll.js" type="text/javascript"></script>
<script src="vendor/jquery.wow.min.js" type="text/javascript"></script>
<script src="vendor/jquery.parallax.min.js" type="text/javascript"></script>

<!-- PAGE LEVEL SCRIPTS -->
<script src="js/layout.min.js" type="text/javascript"></script>
<script src="js/components/wow.min.js" type="text/javascript"></script>
<script src="js/components/gmap.min.js" type="text/javascript"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBsXUGTFS09pLVdsYEE9YrO2y4IAncAO2U&amp;callback=initMap" async defer></script>





  @endsection