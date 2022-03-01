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
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table id="example2" class="table table-bordered table-hover dataTable dtr-inline" role="grid" aria-describedby="example2_info">
                                            <thead>
                                                <tr role="row">
                                                    <th>No</th>
                                                    <th>Tanggal</th>
                                                    <th>Customer</th>
                                                    <th>Jenis Order</th>
                                                    <th>Size</th>
                                                    <th>page</th>
                                                    <th>Material</th>
                                                    <th>Color</th>
                                                    <th>Finishing</th>
                                                    <th>Qty</th>
                                                    <th>Attented By</th>
                                                    <th>Deadline</th>
                                                    <th>People</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>K0000120 okt 2021</td>
                                                    <td>Franco</td>
                                                    <td>FC</td>
                                                    <td>100 x 300</td>
                                                    <td>2</td>
                                                    <td>5suhcoid</td>
                                                    <td>FC</td>
                                                    <td>Completed</td>
                                                    <td>5</td>
                                                    <td>Marito</td>
                                                    <td>2 Des 2021</td>
                                                    <td>Junita DOs Santos</td>
                                                    <td>
                                                        <a href="#" class="btn btn-info btn-sm"><i class="fas fa-eye nav-icon text-light"></i></a>
                                                        <a href="#" class="btn btn-warning btn-sm"><i class="fas fa-edit nav-icon text-light"></i></a>
                                                        <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash nav-icon text-light"></i></a>
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
                    <!-- .card -->
                </div>
            </div>
            <!-- /.row -->

        </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
@endsection
