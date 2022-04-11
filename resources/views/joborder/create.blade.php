@extends('layouts.app')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0 text-bold">INPUT JOB ORDERS</h1>
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
                            <h3 class="card-title">JOB ORDERS</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="#" method='POST'>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="tanggal">Tanggal</label>
                                            {{-- <input type="text" name="tanggal" id="tanggal" class="form-control" value="{{ $joborder->created_at }}"> --}}
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="customer">Nama Customer</label>
                                            <input type="text" name="customer" id="customer" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="jenis_order">Jenis Order</label>
                                            <input type="text" name="jenis_order" id="jenis_order" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="size">Size</label>
                                            <input type="text" name="size" id="size" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="color">Color</label>
                                            <input type="text" name="color" id="color" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="qty">Qty</label>
                                            <input type="text" name="qty" id="qty" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="pages">Pages</label>
                                            <input type="text" name="pages" id="pages" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="pegawai">Attented</label>
                                            <input type="text" name="pegawai" id="pegawai" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="deadline">Deadline</label>
                                            <input type="text" name="deadline" id="deadline" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="sign">Sign</label>
                                            <input type="text" name="sign" id="sign" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <a href="{{ route('barang.index') }}" class="btn btn-secondary btn-sm">Back</a>
                                <button type="submit" class="btn btn-primary float-right">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!--/. container-fluid -->
    </section>
    <!-- /.content -->
@endsection
