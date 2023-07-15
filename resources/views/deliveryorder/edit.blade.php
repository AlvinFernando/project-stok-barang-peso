@extends('layouts.app')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0 text-bold">UBAH DELIVERY ORDERS</h1>
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
                            <h3 class="card-title">UBAH DELIVERY ORDERS</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                            {{ Form::open([
                                'action' => ['DeliveryOrderController@update', $delivery_orders->id],
                                'method' => 'PUT',
                                'enctype' => "multipart/form-data"
                            ]) }}
                            {{ csrf_field() }}
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="no_do">No. Delivery Order</label>
                                            <input type="text" class="form-control"
                                            name="no_do" value="{{ $delivery_orders->no_do }}" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="tanggal">Tanggal</label>
                                            <input type="text" class="form-control"
                                            name="tanggal" value="{{ $delivery_orders->tanggal }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="nama">Nama</label>
                                            <input type="text" class="form-control"
                                            name="nama" value="{{ $delivery_orders->nama }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="customer">To</label>
                                            <input type="text" class="form-control"
                                            name="customer" value="{{ $delivery_orders->customer }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="phone">Phone</label>
                                            <input type="text" class="form-control"
                                            name="phone" value="{{ $delivery_orders->phone }}">
                                        </div>
                                    </div>
                                </div>

                                {{-- <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <a href="javascript:" class="adddeliveryorder btn btn-primary float-right">Tambah Pesanan</a>
                                            </div>
                                        </div>
                                        <br><br>
                                    </div>
                                </div> --}}
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">TAMBAH PESANAN DELIVERY ORDER</h3>

                                    </div>

                                    <div class="card-body p-0">
                                        <table id="dataTables" class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Description</th>
                                                    <th>Qty</th>
                                                    <th>Unit</th>
                                                    <th>
                                                        <a href="javascript:" class="adddeliveryorder float-right btn btn-primary btn-sm" style="margin-bottom: 10px;">
                                                            <i class="fas fa-plus text-light"></i>
                                                        </a>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody class="deliveryorder">
                                                @foreach ($delivery_order_barangs as $delivery_order_barang)
                                                <tr class="row-datas">
                                                    <td>
                                                        <input type="text" name="description[]" id="description" class="form-control" value="{!! $delivery_order_barang->description !!}">
                                                    </td>
                                                    <td>
                                                        <input type="text" name="qty[]" id="qty" class="form-control" value="{{ $delivery_order_barang->qty }}">
                                                    </td>
                                                    <td>
                                                        <select name ="unit[]" class="form-control" id="exampleFormControlSelect1">
                                                            <option value="0" disabled="true" selected="true">== Unit ==</option>
                                                            <option value="Dos" @if($delivery_order_barang->unit == 'Dos') selected @endif>Dos</option>
                                                            <option value="Btl" @if($delivery_order_barang->unit == 'Btl') selected @endif>Btl</option>
                                                            <option value="Lembar" @if($delivery_order_barang->unit == 'Lembar') selected @endif>Lembar</option>
                                                            <option value="Koli" @if($delivery_order_barang->unit == 'Koli') selected @endif>Koli</option>
                                                            <option value="Pcs" @if($delivery_order_barang->unit == 'Pcs') selected @endif>Pcs</option>
                                                            <option value="Box" @if($delivery_order_barang->unit == 'Box') selected @endif>Box</option>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:" class="btn btn-danger btn-sm" id="removed" style="float: right;">
                                                            <i class="fas fa-minus text-light"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <a href="{{ route('deliveryorder.index') }}" class="btn btn-secondary btn-sm">Back</a>
                                <button type="submit" class="btn btn-primary float-right">Submit</button>
                            </div>
                        {{ Form::close() }}
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!--/. container-fluid -->
    </section>
    <!-- /.content -->


@endsection
