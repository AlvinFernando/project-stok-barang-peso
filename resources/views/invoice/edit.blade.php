@extends('layouts.app')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0 text-bold">INPUT INVOICES</h1>
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
                            <h3 class="card-title">INVOICES</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        {{ Form::open([
                            'action' => ['InvoiceController@update', $invoices->id],
                            'method' => 'PUT',
                            'enctype' => "multipart/form-data"
                        ]) }}
                        {{ csrf_field() }}
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="no_inv">No. Invoice</label>
                                            <input type="text" class="form-control"
                                            name="no_inv" value="{{ $invoices->no_inv }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="tanggal">Tanggal</label>
                                            <input type="text" class="form-control"
                                            name="tanggal" value="{{ $invoices->tanggal }}">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="customer">To</label>
                                            <input type="text" class="form-control"
                                            name="customer" value="{{ $invoices->customer }}">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="nama">Nama</label>
                                            <input type="text" class="form-control"
                                            name="nama" value="{{ $invoices->nama }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="phone">Phone</label>
                                            <input type="text" class="form-control"
                                            name="phone" value="{{ $invoices->telp }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <select name ="pegawais_id" class="form-control" id="exampleFormControlSelect1">
                                                <option value="0" disabled="true" selected="true">== Pilih Pegawai ==</option>
                                                @foreach($pegawais as $result)
                                                    <option value="{{ $result->id }}"
                                                    @if($result->id == $invoices->pegawais_id)
                                                    selected
                                                    @endif
                                                    >{{  $result->nama }}</option>
                                                @endforeach
                                          </select>
                                        </div>
                                    </div>
                                </div>
                                <br><br>
                                <label class="font-weight bold">LIST ORDER</label>
                                <br>
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
                                                    <th>
                                                        <a href="javascript:" class="addinvoices float-right btn btn-primary btn-sm" style="margin-bottom: 10px;">
                                                            <i class="fas fa-plus text-light"></i>
                                                        </a>
                                                    </th>
                                                </tr>
                                            </thead>

                                            <tbody class="invoices">
                                                @foreach ($invoices_barangs as $inv_brgs)
                                                    <tr class="row-datas">
                                                        <td width="350px">
                                                            <input type="text" name="description[]" id="description" class="form-control" value="{!! $inv_brgs->description !!}">
                                                        </td>
                                                        <td width="100px">
                                                            <input type="number" class="form-control" id="qty1" onchange="Sums(this)" name="qty[]" value="{{ $inv_brgs->qty }}">
                                                        </td>
                                                        <td width="130px">
                                                            <select name ="unit[]" class="form-control" id="exampleFormControlSelect1">
                                                                <option value="0" disabled="true" selected="true">== Unit ==</option>
                                                                <option value="Dos" @if($inv_brgs->unit == 'Dos') selected @endif>Dos</option>
                                                                <option value="Btl" @if($inv_brgs->unit == 'Btl') selected @endif>Btl</option>
                                                                <option value="Lembar" @if($inv_brgs->unit == 'Lembar') selected @endif>Lembar</option>
                                                                <option value="Koli" @if($inv_brgs->unit == 'Koli') selected @endif>Koli</option>
                                                                <option value="Pcs" @if($inv_brgs->unit == 'Pcs') selected @endif>Pcs</option>
                                                                <option value="Box" @if($inv_brgs->unit == 'Box') selected @endif>Box</option>
                                                            </select>
                                                        </td>
                                                        <td width="110px">
                                                            <input type="number" class="form-control" id="harga1" onchange="Sums(this)" name="harga[]" min="1" step="any" value="{{ $inv_brgs->harga }}">
                                                        </td>
                                                        <td width="110px">
                                                            <input type="number" class="form-control" id="jumlah1" name="jumlah[]" value="{{ $inv_brgs->jumlah }}" min="1" step="any" readonly>
                                                        </td>
                                                        <td width="1px">
                                                            <a href="javascript:" class="float-right btn btn-danger btn-sm" id="removed" style="margin-bottom: 10px;">
                                                                <i class="fas fa-minus text-light"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                            <tbody>
                                                <tr style="background-color: white;" border="1">
                                                    <th colspan="4"><strong style="float: right; font-size: 20px;">TOTAL $</strong></th>
                                                    <th colspan="2" style="font-size: 20px;">
                                                        <input type="number" id="total1" class="form-control" name="total" value="{{ $invoices->total }}" onchange="GetTotal()" min="1" step="any" readonly>
                                                    </th>
                                                </tr>
                                                <tr style="background-color: white;" border="1">
                                                    <th style="font-size: 20px;">TERBILANG</th>
                                                    <th colspan="5"><input type="text" class="form-control"
                                                        name="terbilang" value="{{ $invoices->terbilang }}"></th>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <br>

                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <a href="{{ route('invoice.index') }}" class="btn btn-secondary btn-sm">Back</a>
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

