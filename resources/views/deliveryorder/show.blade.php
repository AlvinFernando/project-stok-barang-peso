@extends('layouts.app')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0 text-bold">DETAIL DELIVERY ORDER</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Info boxes -->
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">DETAIL DELIVERY ORDER</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <div class="card-body">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="invoice p-3 mb-3">
                                            <!-- title row -->
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <img src="{{ asset('admin/dist/img/logo pesoprinting2.png') }}" alt="peso"
                                                    class="brand-image" style="width: 125px; height: 105px; margin-left: 100px;">
                                                </div>
                                                <div class="col-md-8 float-right">
                                                    <div style="margin-left: 250px; margin-top: 30px; font-size: 18px;">
                                                        <b>No Delivery Order : {{ $delivery_orders->no_do }}</b><br>
                                                        To : <strong>{{ $delivery_orders->customer }}</strong><br>
                                                    </div>
                                                </div>
                                            <!-- /.col -->
                                            </div>

                                            <br>
                                            <!-- Table row -->
                                            <div class="row">
                                                <div class="col-12 table-responsive">
                                                    <table class="table table-striped">
                                                        <thead>
                                                            <tr>
                                                                <th>Description</th>
                                                                <th>Qty</th>
                                                                <th>Unit</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($delivery_order_barangs as $v => $dob)
                                                                <tr>
                                                                    <td>{{ $dob->description }}</td>
                                                                    <td>{{ $dob->qty }}</td>
                                                                    <td>{{ $dob->unit }}</td>
                                                                </tr>
                                                            @endforeach

                                                        </tbody>
                                                    </table>
                                                </div>
                                                <!-- /.col -->
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12" style="font-size: 16px;">
                                                    <strong>Date</strong> : {{ $delivery_orders->created_at->toFormattedDateString() }} <br>
                                                    <strong>Name</strong> : {{ $delivery_orders->nama }} <br>
                                                    <strong>Phone</strong> : {{ $delivery_orders->phone }} <br>
                                                </div>
                                            </div>
                                            <!-- /.row -->

                                            <br>
                                            <!-- this row will not appear when printing -->
                                            <div class="row no-print">
                                                <div class="col-12">
                                                    <a href="{{ route('deliveryorder.index') }}" class="btn btn-secondary btn-sm">Back</a>
                                                    <a href="{{ route('cetak_do', $delivery_orders->id) }}" rel="noopener"
                                                    target="_blank" class="btn btn-default float-right"><i class="fas fa-print"></i> CETAK </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
            <!-- /.row -->

        </div>
        <!--/. container-fluid -->
    </section>
    <!-- /.content -->
@endsection
