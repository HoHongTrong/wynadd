@extends('pages.layout.index')
@section('content')
  @include('pages.layout.slide')
<div id="fh5co-media-section">
  <div class="container">
    <div class="row animate-box">
      <div class="col-md-8 col-md-offset-2 text-center heading-section" style="position: relative; top: 80px">
        <h3>Welcome to Wynads</h3>
        <p>Chúng tôi có 15 năm kinh nghiệm về thiết kế đồ họa và đặc biệt là gần 6 năm kinh nghiệp làm phim hoạt hình Nhật bản. Chúng tôi cực kỳ tự hào vì điều này vì khi nói về giá trị nghệ thuật thì chỉ có Nhật Bản là đứng đầu trên thế giới.

          Chúng tôi tin tưởng sẽ luôn là người đồng hành đáng tin cậy trên bước đường thành công của thương hiệu.</p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-7 animate-box">
        <div class="fh5co-cover" style="">
          <div class="desc">
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
            <span>Web Design</span>
          </div>
        </div>
      </div>
      <div class="col-md-5">
        <div class="fh5co-cover">
          <div class="fh5co-cover-hero animate-box">
            <div class="fh5co-cover-thumb" style="background-image: url(images/work-2.jpg);"></div>
            <div class="desc-thumb">
              <p>Far far away, behind the word mountains, far from the</p>
              <span>Web Design</span>
            </div>
          </div>

          <div class="fh5co-cover-hero animate-box">
            <div class="fh5co-cover-thumb" style="background-image: url(images/work-3.jpg);"></div>
            <div class="desc-thumb">
              <p>Far far away, behind the word mountains, far from the</p>
              <span>User Experience</span>
            </div>
          </div>

          <div class="fh5co-cover-hero animate-box">
            <div class="fh5co-cover-thumb" style="background-image: url(images/work-4.jpg);"></div>
            <div class="desc-thumb">
              <p>Far far away, behind the word mountains, far from the</p>
              <span>Web Developement</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- END fh5co-media-section -->
<div id="fh5co-intro-section">
  <div class="fh5co-intro-cover text-center animate-box" data-animate-effect="fadeIn" data-stellar-background-ratio="0.5" style="background-image: url(images/intro.jpg);">
    <a href="#" class="btn">Serving You Is Our First Priority</a>
  </div>
</div>
<!-- END fh5co-intro-section -->
<div id="fh5co-product-section">
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
        <h3>Products</h3>
        <p>Far far away, behind the word mountains, far from the countries Vokalia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
      </div>
    </div>
    <div class="owl-carousel owl-carousel2">
      <div class="item animate-box"><a href="images/product-1.jpg" class="image-popup"><img src="images/product-1.jpg" alt="image"></a></div>
      <div class="item animate-box"><a href="images/product-2.jpg" class="image-popup"><img src="images/product-2.jpg" alt="image"></a></div>
      <div class="item animate-box"><a href="images/product-3.jpg" class="image-popup"><img src="images/product-3.jpg" alt="image"></a></div>
      <div class="item animate-box"><a href="images/product-4.jpg" class="image-popup"><img src="images/product-4.jpg" alt="image"></a></div>
      <div class="item animate-box"><a href="images/product-1.jpg" class="image-popup"><img src="images/product-1.jpg" alt="image"></a></div>
      <div class="item animate-box"><a href="images/product-2.jpg" class="image-popup"><img src="images/product-2.jpg" alt="image"></a></div>
      <div class="item animate-box"><a href="images/product-3.jpg" class="image-popup"><img src="images/product-3.jpg" alt="image"></a></div>
      <div class="item animate-box"><a href="images/product-4.jpg" class="image-popup"><img src="images/product-4.jpg" alt="image"></a></div>
      <div class="item animate-box"><a href="images/product-1.jpg" class="image-popup"><img src="images/product-1.jpg" alt="image"></a></div>
      <div class="item animate-box"><a href="images/product-2.jpg" class="image-popup"><img src="images/product-2.jpg" alt="image"></a></div>
      <div class="item animate-box"><a href="images/product-3.jpg" class="image-popup"><img src="images/product-3.jpg" alt="image"></a></div>
      <div class="item animate-box"><a href="images/product-4.jpg" class="image-popup"><img src="images/product-2.jpg" alt="image"></a></div>
    </div>
  </div>
</div>
<!-- END fh5co-product-section -->
<div id="fh5co-section" class="fh5co-grey-section">
  <div class="container">
    <div class="row">
      <div class="col-md-4 animate-box">
        <div class="fh5co-inner">
          <i class="icon-shield"></i>
          <div class="holder-section">
            <h3>About Us</h3>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
          </div>
        </div>
      </div>
      <div class="col-md-4 animate-box">
        <div class="fh5co-inner">
          <i class="icon-strategy"></i>
          <div class="holder-section">
            <h3>What We Doe</h3>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
          </div>
        </div>
      </div>
      <div class="col-md-4 animate-box">
        <div class="fh5co-inner">
          <i class="icon-bike"></i>
          <div class="holder-section">
            <h3>Why We Choose Us</h3>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

  @endsection