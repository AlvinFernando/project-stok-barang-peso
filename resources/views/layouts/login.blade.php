
<!DOCTYPE html>
<html lang="en">
      <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>{{ $title }}</title>

            <!-- Google Font: Source Sans Pro -->
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
            <!-- Font Awesome -->
            <link rel="stylesheet" href="{{ asset('admin/plugins/fontawesome-free/css/all.min.css') }}">
            <!-- icheck bootstrap -->
            <link rel="stylesheet" href="{{ asset('admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
            <!-- Theme style -->
            <link rel="stylesheet" href="{{ asset('admin/dist/css/adminlte.min.css') }}">
            <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('admin/dist/img/logo pesoprinting2.png') }}">
      </head>
      <body class="hold-transition login-page">
            @yield('content')

            <!-- jQuery -->
            <script src="{{ asset('admin/plugins/jquery/jquery.min.js') }}"></script>
            <!-- Bootstrap 4 -->
            <script src="{{ asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
            <!-- AdminLTE App -->
            <script src="{{ asset('admin/dist/js/adminlte.min.js') }}"></script>
      </body>
</html>
