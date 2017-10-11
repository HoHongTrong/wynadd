<aside>
  <div id="sidebar"  class="nav-collapse ">
    <ul class="sidebar-menu">
      <li class="active">
        <a class="" href="#">
          <i class="icon_house_alt"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <li class="sub-menu">
        <a href="javascript:;" class="">
          <i class="icon_document_alt"></i>
          <span>Tin Tức</span>
          <span class="menu-arrow arrow_carrot-right"></span>
        </a>
        <ul class="sub">
          <li><a class="" href="{{route('ds-tintuc')}}">Danh sách tin tức</a></li>
          <li><a class="" href="{{route('them-tintuc')}}">Thêm tin tức</a></li>
        </ul>
      </li>
      <li class="sub-menu">
        <a href="javascript:;" class="">
          <i class="icon_documents_alt"></i>
          <span>Slide</span>
          <span class="menu-arrow arrow_carrot-right"></span>
        </a>
        <ul class="sub">
          <li><a class="" href="{{route('ds-slide')}}">Danh sách slide</a></li>
          <li><a class="" href="{{route('them-slide')}}">Thêm slide</a></li>
        </ul>
      </li>
      <li class="sub-menu">
        <a href="javascript:;" class="">
          <span class="glyphicon glyphicon-user"></span>
          <span>Khách Hàng</span>
          <span class="menu-arrow arrow_carrot-right"></span>
        </a>
        <ul class="sub">
          <li><a class="" href="{{route('ds-khachhang')}}">Danh sách khách hàng</a></li>
          <li><a class="" href="{{route('them-khachhang')}}">Thêm khách hàng</a></li>
        </ul>
      </li>
      <li class="sub-menu">
        <a href="javascript:;" class="">
          <i class="glyphicon glyphicon-king"></i>
          <span>Quản trị Admin</span>
          <span class="menu-arrow arrow_carrot-right"></span>
        </a>
        <ul class="sub">
          <li><a class="" href="{{route('ds-admin')}}">Danh sách quản trị</a></li>
          <li><a class="" href="{{route('them-admin')}}"><span>Thêm người quản trị</span></a></li>
        </ul>
      </li>
    </ul>
  </div>
</aside>