@extends('layouts.admin')

@section('title', "ENT-Ticketing-BS | Super Admin - Produk - Tambah" )

@section('content')
  <!-- Content Wrapper. Contains page content -->
  {{-- <div class="content-wrapper"> --}}
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        ubah Produk Bengkel
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ route('request.index') }}"><i class="fa fa-building"></i> Request </a></li>
        <li class="active">ubah request </li>
      </ol>
    </section>
    <br>  
    <!-- Main content -->
    <section class="content container-fluid">
        <div class="panel-body">
        {!! Form::model($editrequest, ['method' => 'PATCH','route' => ['request.update', $editrequest->id], 'class' => 'form-horizontal']) !!}
          <div class="form-group @if ($errors->has('nama')) has-error @endif">
                <label for="product" class="col-md-3">Nama</label>
                <div class="col-md-9">
                 <input type="text" name="nama" class="form-control" value="{{$editrequest->nama}}">
                    @if ($errors->has('nama'))
                        <div class="text-red">{{ $errors->first('nama')}}</div>
                    @endif
                </div>
            </div>
            <div class="form-group">
                <center>
                <a href="{{ route('request.index') }}" class="btn bg-maroon">Batal</a>
                <input type="submit" value="Tambah Request" class="btn btn-success">
                </center>
            </div>
            {{ Form::close() }}
            </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection
 