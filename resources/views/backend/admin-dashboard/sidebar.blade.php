<!-- Menu -->

<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
  <div class="app-brand demo">
    <a href="index.html" class="app-brand-link">
        <img class="img-fluid for-light for-dark" src="" style="width: 190px;">
    </a>

    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
      <i class="ti menu-toggle-icon d-none d-xl-block align-middle"></i>
      <i class="ti ti-x d-block d-xl-none ti-md align-middle"></i>
    </a>
  </div>

  <div class="menu-inner-shadow"></div>

  <ul class="menu-inner py-1">
    <!-- Dashboards -->
    <li class="menu-item active">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons ti ti-dashboard"></i>
        <div data-i18n="Web Details">Web Details</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item active">
          <a href="{{route('guider.index')}}" class="menu-link">
            <div data-i18n="Tour Guiders">Tour Guiders</div>
          </a>
        </li>
      </ul>
      <ul class="menu-sub">
        <li class="menu-item active">
          <a href="{{route('package.index')}}" class="menu-link">
            <div data-i18n="Packages Details">packages Details</div>
          </a>
        </li>
      </ul>
      <ul class="menu-sub">
        <li class="menu-item active">
          <a href="{{route('back_destination.index')}}" class="menu-link">
            <div data-i18n="Destinations">destinations</div>
          </a>
        </li>
        <li class="menu-item active">
          <a href="{{route('back_service.index')}}" class="menu-link">
            <div data-i18n="Services">Services</div>
          </a>
        </li>
        <li class="menu-item active">
          <a href="{{route('back_service.index')}}" class="menu-link">
            <div data-i18n="Booking Requests">Booking Requests</div>
          </a>
        </li>

      </ul>
    </li>
  </ul>
</aside>
<!-- / Menu -->
