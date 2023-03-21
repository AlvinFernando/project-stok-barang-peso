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
                            <h3 class="card-title">INPUT BARANG MASUK</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <div class="card-body">
                            {{ Form::open([
                                'route' => "barang_masuk.store",
                                'method' => 'POST',
                                'enctype' => "multipart/form-data"
                            ]) }}
                            {{ csrf_field() }}

                            <div class="form-group">
                                {{ Form::label('barangs_id', 'Pilih Barang: ', ['class' => 'control-label'], false) }}
                                <select name ="barangs_id" class="form-control" id="exampleFormControlSelect1">
                                    <option value="0" disabled="true" selected="true">== Pilih Barang ==</option>
                                    @foreach($barangs as $r)
                                        <option value="{{ $r->id }}" {{(old('barangs_id') == 'id') ? 'selected' : ''}}>{{ $r->item_description }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                {{ Form::label('supplier', 'Supplier: ', ['class' => 'control-label'], false) }}
                                {{ Form::text('supplier', '', array('class'=>'form-control')) }}
                            </div>
                            <div class="form-group">
                                {{ Form::label('qty', 'Qty: ', ['class' => 'control-label'], false) }}
                                {{ Form::text('qty', '', array('class'=>'form-control')) }}
                            </div>
                            <div class="form-group">
                                {{ Form::label('tanggal', 'Tanggal: ', ['class' => 'control-label'], false) }}
                                {{ Form::date('tanggal', '', array('class'=>'form-control')) }}
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <a href="{{ route('barang_masuk.index') }}" class="btn btn-secondary btn-sm">Back</a>
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
