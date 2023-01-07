@extends('layouts.app')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0 text-bold">DATA BARANG MASUK</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
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
            <!-- Info boxes -->
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h1 class="card-title">DATA BARANG MASUK</h1>
                            <h6 class="float-right">
                                <a href="{{ route('barang_masuk.create') }}">
                                    <i class="fas fa-plus text-dark"></i>
                                </a>
                            </h6>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                <!-- Cetak Data Keseluruhan -->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div style="float: right; margin-bottom: 10px;">
                                            <a href="#" class="btn btn-success btn-sm"><i class="fas fa-file nav-icon text-light"></i> Cetak Excel</a>
                                            <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-file nav-icon text-light"></i> Cetak PDF</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Cetak Data Keseluruhan -->
                                
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table id="example2" class="table table-bordered table-hover dataTable dtr-inline" role="grid" aria-describedby="example2_info">
                                            <thead>
                                                <tr role="row">
                                                    <th>No</th>
                                                    <th>Nama Barang</th>
                                                    <th>Supplier</th>
                                                    <th>Qty</th>
                                                    <th>Tanggal</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @forelse($barangmasuks as $result => $brgs)
                                                    <tr>
                                                        <td>{{ $result + $barangmasuks->firstItem() }}</td>
                                                        <td>{{ $brgs->barangs['item_description'] }}</td>
                                                        <td>{{ $brgs->supplier }}</td>
                                                        <td>{{ $brgs->qty }}</td>
                                                        <td>{{ $brgs->tanggal }}</td>
                                                        <td>
                                                            <form action="{{ route('barang_masuk.destroy', $brgs->id )}}" method="POST">
                                                                @csrf
                                                                @method('delete')
                                                                <a href="#" class="btn btn-info btn-sm"><i class="fas fa-eye nav-icon text-light"></i></a>
                                                                <a href="{{ route('barang_masuk.edit', $brgs->id) }}" class="btn btn-warning btn-sm"><i class="fas fa-edit nav-icon text-light"></i></a>
                                                                <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash nav-icon text-light"></i></button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                @empty
                                                    <tr>
                                                        <td colspan="6">Tidak Ada Barang Masuk</td>
                                                    </tr>
                                                @endforelse
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 col-md-5">
                                        <div class="dataTables_info" id="example2_info" role="status" aria-live="polite">
                                            {{ $barangmasuks->links() }}
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-7">
                                        <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">
                                            <ul class="pagination">
                                                <li class="paginate_button page-item next" id="example2_next">

                                                </li>
                                            </ul>
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
