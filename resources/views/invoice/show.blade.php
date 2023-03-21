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
                                                        <b>No Invoice : {{ $invoices->no_inv }}</b><br>
                                                        To : <strong>{{ $invoices->customer }}</strong><br>
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
                                                                <th>Harga</th>
                                                                <th>Jumlah</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($invoices_barangs as $v => $invoics)
                                                                <tr>
                                                                    <td>{{ $invoics->description }}</td>
                                                                    <td>{{ $invoics->qty }}</td>
                                                                    <td>{{ $invoics->unit }}</td>
                                                                    <td>$ {{ number_format($invoics->harga, 2, '.', '') }}</td>
                                                                    <td>$ {{ number_format($invoics->jumlah, 2, '.', '') }}</td>
                                                                </tr>
                                                            @endforeach
                                                        </tbody>
                                                        <tbody>
                                                                <tr>
                                                                    <td colspan="4">TOTAL</td>
                                                                    <td>$ {{ number_format($invoices->total, 2, '.', '') }} </td>
                                                                </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <!-- /.col -->
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12" style="font-size: 16px;">
                                                    <strong>PAYMENT SHOULD BE :  {{ $invoices->terbilang }}<br></strong>
                                                    <strong>IBAN : TL38 0050 6010 0005 4765 620 <br></strong>
                                                    <strong>BANK MANDIRI : 601-00-0054765-6 <br></strong>
                                                    <strong>RECEIVED : <br></strong>
                                                    <strong>Date : {{ $invoices->created_at->toFormattedDateString() }}<br></strong>
                                                    <strong>Name : {{ $invoices->nama }}<br></strong>
                                                    <strong>Phone : {{ $invoices->telp }}<br></strong>
                                                    <strong>Signature :  <br></strong>
                                                </div>
                                            </div>
                                            <!-- /.row -->

                                            <br>
                                            <!-- this row will not appear when printing -->
                                            <div class="row no-print">
                                                <div class="col-12">
                                                    <a href="{{ route('invoice.index') }}" class="btn btn-secondary btn-sm">Back</a>
                                                    <a href="{{ route('cetak_iv', $invoices->id) }}" rel="noopener"
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
