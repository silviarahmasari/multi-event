<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>@yield('title')</title>
    @include('layout/css_global')
    @yield('custom_css')
</head>

<body class="layout-3">
  <div id="app">
    <div class="main-wrapper container">
      @include('layout/navbar_u')
      {{-- @include('layout/navbar_u')
      @include('layout/sidebar_u') --}}
      <!-- Main Content -->
      <div class="main-content">
      <section class="section">
          @yield('content')
          <div class="section-body">
            @yield('script')
        </section>
      </div>
      </div>
      @include('layout/footer_u')
    </div>
  </div>
@include('layout/js_global')
@yield('custom_script')
</body>
</html>
