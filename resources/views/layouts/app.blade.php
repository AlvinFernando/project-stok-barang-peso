<!DOCTYPE html>
<html lang="en">
      <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>{{ $title }}</title>

            <!-- Google Font: Source Sans Pro -->
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@500&family=Rubik:wght@300;600&family=Varela+Round&display=swap" rel="stylesheet">
            <!-- Font Awesome Icons -->
            <link rel="stylesheet" href="{{ asset('admin/plugins/fontawesome-free/css/all.min.css') }}">
            <!-- overlayScrollbars -->
            <link rel="stylesheet" href="{{ asset('admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
            <!-- Theme style -->
            <link rel="stylesheet" href="{{ asset('admin/dist/css/adminlte.min.css') }}">
            <link rel="stylesheet" href="{{ asset('admin/dist/css/coba.css') }}">
            <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('admin/dist/img/logo pesoprinting2.png') }}">
            <style>
                *{
                    font-family: 'Varela Round', sans-serif;
                }
            </style>
      </head>
      <body class="hold-transition light-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
            <div class="wrapper">

                  <!-- Preloader -->
                  <div class="preloader flex-column justify-content-center align-items-center">
                        <img class="animation__wobble" src="{{ asset('admin/dist/img/logo pesoprinting2.png') }}" alt="peso" height="350" width="380">
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
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
            <script src="https://code.jquery.com/jquery-1.9.1.js"></script>
            <script type="text/javascript">


                $('.adddeliveryorder').on('click', function(){
                    adddeliveryorder();
                });
                function adddeliveryorder(){
                    // var deliveryorder = '<div class="row-datas"><label class="font-weight bold">Tambah Pesanan</label><hr class="mt-0"><div class="row"><div class="col-md-6"><div class="form-group">{{ Form::label('description', 'Description: ', ['class' => 'control-label'], false) }}{{ Form::text('description[]', '', array('class'=>'form-control')) }}</div></div><div class="col-md-6"><div class="form-group">{{ Form::label('qty', 'Qty: ', ['class' => 'control-label'], false) }}{{ Form::text('qty[]', '', array('class'=>'form-control')) }}</div></div></div><div class="row"><div class="col-md-6"></div><div class="col-md-6"><div class="form-group">{{ Form::label('unit', 'Unit: ', ['class' => 'control-label'], false) }}{!! Form::select('unit[]',['dos'=>'Dos','btl'=>'Btl','lembar'=>'Lembar','koli'=>'Koli','pcs'=>'Pcs','box'=>'Box']) !!}</div></div></div><div class="row"><div class="col-md-12"><div class="form-group"><div class="col-sm-12"><a href="javascript:" class="btn btn-danger" id="removed" style="float: right;">Hapus</a></div></div></div></div></div>';
                    var deliveryorder = '<tr class="row-datas"><td>{{ Form::text('description[]', '', array('class'=>'form-control')) }}</td><td>{{ Form::text('qty[]', '', array('class'=>'form-control')) }}</td><td><select name ="unit[]" class="form-control" id="exampleFormControlSelect1"><option value="0" disabled="true" selected="true">== Unit ==</option><option value="Dos" {{(old('unit') == 'Dos') ? 'selected' : ''}}>Dos</option><option value="Btl" {{(old('unit') == 'Btl') ? 'selected' : ''}}>Btl</option><option value="Lembar" {{(old('unit') == 'Lembar') ? 'selected' : ''}}>Lembar</option><option value="Koli" {{(old('unit') == 'Koli') ? 'selected' : ''}}>Koli</option><option value="Pcs" {{(old('unit') == 'Pcs') ? 'selected' : ''}}>Pcs</option><option value="Box" {{(old('unit') == 'Box') ? 'selected' : ''}}>Box</option></select></div></td><td><a href="javascript:" class="btn btn-danger btn-sm" id="removed" style="float: right;"><i class="fas fa-minus text-light"></i></a></td></tr>';
                    $('.deliveryorder').append(deliveryorder);
                };

                $('.addinvoices').on('click', function(){
                    addinvoices();
                });

                function addinvoices(){
                    // var invoices = '<div class="row-datas"><label class="font-weight bold">Tambah Pesanan</label><hr class="mt-0"><div class="row"><div class="col-md-6"><div class="form-group">{{ Form::label('description', 'Description: ', ['class' => 'control-label'], false) }}{{ Form::text('description[]', '', array('class'=>'form-control')) }}</div></div><div class="col-md-6"><div class="form-group">{{ Form::label('qty', 'Qty: ', ['class' => 'control-label'], false) }}{{ Form::text('qty[]', '', array('class'=>'form-control')) }}</div></div></div><div class="row"><div class="col-md-6"></div><div class="col-md-6"><div class="form-group">{{ Form::label('unit', 'Unit: ', ['class' => 'control-label'], false) }}{!! Form::select('unit[]',['dos'=>'Dos','btl'=>'Btl','lembar'=>'Lembar','koli'=>'Koli','pcs'=>'Pcs','box'=>'Box']) !!}</div></div></div><div class="row"><div class="col-md-12"><div class="form-group"><div class="col-sm-12"><a href="javascript:" class="btn btn-danger" id="removed" style="float: right;">Hapus</a></div></div></div></div></div>';
                    var invoices = '<tr><td width="350px"><div class="form-group">{{ Form::text('description[]', '', array('class'=>'form-control')) }}</div></td><td width="100px"><input type="number" class="form-control" id="qty1" onchange="Sums(this)" name="qty[]"></td><td width="130px"><select name ="unit[]" class="form-control" id="exampleFormControlSelect1"><option value="0" disabled="true" selected="true">Unit</option><option value="Dos" {{(old('unit') == 'Dos') ? 'selected' : ''}}>Dos</option><option value="Btl" {{(old('unit') == 'Btl') ? 'selected' : ''}}>Btl</option><option value="Lembar" {{(old('unit') == 'Lembar') ? 'selected' : ''}}>Lembar</option><option value="Koli" {{(old('unit') == 'Koli') ? 'selected' : ''}}>Koli</option><option value="Pcs" {{(old('unit') == 'Pcs') ? 'selected' : ''}}>Pcs</option><option value="Box" {{(old('unit') == 'Box') ? 'selected' : ''}}>Box</option></select></td><td width="110px"><input type="number" class="form-control" id="harga1" onchange="Sums(this)" name="harga[]" min="1" step="any"></td><td width="110px"><input type="number" class="form-control" id="jumlah1" name="jumlah[]" value="0" min="1" step="any" readonly></td><td width="1px"><a href="javascript:" id="removed" class="float-right btn btn-danger btn-sm" style="margin-bottom: 10px;"><i class="fas fa-minus text-light"></i></a></td></tr>';
                    $('.invoices').append(invoices);
                    // var v = $("#TRow").clone().appendTo(".invoices");
                    // $(v).find("input").val('');
                    // $(v).removeClass("d-none");
                };

                $(document).on('click','#removed', function(){
                    $(this).parents('.row-datas').remove();
                    GetTotal();
                });

                // function delinvoices(v){
                //     $(v).parent().parent().remove();
                //     GetTotal();
                // };

                function Sums(v){
                    var index = $(v).parent().parent().index();
                    var qtyy = document.getElementsByName("qty[]")[index].value;
                    var hargaa = document.getElementsByName("harga[]")[index].value;
                    var jumlahh = qtyy*hargaa;
                    document.getElementsByName("jumlah[]")[index].value = jumlahh;

                    GetTotal();
                }

                function GetTotal(){
                    var summ = 0;
                    var totalls = document.getElementsByName("jumlah[]");
                    for (let index = 0; index < totalls.length; index++){
                        var ttl = totalls[index].value;
                        summ = +(summ)+ +(ttl) ;
                    }

                    document.getElementById("total1").value = summ;
                }

            </script>

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
            @stack('script')
      </body>
</html>
