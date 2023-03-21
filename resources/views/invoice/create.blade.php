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
                                'route' => "invoice.store",
                                'method' => 'POST',
                                'enctype' => "multipart/form-data"
                            ]) }}
                            {{ csrf_field() }}
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            {{ Form::label('no_inv', 'No Invoice', ['class' => 'control-label'], false) }}
                                            {{ Form::text('no_inv', '', array('class'=>'form-control')) }}
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            {{ Form::label('tanggal', 'Tanggal', ['class' => 'control-label'], false) }}
                                            {{ Form::date('tanggal', '', array('class'=>'form-control')) }}
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            {{ Form::label('customer', 'To ', ['class' => 'control-label'], false) }}
                                            {{ Form::text('customer', '', array('class'=>'form-control')) }}
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            {{ Form::label('nama', 'Nama', ['class' => 'control-label'], false) }}
                                            {{ Form::text('nama', '', array('class'=>'form-control')) }}
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            {{ Form::label('telp', 'Telp ', ['class' => 'control-label'], false) }}
                                            {{ Form::text('telp', '', array('class'=>'form-control')) }}
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            {{ Form::label('pegawais_id', 'Attented By', ['class' => 'control-label'], false) }}
                                            <select name ="pegawais_id" class="form-control" id="exampleFormControlSelect1">
                                                <option value="0" disabled="true" selected="true">== Pilih Pegawai ==</option>
                                                @foreach($pegawais as $r)
                                                    <option value="{{ $r->id }}">{{ $r->nama }}</option>
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
                                                        {{-- <a href="javascript:" class="float-right btn btn-primary btn-sm" style="margin-bottom: 10px;" onclick="addinvoices()">
                                                            <i class="fas fa-plus text-light"></i>
                                                        </a> --}}
                                                    </th>
                                                </tr>
                                            </thead>

                                            <tbody class="invoices">
                                                <tr>
                                                    <td width="350px">
                                                        <div class="form-group">
                                                            {{ Form::text('description[]', '', array('class'=>'form-control')) }}
                                                        </div>
                                                    </td>
                                                    <td width="100px">
                                                        <input type="number" class="form-control" id="qty1" onchange="Sums(this)" name="qty[]">
                                                    </td>
                                                    <td width="130px">
                                                        <select name ="unit[]" class="form-control" id="exampleFormControlSelect1">
                                                            <option value="0" disabled="true" selected="true">Unit</option>
                                                            <option value="Dos" {{(old('unit') == 'Dos') ? 'selected' : ''}}>Dos</option>
                                                            <option value="Btl" {{(old('unit') == 'Btl') ? 'selected' : ''}}>Btl</option>
                                                            <option value="Lembar" {{(old('unit') == 'Lembar') ? 'selected' : ''}}>Lembar</option>
                                                            <option value="Koli" {{(old('unit') == 'Koli') ? 'selected' : ''}}>Koli</option>
                                                            <option value="Pcs" {{(old('unit') == 'Pcs') ? 'selected' : ''}}>Pcs</option>
                                                            <option value="Box" {{(old('unit') == 'Box') ? 'selected' : ''}}>Box</option>
                                                        </select>
                                                    </td>
                                                    <td width="110px">
                                                        <input type="number" class="form-control" id="harga1" onchange="Sums(this)" name="harga[]" min="1" step="any">
                                                    </td>
                                                    <td width="110px">
                                                        <input type="number" class="form-control" id="jumlah1" name="jumlah[]" value="0" min="1" step="any" readonly>
                                                    </td>
                                                    <td width="1px">
                                                        <a href="javascript:" class="addinvoices float-right btn btn-primary btn-sm" style="margin-bottom: 10px;">
                                                            <i class="fas fa-plus text-light"></i>
                                                        </a>
                                                    </td>
                                                </tr>

                                            </tbody>
                                            <tbody>
                                                <tr style="background-color: white;" border="1">
                                                    <th colspan="4"><strong style="float: right; font-size: 20px;">TOTAL $</strong></th>
                                                    <th colspan="2" style="font-size: 20px;">
                                                        <input type="number" id="total1" class="form-control" name="total" value="{{ old('total') }}" onchange="GetTotal()" min="1" step="any" readonly>
                                                    </th>
                                                </tr>
                                                <tr style="background-color: white;" border="1">
                                                    <th style="font-size: 20px;">TERBILANG</th>
                                                    <th colspan="5">{{ Form::text('terbilang', '', array('class'=>'form-control')) }}</th>
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

