@extends('layouts.admin')

@section('title', "Insert" )

@section('content')
  <!-- Content Wrapper. Contains page content -->
  {{-- <div class="content-wrapper"> --}}
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Tambah Product
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ route('products.index', ['subdomain' => Auth::user()->role]) }}"><i class="fa fa-building"></i> Product ></a></li>
        <li class="active">Tambah Product </li>
      </ol>
    </section>
    <br>  
    <!-- Main content -->
    <section class="content container-fluid">
        <div class="panel-body">
        {{ Form::open(array('route' => ['products.store','subdomain' => $subdomain],'method'=>'POST', 'class' => 'form-horizontal')) }}
          <div class="form-group @if ($errors->has('nama')) has-error @endif">
            <label for="product" class="col-md-3">Nama</label>
            <div class="col-md-9">
              <input type="text" name="nama" class="form-control">
  
                @if ($errors->has('nama'))
                    <div class="text-red">{{ $errors->first('nama') }}</div>
                @endif
            </div>
          </div>
          <div class="form-group @if ($errors->has('harga')) has-error @endif">
            <label for="harga" class="col-md-3">Price</label>
              <div class="col-md-9">
              <input type="text" name="harga" class="form-control">
                  @if ($errors->has('harga'))
                      <div class="text-red">{{ $errors->first('harga') }}</div>
                  @endif
              </div>
          </div>
          <div class="form-group @if ($errors->has('qty')) has-error @endif">
          <label for="harga" class="col-md-3">qty</label>
              <div class="col-md-9">
              <input type="text" name="qty" class="form-control">
                  @if ($errors->has('qty'))
                      <div class="text-red">{{ $errors->first('qty') }}</div>
                  @endif
              </div>
          </div>
          <div class="form-group">
              <center>
              <a href="{{ route('products.index',['subdomain' => $subdomain]) }}" class="btn bg-maroon">Batal</a>
              <input type="submit" value="Create" class="btn btn-success">
              </center>
          </div>
        {{ Form::close() }}
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection
 