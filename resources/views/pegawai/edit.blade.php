@extends('layouts.app')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0 text-bold">EDIT DATA PEGAWAI</h1>
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
                        <h3 class="card-title">EDIT PEGAWAI</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        {{ Form::open([
                            'action' => ['PegawaiController@update', $pegawais->id],
                            'method' => 'PUT',
                            'enctype' => "multipart/form-data"
                        ]) }}
                        {{ csrf_field() }}
                        <div class="form-group">
                            {{ Form::label('nama', 'Kode Barang: ', ['class' => 'control-label'], false) }}
                            {{ Form::text('nama',$pegawais->nama , array('class'=>'form-control')) }}

                        </div>
                        <div class="form-group">
                            {{ Form::label('jabatan', 'Items: ', ['class' => 'control-label'], false) }}
                            {{ Form::text('jabatan', $pegawais->jabatan, array('class'=>'form-control')) }}
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <a href="{{ route('pegawai.index') }}" class="btn btn-secondary btn-sm">Back</a>
                    <button type="submit" class="btn btn-primary float-right">UPDATE</button>
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
