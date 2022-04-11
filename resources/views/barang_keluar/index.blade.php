@extends('layouts.app')
@section('content')
      <!-- Content Header (Page header) -->
      <div class="content-header">
            <div class="container-fluid">
                  <div class="row mb-2">
                        <div class="col-sm-12">
                              <h1 class="m-0 text-bold">DATA BARANG KELUAR</h1>
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
                              <div class="card">
                                    <div class="card-header">
                                          <h1 class="card-title">DATA BARANG KELUAR</h1>
                                          <h6 class="float-right">
                                                <a href="{{ route('barang.create') }}">
                                                      <i class="fas fa-plus text-dark"></i>
                                                </a>
                                          </h6>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                          <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                                <div class="row">
                                                      <div class="col-sm-12">
                                                            <table id="example2" class="table table-bordered table-hover dataTable dtr-inline" role="grid" aria-describedby="example2_info">
                                                                  <thead>
                                                                        <tr role="row">
                                                                              <th>No</th>
                                                                              <th>Kode Barang</th>
                                                                              <th>Item Description</th>
                                                                              <th>Qty</th>
                                                                              <th>Action</th>
                                                                        </tr>
                                                                  </thead>
                                                                  <tbody>
                                                                        <tr>
                                                                              <td>1</td>
                                                                              <td>K00001</td>
                                                                              <td>HVS 80gsm A3 +</td>
                                                                              <td>5</td>
                                                                              <td>
                                                                                    <a href="#" class="btn btn-warning btn-sm">Edit</a>
                                                                                    <a href="#" class="btn btn-danger btn-sm">Delete</a>
                                                                              </td>
                                                                        </tr>
                                                                        <tr>
                                                                              <td>2</td>
                                                                              <td>K00002</td>
                                                                              <td>HVS 80gsm A3 +</td>
                                                                              <td>0</td>
                                                                              <td>
                                                                                    <a href="#" class="btn btn-warning btn-sm">Edit</a>
                                                                                    <a href="#" class="btn btn-danger btn-sm">Delete</a>
                                                                              </td>
                                                                        </tr>
                                                                        <tr>
                                                                              <td>3</td>
                                                                              <td>K00003</td>
                                                                              <td>HVS 80gsm A3 +</td>
                                                                              <td>8</td>
                                                                              <td>
                                                                                    <a href="#" class="btn btn-warning btn-sm">Edit</a>
                                                                                    <a href="#" class="btn btn-danger btn-sm">Delete</a>
                                                                              </td>
                                                                        </tr>
                                                                        <tr>
                                                                              <td>4</td>
                                                                              <td>K00004</td>
                                                                              <td>HVS 80gsm A3 +</td>
                                                                              <td>12</td>
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
                        </div>
                  </div>
                  <!-- /.row -->



            </div><!--/. container-fluid -->
      </section>
      <!-- /.content -->
@endsection
