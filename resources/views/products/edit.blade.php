@extends('layouts.admin')

@section('title', "Edit | Edit" )

@section('content')
  <!-- Content Wrapper. Contains page content -->
  {{-- <div class="content-wrapper"> --}}
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edit Product
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ route('products.index',['subdomain' => $subdomain]) }}"><i class="fa fa-building"></i> Product </a></li>
        <li class="active">> ubah product </li>
      </ol>
    </section>
    <br>  
    <!-- Main content -->
    <section class="content container-fluid">
        <div class="panel-body">
         {!! Form::model($editProduct, ['method' => 'PATCH','route' => ['products.update', $editProduct->id,'subdomain' => $subdomain], 'class' => 'form-horizontal']) !!}
            <div class="form-group @if ($errors->has('nama')) has-error @endif">
                <label for="product" class="col-md-3">name</label>
                <div class="col-md-9">
                    <input type="text" name="nama" class="form-control" value="{{$editProduct->nama}}">
                    @if ($errors->has('nama'))
                        <div class="text-red">{{ $errors->first('nama')}}</div>
                    @endif
                </div>
            </div>
            <div class="form-group @if ($errors->has('qty')) has-error @endif">
                <label for="product" class="col-md-3">qty</label>
                <div class="col-md-9">
                    <input type="text" name="qty" class="form-control" value="{{$editProduct->qty}}">
                    @if ($errors->has('qty'))
                        <div class="text-red">{{ $errors->first('qty')}}</div>
                    @endif
                </div>
            </div>
            <div class="form-group @if ($errors->has('harga')) has-error @endif">
                <label for="product" class="col-md-3">harga</label>
                <div class="col-md-9">
                    <input type="text" name="harga" class="form-control" value="{{$editProduct->harga}}">
                    @if ($errors->has('harga'))
                        <div class="text-red">{{ $errors->first('harga')}}</div>
                    @endif
                </div>
            </div>
            <div class="form-group">
            <center>
                <a href="{{ route('products.index',['subdomain' => $subdomain]) }}" class="btn bg-maroon">Batal</a>
                <input type="submit" value="Edit Product" class="btn btn-success">
            </center>
            </div>
        {{ Form::close() }}
        </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection
 