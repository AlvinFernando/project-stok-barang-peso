@extends('layouts.app')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0 text-bold">INPUT DELIVERY ORDERS</h1>
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
                            <h3 class="card-title">DELIVERY ORDERS</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                            {{ Form::open([
                                'route' => "deliveryorder.store",
                                'method' => 'POST',
                                'enctype' => "multipart/form-data"
                            ]) }}
                            {{ csrf_field() }}
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            {{ Form::label('no_do', 'Nomor DO ', ['class' => 'control-label'], false) }}
                                            {{ Form::text('no_do', '', array('class'=>'form-control')) }}
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            {{ Form::label('customer', 'To ', ['class' => 'control-label'], false) }}
                                            {{ Form::text('customer', '', array('class'=>'form-control')) }}
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            {{ Form::label('phone', 'Phone ', ['class' => 'control-label'], false) }}
                                            {{ Form::text('phone', '', array('class'=>'form-control')) }}
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            {{ Form::label('tanggal', 'Tanggal ', ['class' => 'control-label'], false) }}
                                            {{ Form::date('tanggal', '', array('class'=>'form-control')) }}
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            {{ Form::label('nama', 'Nama ', ['class' => 'control-label'], false) }}
                                            {{ Form::text('nama', '', array('class'=>'form-control')) }}
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            {{ Form::label('sign', 'Sign', ['class' => 'control-label'], false) }}
                                            <select name ="pegawais_id" class="form-control" id="exampleFormControlSelect1">
                                                <option value="0" disabled="true" selected="true">== Pilih Pegawai ==</option>
                                                @foreach($pegawais as $r)
                                                    <option value="{{ $r->id }}" {{(old('pegawais_id') == 'id') ? 'selected' : ''}}>
                                                        {{ $r->nama }}
                                                    </option>
                                                @endforeach
                                          </select>
                                        </div>
                                    </div>
                                </div>

                                <br>
                                <label class="font-weight bold">Pesanan</label><hr class="mt-0">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            {{ Form::label('description', 'Description: ', ['class' => 'control-label'], false) }}
                                            {{ Form::text('description[]', '', array('class'=>'form-control')) }}
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            {{ Form::label('qty', 'Qty: ', ['class' => 'control-label'], false) }}
                                            {{ Form::text('qty[]', '', array('class'=>'form-control')) }}
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6"></div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            {{ Form::label('unit', 'Unit: ', ['class' => 'control-label'], false) }}
                                            <select name ="unit[]" class="form-control" id="exampleFormControlSelect1">
                                                <option value="0" disabled="true" selected="true">== Unit ==</option>
                                                <option value="Dos" {{(old('unit') == 'Dos') ? 'selected' : ''}}>Dos</option>
                                                <option value="Btl" {{(old('unit') == 'Btl') ? 'selected' : ''}}>Btl</option>
                                                <option value="Lembar" {{(old('unit') == 'Lembar') ? 'selected' : ''}}>Lembar</option>
                                                <option value="Koli" {{(old('unit') == 'Koli') ? 'selected' : ''}}>Koli</option>
                                                <option value="Pcs" {{(old('unit') == 'Pcs') ? 'selected' : ''}}>Pcs</option>
                                                <option value="Box" {{(old('unit') == 'Box') ? 'selected' : ''}}>Box</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <a href="#" class="adddeliveryorder btn btn-primary float-right">Tambah Pesanan</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="deliveryorder"></div>

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
