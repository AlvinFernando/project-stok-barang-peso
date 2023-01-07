<!DOCTYPE html>
<html lang="en">
      <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>{{ $title }}</title>
      </head>
      <body class="hold-transition light-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
            <div class="wrapper">

                 @yield('content')
            </div>
            <!-- ./wrapper -->

            <!-- REQUIRED SCRIPTS -->
            <!-- jQuery -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
            <script type="text/javascript" src="admin/dist/js/bootstrap.min.js"></script>
            <script type="text/javascript" src="admin/dist/js/jquery-2.2.4.min.js"></script>
            <script type="text/javascript" src="admin/dist/js/jquery.printPage.js"></script>
      </body>
</html>
