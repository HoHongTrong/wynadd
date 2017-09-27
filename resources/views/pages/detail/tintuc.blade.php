@extends('pages.layout.index')
@section('content')

  <style>
    #tinnoibat {
      position: absolute;
      top: 582px;
      right: 200px;
    }
  </style>
  <!--========== PARALLAX ==========-->
  <div class="parallax-window" data-parallax="scroll" data-image-src="img/1920x1080/01.jpg">
    <div class="parallax-content container">
      <h1 class="carousel-title">Wynads</h1>
      <p style="color:yellow"><b>Hotline : Ms.Hau 0904.192028</b></p>
      <p>Hoạt động của WYNADS</p>
    </div>
  </div>

  <div class="content-lg container">
    <div class="row margin-b-20">
      <div class="col-sm-6">
        <h1>{{$tintuc->tieude}}</h1>
        <!-- Preview Image -->
        <img class="img-responsive" src="{{ asset("/upload/tintuc/$tintuc->Hinh") }}">
        <!-- Date/Time --><br>
        <p><span class="glyphicon glyphicon-time"></span> {{$tintuc->created_at}}</p>
        <h4>{{$tintuc->tomtat}}</h4>
      </div>
    </div>

    <div class="row" id="customaa">
      <div class="col-sm-7 sm-margin-b-50">

        <div class="margin-b-30">
          <p style="color: #111111">{{$tintuc->noidung}}</p>
        </div>
      </div>
    </div>
    <!--// end row -->
  </div>


  <div class="col-md-3" id="tinnoibat">
    <div class="panel panel-default">
      <div class="panel-heading"><b>Tin nổi bật</b></div>
      <div class="panel-body">
        <!-- item -->
        @foreach($tinnoibat->take(4) as $tt)
          <div class="row" style="margin-top: 10px;">
            <div class="col-md-5">
              <a href="tintuc/{{$tt->id}}/{{$tt['tieudekhongdau']}}">
                <img class="img-responsive" src="upload/tintuc/{{$tt->Hinh}}" alt="">
              </a>
            </div>
            <div class="col-md-7">
              <a href="tintuc/{{$tt->id}}/{{$tt->tieudekhongdau}}"><b>{{$tt->tieude}}</b></a>
            </div>
            <p style="padding-left: 5px">{{$tt->tomtat}}</p>
            <div class="break"></div>
          </div>
      @endforeach
      <!-- end item -->
      </div>
    </div>
  </div>
  <!-- End About -->



  <!-- Service -->
  <div class="bg-color-sky-light" data-auto-height="true">
    <div class="content-lg container">
      <div class="row margin-b-40">
        <div class="col-sm-6">
          <h2>Dịch vụ Wyndas cung cấp</h2>
          <p style="color:red"><b>Hotline : Ms.Hau 0904.192028</b></p>
        </div>
      </div>
      <div class="row row-space-1 margin-b-2">

        <div class="col-sm-4 sm-margin-b-2" style="background-color: #00aced">
          <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".3s">
            <div class="service" data-height="height">
              <div class="service-element">
                <i class="service-icon icon-chemistry"></i>
              </div>
              <div class="service-info">
                <h3>Thiết kế LoGo NameCard theo phong thủy</h3>
                <p class="margin-b-5">Bạn là công ty/doanh nghiệp mới bạn cần có một logo chuyên nghiệp ....</p>
              </div>
              <a href="logo-phong-thuy" class="content-wrapper-link"></a>
            </div>
          </div>
        </div>

        <div class="col-sm-4 sm-margin-b-2" style="background-color: red">
          <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".2s">
            <div class="service" data-height="height">
              <div class="service-element">
                <i class="service-icon icon-screen-tablet"></i>
              </div>
              <div class="service-info">
                <h3>Giải pháp thương hiệu</h3>
                <p class="margin-b-5">Một thiết kế logo chuyên nghiệp, một tên thương hiệu dễ nhớ ấn tượng, một slogan nói đúng giá trị ....</p>
              </div>
              <a href="giai-phap-thuong-hieu" class="content-wrapper-link"></a>
            </div>
          </div>
        </div>

        <div class="col-sm-4" style="background-color: yellow">
          <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".1s">
            <div class="service" data-height="height">
              <div class="service-element">
                <i class="service-icon icon-badge"></i>
              </div>
              <div class="service-info">
                <h3>Video InTro</h3>
                <p class="margin-b-5">- Một video giới thiệu về công ty hay giới thiệu một website nào đó nếu có đoạn mở đầu ấn tượng thì sẽ có khả năng thu hút người xem rất cao....</p>
              </div>
              <a href="video-intro" class="content-wrapper-link"></a>
            </div>
          </div>
        </div>
      </div>
      <!--// end row -->

      <div class="row row-space-1" >
        <div class="col-sm-4 sm-margin-b-2" style="background-color: #2ac845">
          <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".4s">
            <div class="service" data-height="height">
              <div class="service-element">
                <i class="service-icon icon-notebook"></i>
              </div>
              <div class="service-info">
                <h3>Đăng kí bảo hộ độc quyền</h3>
                <p class="margin-b-5"><b>Quy trình đăng ký một nhãn hiệu sản phẩm</b> là một quy trình kéo dài 12-14 tháng
                  theo Luật Sở hữu trí tuệ Việt Nam,....</p>
              </div>
              <a href="dang-ki-bao-ho-doc-quyen" class="content-wrapper-link"></a>
            </div>
          </div>
        </div>

        <div class="col-sm-4 sm-margin-b-2" style="background-color: #00aced">
          <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".5s">
            <div class="service" data-height="height">
              <div class="service-element">
                <i class="service-icon icon-speedometer"></i>
              </div>
              <div class="service-info">
                <h3>Phim hoạt hình quản cáo 2D,3D</h3>
                <p class="margin-b-5">Phim hoạt hình quản cáo sản phẩm....</p>
              </div>
              <a href="video-2d-3d" class="content-wrapper-link"></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Service -->
  <!--========== END PAGE LAYOUT ==========-->


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
  <script src="vendor/swiper/js/swiper.jquery.min.js" type="text/javascript"></script>

  <!-- PAGE LEVEL SCRIPTS -->
  <script src="js/layout.min.js" type="text/javascript"></script>
  <script src="js/components/swiper.min.js" type="text/javascript"></script>
  <script src="js/components/wow.min.js" type="text/javascript"></script>

@endsection