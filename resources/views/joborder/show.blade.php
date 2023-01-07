@extends('layouts.app')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0 text-bold">DETAIL JOB ORDERS</h1>
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
                            <h3 class="card-title">DETAIL JOB ORDERS</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->

                        <!-- card body-->
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                  <tr>
                                    <th colspan="2">JOB ORDER (Production)</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <strong>Customer : </strong>{{ $job_orders->customer }} <br>
                                            <strong>Jenis Order : </strong>{{ $job_orders->jenis_order }} <br>
                                            <strong>Size : </strong>{{ $job_orders->size }} <br>
                                            <strong>Materials : </strong>{{ $job_orders->materials }} <br>
                                            <strong>Pages : </strong>{{ $job_orders->pages }} <br>
                                        </td>
                                        <td>
                                            <strong>Color : </strong>{{ $job_orders->color }} <br>
                                            <strong>Finishing : </strong>{{ $job_orders->finishing }} <br>
                                            <strong>Quantity : </strong>{{ $job_orders->qty }} <br>
                                            <strong>Attented By : </strong>{{ $job_orders->pegawais['nama'] }} <br>
                                            <strong>Deadline : </strong>{{ $job_orders->deadline }} <br>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <a href="{{ route('joborder.index') }}" class="btn btn-secondary btn-sm">Back</a>
                            <button type="button" class="btn btn-danger float-right"><i class="fas fa-download"></i>
                                Download PDF
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!--/. container-fluid -->
    </section>
    <!-- /.content -->
@endsection
