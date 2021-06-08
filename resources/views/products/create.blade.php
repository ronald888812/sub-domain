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
          <div class="form-group @if ($errors->has('title_id')) has-error @endif">
            <label for="title_id" class="col-md-3">Title ID</label>
            <div class="col-md-9">
              <input type="text" name="title_id" class="form-control">
  
                @if ($errors->has('title_id'))
                    <div class="text-red">{{ $errors->first('title_id') }}</div>
                @endif
            </div>
          </div>
          <div class="form-group @if ($errors->has('title_en')) has-error @endif">
            <label for="title_en" class="col-md-3">Title EN</label>
              <div class="col-md-9">
              <input type="text" name="title_en" class="form-control">
                  @if ($errors->has('title_en'))
                      <div class="text-red">{{ $errors->first('title_en') }}</div>
                  @endif
              </div>
          </div>
          <div class="form-group @if ($errors->has('desc_id')) has-error @endif">
          <label for="desc_id" class="col-md-3">Desc ID</label>
              <div class="col-md-9">
              <input type="text" name="desc_id" class="form-control">
                  @if ($errors->has('desc_id'))
                      <div class="text-red">{{ $errors->first('desc_id') }}</div>
                  @endif
              </div>
          </div>
          <div class="form-group @if($errors->has('desc_en')) has-error @endif">
          <label for="desc_en" class="col-md-3">Desc EN</label>
              <div class="col-md-9">
              <input type="text" name="desc_en" class="form-control">
                  @if ($errors->has('desc_en'))
                      <div class="text-red">{{ $errors->first('desc_en') }}</div>
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
 