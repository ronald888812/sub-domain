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
            
            <div class="form-group @if ($errors->has('title_id')) has-error @endif">
            <label for="title_id" class="col-md-3">Title ID</label>
              <div class="col-md-9">
              <input type="text" name="title_id" class="form-control" value="{{$editProduct->title_id}}">
                  @if ($errors->has('title_id'))
                      <div class="text-red">{{ $errors->first('title_id') }}</div>
                  @endif
              </div>
            </div>
            <div class="form-group @if ($errors->has('title_en')) has-error @endif">
            <label for="title_en" class="col-md-3">Title EN</label>
              <div class="col-md-9">
              <input type="text" name="title_en" class="form-control" value="{{$editProduct->title_en}}">
                  @if ($errors->has('title_en'))
                      <div class="text-red">{{ $errors->first('title_en') }}</div>
                  @endif
              </div>
            </div>
            <div class="form-group @if ($errors->has('desc_id')) has-error @endif">
            <label for="desc_id" class="col-md-3">Desc ID</label>
              <div class="col-md-9">
              <input type="text" name="desc_id" class="form-control" value="{{$editProduct->desc_id}}">
                  @if ($errors->has('desc_id'))
                      <div class="text-red">{{ $errors->first('desc_id') }}</div>
                  @endif
              </div>
            </div>
            <div class="form-group @if ($errors->has('desc_en')) has-error @endif">
            <label for="desc_en" class="col-md-3">Desc EN</label>
              <div class="col-md-9">
              <input type="text" name="desc_en" class="form-control" value="{{$editProduct->desc_en}}">
                  @if ($errors->has('desc_en'))
                      <div class="text-red">{{ $errors->first('desc_en') }}</div>
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
 