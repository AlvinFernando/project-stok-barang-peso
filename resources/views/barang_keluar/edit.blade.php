@extends('layouts.app')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0 text-bold">EDIT BARANG KELUAR</h1>
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
                            <h3 class="card-title">EDIT BARANG KELUAR</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <div class="card-body">
                            {{ Form::open([
                                'action' => ['BarangKeluarController@update', $barangkeluars->id],
                                'method' => 'PATCH',
                                'enctype' => "multipart/form-data"
                            ]) }}
                            {{ csrf_field() }}

                            <div class="form-group">
                                {{ Form::label('barangs_id', 'Pilih Barang: ', ['class' => 'control-label'], false) }}
                                <select name ="barangs_id" class="form-control" id="exampleFormControlSelect1">
                                    <option value="0" disabled="true" selected="true">== Pilih Barang ==</option>
                                    @foreach($barangs as $brgs)
                                        <option value="{{ $brgs->id }}"
                                            @if($brgs->id == $barangkeluars->barangs_id)
                                                selected
                                            @endif
                                            >{{ $brgs->item_description }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                {{ Form::label('customer', 'Customer ', ['class' => 'control-label'], false) }}
                                {{ Form::text('customer', $barangkeluars->customer , array('class'=>'form-control')) }}
                            </div>
                            <div class="form-group">
                                {{ Form::label('tanggal', 'Tanggal ', ['class' => 'control-label'], false) }}
                                {{ Form::date('tanggal', $barangkeluars->tanggal , array('class'=>'form-control')) }}
                            </div>
                            <div class="form-group">
                                {{ Form::label('keterangan', 'Keterangan ', ['class' => 'control-label'], false) }}
                                {{ Form::textarea('keterangan', $barangkeluars->keterangan , array('class'=>'form-control')) }}
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <a href="{{ route('barang_keluar.index') }}" class="btn btn-secondary btn-sm">Back</a>
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
