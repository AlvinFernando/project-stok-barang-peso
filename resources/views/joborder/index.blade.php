@extends('layouts.app')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0 text-bold">JOB ORDER</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="container-fluid">
                @if(count($errors)>0)
                @foreach($errors->all() as $error)
                    <div class="alert alert-danger" role="alert">
                        {{ $error }}
                    </div>
                @endforeach
            @endif

            @if(Session::has('success'))
                <div class="alert alert-success" role="alert">
                    {{ Session('success') }}
                </div>
            @endif
            <!-- row -->
            <div class="row">
                <div class="col-md-12">
                    <!-- .card -->
                    <div class="card">

                        <!-- .card-header -->
                        <div class="card-header">
                            <h1 class="card-title">JOB ORDER</h1>
                            <h6 class="float-right">
                                <a href="{{ route('joborder.create') }}">
                                    <i class="fas fa-plus text-dark"></i>
                                </a>
                            </h6>
                        </div>
                        <!-- /.card-header -->

                        <!-- .card-body -->
                        <div class="card-body">
                            <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                <!-- Cetak Data Keseluruhan -->
                                {{-- <div class="row">
                                    <div class="col-md-12">
                                        <div style="float: right; margin-bottom: 10px;">
                                            <a href="#" class="btn btn-success btn-sm"><i class="fas fa-file nav-icon text-light"></i> Cetak Excel</a>
                                            <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-file nav-icon text-light"></i> Cetak PDF</a>
                                        </div>
                                    </div>
                                </div> --}}
                                <!-- Cetak Data Keseluruhan -->

                                <div class="row">
                                    <div class="col-sm-12">
                                        <table id="example2" class="table table-bordered table-hover dataTable dtr-inline" role="grid" aria-describedby="example2_info">
                                            <thead>
                                                <tr role="row">
                                                    <th>No</th>
                                                    <th>Tanggal</th>
                                                    <th>Customer</th>
                                                    <th>Jenis Order</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @forelse($job_orders as $result => $jborders)
                                                    <tr>
                                                        <td>{{ $result + $job_orders->firstItem() }}</td>
                                                        <td>{{ showDate($jborders->tanggal, 'd F Y') }}</td>
                                                        <td>{{ $jborders->customer }}</td>
                                                        <td>{{ $jborders->jenis_order }}</td>
                                                        <td class="text-center">
                                                            <form action="{{ route('joborder.destroy', $jborders->id )}}" method="POST">
                                                                @csrf
                                                                @method('delete')
                                                                <a href="{{ route('joborder.show', $jborders->id) }}" class="btn btn-info btn-sm"><i class="fas fa-eye nav-icon text-light"></i></a>
                                                                @if (Auth::user()->level == 'admin')
                                                                    <a href="{{ route('joborder.edit', $jborders->id) }}" class="btn btn-warning btn-sm"><i class="fas fa-edit nav-icon text-light"></i></a>
                                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash nav-icon text-light"></i></button>
                                                                @endif
                                                            </form>
                                                        </td>
                                                    </tr>
                                                @empty
                                                    <tr>
                                                        <td colspan="5">Tidak Ada Job Order</td>
                                                    </tr>
                                                @endforelse
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 col-md-5">
                                        <div class="dataTables_info" id="example2_info" role="status" aria-live="polite">
                                                Showing 1 to 10 of 57 entries
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-7">
                                        <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->

                    </div>
                    <!-- .card -->
                </div>
            </div>
            <!-- /.row -->

        </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
@endsection
