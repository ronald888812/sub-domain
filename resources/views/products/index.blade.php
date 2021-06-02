@extends('layouts.admin')

@section('title', "Index" )

@section('content')

 <!-- Content Wrapper. Contains page content -->
  {{-- <div class="content-wrapper"> --}}
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>{{$subdomain}} 
            <small></small>
        </h1>
        <ol class="breadcrumb">
            {{-- <li><i class="fa fa-building"></i> Super Admin</li> --}}
            <li><i class="fa fa-product-hunt"></i>{{$subdomain}} </li>
        </ol>
    </section>
    <br>
     <!-- Main content -->
        <section class="content container-fluid">
            <div class="form-group col-md-12">
                <div class="pull-right">
                    <a href="{{ route('products.create', ['subdomain' => Auth::user()->role]) }}" class="btn btn-success"><i class="fa fa-plus" aria-hidden="true"></i> Tambah Products</a>
                </div>
            </div>
            <br>
            @if ($message = Session::get('success'))
            <div class="col-md-12">
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            </div>
            @endif
            <div class="col-md-12">
            <!-- Horizontal Form -->
            <div class="box box-info">
            <div class="box-body table-responsive">
                <table id="listProdukToko" class="table table-bordered table-stripped responsive">
                    <thead>
                    <tr>
                        <th width="20">No</th>
                        <th>{{ __('home.name') }}</th>
                        <th>{{ __('home.price') }} </th>
                        <th>{{ __('home.qty') }}  </th>
                        <th width="100">{{ __('home.action') }} </th>
                    </tr>
                    </thead>
                    <tbody id="">
                        @if (count($indexs) > 0)
                        @foreach ($indexs as $key => $index)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{ $index->nama }}</td>
                                <td>{{ $index->harga }}</td>
                                <td>{{ $index->qty }}</td>
                                <td>
                                <center>
                                   <a href="{{ route('products.edit',[$index->id ,'subdomain' => $subdomain]) }}"><button class="btn btn-primary btn-xs" title="Ubah"><i class="fas fa-pencil-alt"></i></button></a>
                                    {{ Form::open(['method' => 'DELETE','route' => ['products.destroy', $index->id,'subdomain' => $subdomain],'style'=>'display:inline']) }}
                                    {{ csrf_field() }}
                                    <button class="btn btn-danger btn-xs" id="delete" onclick="return confirm('Hapus produk {{$index->name}} dibengkel ini ?')"><i class="fa fa-trash"></i></button>
                                    {{ Form::close() }}
                                </center>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="4">Produk tidak ditemukan!</td>
                        </tr>
                    @endif
                </tbody>
                </table>
            </div>
        </div>

        </section>

    <!-- /.content -->
  {{-- </div> --}}
  <!-- /.content-wrapper -->
@endsection

@section('additional-js')
    <script>
     $(document).ready(function() {
        $('#listProdukToko').DataTable( {
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.10.22/i18n/Indonesian.json"
                }
            ,responsive: true
            } );
    } );
    </script>
@endsection
