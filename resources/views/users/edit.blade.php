@extends('layouts.admin')

@section('title', "ENT-Ticketing-BS | Super Admin - Produk - Tambah" )

@section('content')
  <!-- Content Wrapper. Contains page content -->
  {{-- <div class="content-wrapper"> --}}
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edit User
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ route('user.index') }}"><i class="fa fa-building"></i> user </a></li>
        <li class="active">> ubah user </li>
      </ol>
    </section>
    <br>  
    <!-- Main content -->
    <section class="content container-fluid">
        <div class="panel-body">
        {!! Form::model($editUser, ['method' => 'PATCH','route' => ['user.update', $editUser->id], 'class' => 'form-horizontal']) !!}
            <div class="form-group @if ($errors->has('name')) has-error @endif">
                <label for="product" class="col-md-3">name</label>
                <div class="col-md-9">
                    <input type="text" name="name" class="form-control" value="{{$editUser->name}}">
                    @if ($errors->has('name'))
                        <div class="text-red">{{ $errors->first('name')}}</div>
                    @endif
                </div>
            </div>
            <div class="form-group @if ($errors->has('role')) has-error @endif">
                <label for="product" class="col-md-3">Role</label>
                <div class="col-md-9">
                    <input type="text" name="role" class="form-control" value="{{$editUser->role}}">
                    @if ($errors->has('role'))
                        <div class="text-red">{{ $errors->first('role')}}</div>
                    @endif
                </div>
            </div>
            <div class="form-group">
                <center>
                <a href="{{ route('user.index') }}" class="btn bg-maroon">Batal</a>
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
 