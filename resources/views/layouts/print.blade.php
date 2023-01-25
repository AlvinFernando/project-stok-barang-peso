<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        {{-- <title>{{ $title }}</title> --}}

        <link rel="stylesheet" href="{{ asset('admin/dist/css/adminlte.min.css') }}">
        <style>
            *{
                margin:0;
                padding:0;
                box-sizing: border-box;
            }

            body{
                font-family: 'Varela Round', sans-serif;
                font-size: 12px;
                background-image: url('admin/dist/img/bg peso.jpg');
                background-repeat: no-repeat;
                background-size: cover;
            }

            .invoice{
                margin: auto;
                padding: 20px;
                opacity: .75;
            }

            .container{
                margin-top: 20px;
            }

            .tableinv{
                height: 100px;
            }

            .trrx{
                border-right: 1px solid black;
                border-left: 1px solid black;
            }
        </style>

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
