<!--========== HEADER ==========-->
<header class="header navbar-fixed-top">
  <!-- Navbar -->
  <nav class="navbar" role="navigation">
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="menu-container">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="toggle-icon"></span>
        </button>

        <!-- Logo -->
        <div class="logo">
          <a class="logo-wrap" href="{{route('trangchu')}}">
            <img src="img/logo-tc.png" alt="Asentus Logo">
          </a>
        </div>
        <!-- End Logo -->
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse nav-collapse">
        <div class="menu-container">
          <ul class="navbar-nav navbar-nav-right" id="menu">
            <li class="nav-item">
              <a class="nav-item-child nav-item-hover active" href="{{route('trangchu')}}">Trang chủ</a>
            </li>
            <li class="nav-item">
              <a class="nav-item-child nav-item-hover" href="{{route('gioithieu')}}">Giới thiệu</a>
            </li>
            <li class="nav-item">
              <a class="nav-item-child nav-item-hover" href="{{route('dichvu')}}">Dịch vụ</a>
            </li>
            <li class="nav-item">
              <a class="nav-item-child nav-item-hover" href="{{route('lienhe')}}">Liên hệ</a>
            </li>
            <li class="nav-item">
              <a class="nav-item-child nav-item-hover" href="http://giatrithuonghieu.net/">Giá trị thương hiệu</a>
            </li>

          </ul>
        </div>
      </div>
      <!-- End Navbar Collapse -->
    </div>
  </nav>
  <!-- Navbar -->
</header>

<!--========== END HEADER ==========-->