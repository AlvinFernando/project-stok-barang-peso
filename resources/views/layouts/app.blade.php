<!DOCTYPE html>
<html lang="en">
      <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>{{ $title }}</title>

            <!-- Google Font: Source Sans Pro -->
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Teko:wght@300&display=swap" rel="stylesheet">
            <!-- Font Awesome Icons -->
            <link rel="stylesheet" href="{{ asset('admin/plugins/fontawesome-free/css/all.min.css') }}">
            <!-- overlayScrollbars -->
            <link rel="stylesheet" href="{{ asset('admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
            <!-- Theme style -->
            <link rel="stylesheet" href="{{ asset('admin/dist/css/adminlte.min.css') }}">
            <link rel="stylesheet" href="{{ asset('admin/dist/css/coba.css') }}">
      </head>
      <body class="hold-transition light-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
            <div class="wrapper">

                  <!-- Preloader -->
                  <div class="preloader flex-column justify-content-center align-items-center">
                        <img class="animation__wobble" src="{{ asset('admin/dist/img/LOGO PESO VECTOR.png') }}" alt="peso" height="100" width="350">
                  </div>
                  
                        @include('layouts.navbar')
                        @include('layouts.sidebar')

                  <!-- Content Wrapper. Contains page content -->
                  <div class="content-wrapper">
                        @yield('content')
                  </div>
                  <!-- /.content-wrapper -->

                  <!-- Control Sidebar -->
                  <aside class="control-sidebar control-sidebar-dark">
                  <!-- Control sidebar content goes here -->
                  </aside>
                  <!-- /.control-sidebar -->

                  <!-- Main Footer -->
                  @include('layouts.footer')
            </div>
            <!-- ./wrapper -->

            <!-- REQUIRED SCRIPTS -->
            <!-- jQuery -->
            <script src="{{ asset('admin/plugins/jquery/jquery.min.js') }}"></script>
            <!-- Bootstrap -->
            <script src="{{ asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
            <!-- overlayScrollbars -->
            <script src="{{ asset('admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
            <!-- AdminLTE App -->
            <script src="{{ asset('admin/dist/js/adminlte.js') }}"></script>

            <!-- PAGE PLUGINS -->
            <!-- jQuery Mapael -->
            <script src="{{ asset('admin/plugins/jquery-mousewheel/jquery.mousewheel.js') }}"></script>
            <script src="{{ asset('admin/plugins/raphael/raphael.min.js') }}"></script>
            <script src="{{ asset('admin/plugins/jquery-mapael/jquery.mapael.min.js') }}"></script>
            <script src="{{ asset('admin/plugins/jquery-mapael/maps/usa_states.min.js') }}"></script>
            <!-- ChartJS -->
            <script src="{{ asset('admin/plugins/chart.js/Chart.min.js') }}"></script>

            <!-- AdminLTE for demo purposes -->
            <script src="{{ asset('admin/dist/js/demo.js') }}"></script>
            <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
            <script src="{{ asset('admin/dist/js/pages/dashboard2.js') }}"></script>
      </body>
</html>
