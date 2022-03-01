@extends('layouts.app')
@section('content')
      <!-- Content Header (Page header) -->
      <div class="content-header">
            <div class="container-fluid">
                  <div class="row mb-2">
                        <div class="col-sm-12">
                              <h1 class="m-0 text-bold">INPUT DATA BARANG</h1>
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
                        <div class="col-md-6">
                              <div class="card card-primary">
                                    <div class="card-header">
                                          <h3 class="card-title">INPUT BARANG</h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <!-- form start -->
                                    <form action="#" method='POST'>
                                          <div class="card-body">
                                                <div class="form-group">
                                                      <label for="kode_barang">Kode Barang</label>
                                                      <input type="text" name="kode_barang" id="kode_barang" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                      <label for="item_desc">Item Description</label>
                                                      <input type="text" name="item_desc" id="item_desc" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                      <label for="unit">Unit</label>
                                                      <select class="custom-select rounded-0" id="exampleSelectRounded0">
                                                            <option>Koli</option>
                                                            <option>Dos</option>
                                                            <option>Pcs</option>
                                                            <option>Box</option>
                                                            <option>Btl</option>
                                                            <option>Lembar</option>
                                                      </select>
                                                </div>
                                                <div class="form-group">
                                                      <label for="qty">Qty</label>
                                                      <input type="text" name="qty" id="qty" class="form-control">
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

            </div><!--/. container-fluid -->
      </section>
      <!-- /.content -->
@endsection
