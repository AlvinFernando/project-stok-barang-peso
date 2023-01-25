@extends('layouts.app')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0 text-bold">INPUT JOB ORDERS</h1>
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
                            <h3 class="card-title">JOB ORDERS</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->

                        {{ Form::open([
                            'action' => ['JobOrderController@update', $job_orders->id],
                            'method' => 'PUT',
                            'enctype' => "multipart/form-data"
                        ]) }}
                        {{ csrf_field() }}
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="no_jo">No. JO</label>
                                        <input type="text" value="{{ $job_orders->no_jo }}" name="no_jo" id="no_jo" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="jam">Times</label>
                                        <input type="text" value="{{ $job_orders->jam }}" name="jam" id="jam" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="tanggal">Tanggal</label>
                                        <input type="date" name="tanggal" id="tanggal"
                                        value="{{ $job_orders->tanggal }}" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        {{ Form::label('customer', 'Nama Customer ', ['class' => 'control-label'], false) }}
                                        {{ Form::text('customer', $job_orders->customer, array('class'=>'form-control')) }}
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        {{ Form::label('jenis_order', 'Jenis Order', ['class' => 'control-label'], false) }}
                                        {{ Form::text('jenis_order', $job_orders->jenis_order, array('class'=>'form-control')) }}
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label('size', 'Size', ['class' => 'control-label'], false) }}
                                        {{ Form::text('size', $job_orders->size, array('class'=>'form-control')) }}
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        {{ Form::label('color', 'Color', ['class' => 'control-label'], false) }}
                                        {{ Form::text('color', $job_orders->color, array('class'=>'form-control')) }}
                                    </div>

                                    <div class="form-group">
                                        {{ Form::label('qty', 'Qty', ['class' => 'control-label'], false) }}
                                        {{ Form::text('qty', $job_orders->qty, array('class'=>'form-control')) }}
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        {{ Form::label('pages', 'Pages', ['class' => 'control-label'], false) }}
                                        {{ Form::text('pages', $job_orders->pages, array('class'=>'form-control')) }}
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        {{ Form::label('materials', 'Materials', ['class' => 'control-label'], false) }}
                                        {{ Form::text('materials', $job_orders->materials, array('class'=>'form-control')) }}
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        {{ Form::label('materials_2', 'Materials 2', ['class' => 'control-label'], false) }}
                                        {{ Form::text('materials_2', $job_orders->materials_2, array('class'=>'form-control')) }}
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        {{ Form::label('materials_3', 'Materials 3', ['class' => 'control-label'], false) }}
                                        {{ Form::text('materials_3', $job_orders->materials_3, array('class'=>'form-control')) }}
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        {{ Form::label('finishing', 'Finishing', ['class' => 'control-label'], false) }}
                                        {{ Form::text('finishing', $job_orders->finishing, array('class'=>'form-control')) }}
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        {{ Form::label('deadline', 'Deadline', ['class' => 'control-label'], false) }}
                                        {{ Form::text('deadline', $job_orders->deadline, array('class'=>'form-control')) }}
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        {{ Form::label('pegawais_id', 'Pilih Pegawai: ', ['class' => 'control-label'], false) }}
                                        <select name ="pegawais_id" class="form-control" id="exampleFormControlSelect1">
                                        <option value="0" disabled="true" selected="true">== Pilih Pegawai ==</option>
                                        @foreach($pegawai as $pgwis)
                                            <option value="{{ $pgwis->id }}"
                                                @if($pgwis->id == $job_orders->pegawais_id)
                                                    selected
                                                @endif
                                                >{{ $pgwis->nama }}
                                            </option>
                                        @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <a href="{{ route('joborder.index') }}" class="btn btn-secondary btn-sm">Back</a>
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
