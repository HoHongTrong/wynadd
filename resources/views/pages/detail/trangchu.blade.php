@extends('pages.layout.index')
@section('content')
  @include('pages.layout.slide')
  <!--========== PAGE LAYOUT ==========-->
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
                  theo Luật Sở hữu trí tuệ Việt Nam, ....</p>
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
                <p class="margin-b-5">Quy trình đăng ký một nhãn hiệu sản phẩm là một quy trình kéo dài 12-14 tháng theo Luật Sở hữu trí tuệ Việt Nam, LHD với 10 năm kinh nghiệm và</p>
              </div>
              <a href="video-2d-3d" class="content-wrapper-link"></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Service -->

  <!-- Latest Products -->
  <div class="content-lg container">
    <div class="row margin-b-40">
      <div class="col-sm-6">
        <h2>Hoạt động cùng Wyndas</h2>
        <p style="color:red"><b>Hotline : Ms.Hau 0904.192028</b></p>
      </div>
    </div>
    <!--// end row -->

    <div class="row">
    @foreach($tintuc as $tt)
      <!-- Latest Products -->
        <div class="col-sm-4 sm-margin-b-50">
          <div class="margin-b-20">
            <div class="wow zoomIn" data-wow-duration=".3" data-wow-delay=".1s">
              <a href="tintuc/{{$tt['id']}}/{{$tt['tieudekhongdau']}}.html">
                <img width="360px" height="240px" class="img-responsive" src="upload/tintuc/{{$tt['Hinh']}}" alt=""></a>
            </div>
          </div>
          <h4><a href="tintuc/{{$tt['id']}}/{{$tt['tieudekhongdau']}}.html">{{$tt->tieude}}</a> <span class="text-uppercase margin-l-20">Tin Tức WYNADS</span></h4>
          <p>{{$tt->tomtat}}</p>
          <a class="link" href="tintuc/{{$tt['id']}}/{{$tt['tieudekhongdau']}}.html">Xem thêm</a>
        </div>
        <!-- End Latest Products -->
      @endforeach

    </div>
    <!--// end row -->
  </div>
  <!-- End Latest Products -->

  <!-- Clients -->
  <div class="bg-color-sky-light">
    <div class="content-lg container">
      <!-- Swiper Clients -->
      <div class="swiper-slider swiper-clients">
        <!-- Swiper Wrapper -->
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <img class="swiper-clients-img" src="img/clients/01.png" alt="Clients Logo">
          </div>
          <div class="swiper-slide">
            <img class="swiper-clients-img" src="img/clients/02.png" alt="Clients Logo">
          </div>
          <div class="swiper-slide">
            <img class="swiper-clients-img" src="img/clients/03.png" alt="Clients Logo">
          </div>
          <div class="swiper-slide">
            <img class="swiper-clients-img" src="img/clients/04.png" alt="Clients Logo">
          </div>
          <div class="swiper-slide">
            <img class="swiper-clients-img" src="img/clients/05.png" alt="Clients Logo">
          </div>
          <div class="swiper-slide">
            <img class="swiper-clients-img" src="img/clients/06.png" alt="Clients Logo">
          </div>
        </div>
        <!-- End Swiper Wrapper -->
      </div>
      <!-- End Swiper Clients -->
    </div>
  </div>
  <!-- End Clients -->

  <!-- Testimonials -->
  <div class="content-lg container">
    <div class="row">
      <div class="col-sm-9">
        <h2>Customer Reviews</h2>

        <!-- Swiper Testimonials -->
        <div class="swiper-slider swiper-testimonials">
          <!-- Swiper Wrapper -->
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <blockquote class="blockquote">
                <div class="margin-b-20">
                  Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incididunt ut laboret dolore magna
                  aliqua. Ut enim minim veniam exercitation laboris ut siad consequat siad minim enum esqudiat dolore.
                </div>
                <div class="margin-b-20">
                  Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incididunt ut laboret tempor
                  incididunt dolore magna consequat siad minim aliqua.
                </div>
                <p><span class="fweight-700 color-link">Joh Milner</span>, Metronic Customer</p>
              </blockquote>
            </div>
            <div class="swiper-slide">
              <blockquote class="blockquote">
                <div class="margin-b-20">
                  Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                  Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
                  laborum.
                </div>
                <div class="margin-b-20">
                  Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  consequat.
                </div>
                <p><span class="fweight-700 color-link">Alex Clarson</span>, Metronic Customer</p>
              </blockquote>
            </div>
          </div>
          <!-- End Swiper Wrapper -->

          <!-- Pagination -->
          <div class="swiper-testimonials-pagination"></div>
        </div>
        <!-- End Swiper Testimonials -->
      </div>
    </div>
    <!--// end row -->
  </div>
  <!-- End Testimonials -->
  

  <!-- Promo Section -->
  <div class="promo-section overflow-h">
    <div class="container">
      <div class="clearfix">
        <div class="ver-center">
          <div class="ver-center-aligned">
            <div class="promo-section-col">
              <h2>Our Clients</h2>
              <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incididunt ut laboret dolore magna
                aliqua enim minim veniam exercitation ipsum dolor sit amet consectetur adipiscing elit sed tempor
                incididunt ut laboret dolore magna aliqua enim minim veniam exercitation</p>
              <p>Ipsum dolor sit amet consectetur adipiscing elit sed tempor incididut ut sead laboret dolore magna
                aliqua enim minim veniam exercitation ipsum dolor sit amet consectetur adipiscing</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="promo-section-img-right">
      <img height="1000pxs" class="img-responsive" src="img/970x970/banner2.jpg" alt="Content Image">
    </div>
  </div>
  <!-- End Promo Section -->

  <!-- Work -->
  <div class="bg-color-sky-light overflow-h">
    <div class="content-lg container">
      <div class="row margin-b-40">
        <div class="col-sm-6">
          <h2>Showcase</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incididunt ut laboret dolore magna aliqua
            enim minim veniam exercitation</p>
        </div>
      </div>
      <!--// end row -->

      <!-- Masonry Grid -->
      <div class="masonry-grid">
        <div class="masonry-grid-sizer col-xs-6 col-sm-6 col-md-1"></div>
        <div class="masonry-grid-item col-xs-12 col-sm-6 col-md-8">
          <!-- Work -->
          <div class="work wow fadeInUp" data-wow-duration=".3" data-wow-delay=".1s">
            <div class="work-overlay">
              <img class="full-width img-responsive" src="img/800x400/01.jpg" alt="Portfolio Image">
            </div>
            <div class="work-content">
              <h3 class="color-white margin-b-5">Art Of Coding</h3>
              <p class="color-white margin-b-0">Lorem ipsum dolor sit amet consectetur adipiscing</p>
            </div>
            <a class="content-wrapper-link" href="#"></a>
          </div>
          <!-- End Work -->
        </div>
        <div class="masonry-grid-item col-xs-6 col-sm-6 col-md-4">
          <!-- Work -->
          <div class="work wow fadeInUp" data-wow-duration=".3" data-wow-delay=".2s">
            <div class="work-overlay">
              <img class="full-width img-responsive" src="img/397x400/01.jpg" alt="Portfolio Image">
            </div>
            <div class="work-content">
              <h3 class="color-white margin-b-5">Clean Design</h3>
              <p class="color-white margin-b-0">Lorem ipsum dolor sit amet consectetur adipiscing</p>
            </div>
            <a class="content-wrapper-link" href="#"></a>
          </div>
          <!-- End Work -->
        </div>
        <div class="masonry-grid-item col-xs-6 col-sm-6 col-md-4">
          <!-- Work -->
          <div class="work wow fadeInUp" data-wow-duration=".3" data-wow-delay=".3s">
            <div class="work-overlay">
              <img class="full-width img-responsive" src="img/397x300/01.jpg" alt="Portfolio Image">
            </div>
            <div class="work-content">
              <h3 class="color-white margin-b-5">Clean Design</h3>
              <p class="color-white margin-b-0">Lorem ipsum dolor sit amet consectetur adipiscing</p>
            </div>
            <a class="content-wrapper-link" href="#"></a>
          </div>
          <!-- End Work -->
        </div>
        <div class="masonry-grid-item col-xs-6 col-sm-6 col-md-4">
          <!-- Work -->
          <div class="work wow fadeInUp" data-wow-duration=".3" data-wow-delay=".4s">
            <div class="work-overlay">
              <img class="full-width img-responsive" src="img/397x300/02.jpg" alt="Portfolio Image">
            </div>
            <div class="work-content">
              <h3 class="color-white margin-b-5">Clean Design</h3>
              <p class="color-white margin-b-0">Lorem ipsum dolor sit amet consectetur adipiscing</p>
            </div>
            <a class="content-wrapper-link" href="#"></a>
          </div>
          <!-- End Work -->
        </div>
        <div class="masonry-grid-item col-xs-6 col-sm-6 col-md-4">
          <!-- Work -->
          <div class="work wow fadeInUp" data-wow-duration=".3" data-wow-delay=".5s">
            <div class="work-overlay">
              <img class="full-width img-responsive" src="img/397x300/03.jpg" alt="Portfolio Image">
            </div>
            <div class="work-content">
              <h3 class="color-white margin-b-5">Clean Design</h3>
              <p class="color-white margin-b-0">Lorem ipsum dolor sit amet consectetur adipiscing</p>
            </div>
            <a class="content-wrapper-link" href="#"></a>
          </div>
          <!-- End Work -->
        </div>
      </div>
      <!-- End Masonry Grid -->
    </div>
  </div>
  <!-- End Work -->
  <!--========== END PAGE LAYOUT ==========-->

@endsection