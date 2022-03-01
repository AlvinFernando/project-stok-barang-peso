@extends('layouts.app')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <!-- .container-fluid -->
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0 text-bold">DASHBOARD</h1>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Info boxes -->
            @include('dashboards.data')

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <!-- .card-header -->
                        <div class="card-header">
                            <h3 class="card-title">DATA STOK BARANG</h3>
                            <h4 class="float-right">
                                <a href="{{ route('barang.create') }}">
                                    <i class="fas fa-plus"></i>
                                </a>
                            </h4>
                        </div>
                        <!-- /.card-header -->

                        <!-- .card-body -->
                        <div class="card-body">
                            <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                <div class="row">
                                    <div class="col-sm-12 col-md-6"></div>
                                    <div class="col-sm-12 col-md-6"></div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12">
                                        <table id="example2" class="table table-bordered table-hover dataTable dtr-inline" role="grid" aria-describedby="example2_info">
                                            <thead>
                                                <tr role="row">
                                                    <th>No</th>
                                                    <th>Item Description</th>
                                                    <th>Unit</th>
                                                    <th>Qty</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>HVS 80gsm A3 +</td>
                                                    <td>Koli</td>
                                                    <td>5</td>
                                                    <td>
                                                        <span class="badge badge-primary">Ada</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Ap 160 gsm A3 +</td>
                                                    <td>Koli</td>
                                                    <td>0</td>
                                                    <td>
                                                        <span class="badge badge-danger">Habis</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>HVS 80gsm A3 (sidu)</td>
                                                    <td>Koli</td>
                                                    <td>8</td>
                                                    <td>
                                                        <span class="badge badge-primary">Ada</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>HVS 80gsm A4 (sidu)</td>
                                                    <td>Koli</td>
                                                    <td>12</td>
                                                    <td>
                                                        <span class="badge badge-primary">Ada</span>
                                                    </td>
                                                </tr>
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
                                            <ul class="pagination">
                                                <li class="paginate_button page-item previous disabled" id="example2_previous">
                                                    <a href="#" aria-controls="example2" data-dt-idx="0" tabindex="0" class="page-link">Previous</a>
                                                </li>
                                                <li class="paginate_button page-item active">
                                                    <a href="#" aria-controls="example2" data-dt-idx="1" tabindex="0" class="page-link">1</a>
                                                </li>
                                                <li class="paginate_button page-item ">
                                                    <a href="#" aria-controls="example2" data-dt-idx="2" tabindex="0" class="page-link">2</a>
                                                </li>
                                                <li class="paginate_button page-item ">
                                                    <a href="#" aria-controls="example2" data-dt-idx="3" tabindex="0" class="page-link">3</a>
                                                </li>
                                                <li class="paginate_button page-item next" id="example2_next">
                                                    <a href="#" aria-controls="example2" data-dt-idx="7" tabindex="0" class="page-link">Next</a>
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
        </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
@endsection
