@extends('layouts.admin')

@section('title', "Insert | Super Admin - Produk - Tambah" )

@section('content')
  <!-- Content Wrapper. Contains page content -->
  {{-- <div class="content-wrapper"> --}}
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Tambah User
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ route('request.index') }}"><i class="fa fa-building"></i> User ></a></li>
        <li class="active">Tambah User </li>
      </ol>
    </section>
    <br>  
    <!-- Main content -->
    <section class="content container-fluid">
        <div class="panel-body">
          {{ Form::open(array('route' => 'request.store','method'=>'POST', 'class' => 'form-horizontal')) }}
          <div class="form-group @if ($errors->has('nama')) has-error @endif">
                <label for="product" class="col-md-3">Nama</label>
                <div class="col-md-9">
                 <input type="text" name="nama" class="form-control">
      
                    @if ($errors->has('nama'))
                        <div class="text-red">{{ $errors->first('nama') }}</div>
                    @endif
                </div>
            </div>
            <div class="form-group">
                <center>
                <a href="{{ route('request.index') }}" class="btn bg-maroon">Batal</a>
                <input type="submit" value="Edit Request" class="btn btn-success">
                </center>
            </div>
            {{ Form::close() }}
            </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection
 