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
                                'action' => "barang_store.store",
                                'method' => 'POST',
                                'enctype' => "multipart/form-data"
                            ]) }}
                            {{ csrf_field() }}

                            <div class="form-group">
                                {{ Form::label('kode_barang', 'Kode Barang: ', ['class' => 'control-label'], false) }}
                                {{ Form::text('kode_barang', '', array('class'=>'form-control')) }}

                            </div>
                            <div class="form-group">
                                {{ Form::label('item_description', 'Items: ', ['class' => 'control-label'], false) }}
                                {{ Form::text('item_description', '', array('class'=>'form-control')) }}
                            </div>
                            <div class="form-group">
                                {{ Form::label('unit', 'Unit: ', ['class' => 'control-label'], false) }}
                                {!! Form::select('unit',[
                                    'dos'=>'Dos',
                                    'btl'=>'Btl',
                                    'lembar'=>'Lembar',
                                    'koli'=>'Koli',
                                    'pcs'=>'Pcs',
                                    'box'=>'Box'
                                ]) !!}
                            </div>
                            <div class="form-group">
                                {{ Form::label('qty', 'Items: ', ['class' => 'control-label'], false) }}
                                {{ Form::text('qty', '', array('class'=>'form-control')) }}
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
