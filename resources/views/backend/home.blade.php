<!doctype html>
<html
  lang="en"
  class="light-style layout-navbar-fixed layout-menu-fixed layout-compact"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="backend/assets/"
  data-template="vertical-menu-template"
  data-style="light"
>
<head>
  <base href="/">
  <meta charset="utf-8" />
  <meta
    name="viewport"
    content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
  />
  <title>BEST TIME TRAVEL</title>
  <meta name="description" content="" />

  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="{{ asset('backend/assets/img/favicon/favicon.ico') }}" />
 
  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
    rel="stylesheet"
  />

  <!-- Icons -->
  <link rel="stylesheet" href="{{ asset('backend/assets/vendor/fonts/fontawesome.css') }}" />
  <link rel="stylesheet" href="{{ asset('backend/assets/vendor/fonts/tabler-icons.css') }}" />
  <link rel="stylesheet" href="{{ asset('backend/assets/vendor/fonts/flag-icons.css') }}" />

  <!-- Core CSS -->
  <link rel="stylesheet" href="{{ asset('backend/assets/vendor/css/rtl/core.css') }}" class="template-customizer-core-css" />
  <link rel="stylesheet" href="{{ asset('backend/assets/vendor/css/rtl/theme-default.css') }}" class="template-customizer-theme-css" />
  <link rel="stylesheet" href="{{ asset('backend/assets/css/demo.css') }}" />

  <!-- Vendors CSS -->
  <link rel="stylesheet" href="{{ asset('backend/assets/vendor/libs/node-waves/node-waves.css') }}" />
  <link rel="stylesheet" href="{{ asset('backend/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />
  <link rel="stylesheet" href="{{ asset('backend/assets/vendor/libs/typeahead-js/typeahead.css') }}" />
  <link rel="stylesheet" href="{{ asset('backend/assets/vendor/libs/apex-charts/apex-charts.css') }}" />
  <link rel="stylesheet" href="{{ asset('backend/assets/vendor/libs/swiper/swiper.css') }}" />
  <link rel="stylesheet" href="{{ asset('backend/assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css') }}" />
  <link rel="stylesheet" href="{{ asset('backend/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css') }}" />
  <link rel="stylesheet" href="{{ asset('backend/assets/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.css') }}" />


  <!-- Page CSS -->
  <link rel="stylesheet" href="{{ asset('backend/assets/vendor/css/pages/cards-advance.css') }}" />
  <link rel="stylesheet" href="{{asset('backend/assets/vendor/libs/dropzone/dropzone.css')}}" />

  <!-- Helpers -->
  <script src="{{ asset('backend/assets/vendor/js/helpers.js') }}"></script>
  <script src="{{ asset('backend/assets/vendor/js/template-customizer.js') }}"></script>
  <script src="{{ asset('backend/assets/js/config.js') }}"></script>
</head>
<body>
  <!-- Layout wrapper -->
  <div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
      <!-- Menu -->
      @include('backend.sidebar')
      <!-- / Menu -->

      <!-- Layout container -->
      <div class="layout-page">
        <!-- Navbar -->
        @include('backend.header')
        <!-- / Navbar -->

        <!-- Content wrapper -->
        <div class="content-wrapper">
          <!-- Content -->
          @yield('content')
          <!-- / Content -->

          <!-- Footer -->
          @include('backend.footer')
          <!-- / Footer -->
          <div class="content-backdrop fade"></div>
        </div>
        <!-- Content wrapper -->
      </div>
      <!-- / Layout page -->
    </div>

    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>
    <div class="drag-target"></div>
  </div>

  <!-- Core JS -->
  <script src="{{ asset('backend/assets/vendor/libs/jquery/jquery.js') }}"></script>
  <script src="{{ asset('backend/assets/vendor/libs/popper/popper.js') }}"></script>
  <script src="{{ asset('backend/assets/vendor/js/bootstrap.js') }}"></script>
  <script src="{{ asset('backend/assets/vendor/libs/node-waves/node-waves.js') }}"></script>
  <script src="{{ asset('backend/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
  <script src="{{ asset('backend/assets/vendor/libs/hammer/hammer.js') }}"></script>
  <script src="{{ asset('backend/assets/vendor/libs/i18n/i18n.js') }}"></script>
  <script src="{{ asset('backend/assets/vendor/libs/typeahead-js/typeahead.js') }}"></script>
  <script src="{{ asset('backend/assets/vendor/js/menu.js') }}"></script>

  <!-- Vendors JS -->
  <script src="{{ asset('backend/assets/vendor/libs/apex-charts/apexcharts.js') }}"></script>
  <script src="{{ asset('backend/assets/vendor/libs/swiper/swiper.js') }}"></script>
  <script src="{{ asset('backend/assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js') }}"></script>
  <script src="{{asset('backend/assets/vendor/libs/dropzone/dropzone.js')}}"></script>


  <!-- Main JS -->
  <script src="{{ asset('backend/assets/js/main.js') }}"></script>

  <!-- Page JS -->
  <script src="{{ asset('backend/assets/js/dashboards-analytics.js') }}"></script>
  <script src="{{asset('backend/assets/js/forms-file-upload.js')}}"></script>

  <!-- Custom Scripts -->
  @yield('js')
</body>
</html>
