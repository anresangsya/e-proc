@extends('product.base')

@section('action-content')

<div class="wrapper">

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Daftar Barang
<!--
          
            @foreach( $supplier as $supp)
          
          {{ $supp->nama_supplier}}
          @endforeach
-->
      </h1>
        <hr>
          <a class="btn btn-primary" href="{{ route('product.create') }}">Tambah Produk</a>
             <a class="btn btn-primary" href="{{ url('pdf/product') }}">Print</a>
       
      <ol class="breadcrumb">
        <!-- li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li-->
        <li class="active">Hello {{Auth::user()->name}}</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        
      <!-- Your Page Content Here -->
<div class="box">    
  <div class="box-header">
    <div class="row">
<!--
        <div class="col-sm-8">
          <h1 class="box-title">Daftar Barang</h1>
        </div>
-->
        
        <div class="col-md-12">
          <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
      <div class="row">
        <div class="col-md-12">
          <table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
            <thead>
              <tr role="row">
                  
              <th width="5%" class="hidden-xs" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">ID</th>
              <th width="10%" class="hidden-xs" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">Nama Produk</th>
              <th width="10%" class="hidden-xs" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">Type Produk</th>
                <th width="5%" class="hidden-xs" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">Jumlah Produk</th>
                <th width="20%" class="hidden-xs" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">Nama Supplier</th>
                  <th width="4%" class="hidden-xs" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">Status Permintaan</th>
                  <th width="5%" class="hidden-xs" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">Tanggal Permintaan</th>
                    <th width="55%" class="hidden-xs" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"></th>
              </tr>
            </thead>
            <tbody>
            @foreach ($product as $products)
                <tr role="row" class="odd">
                  <td class="hidden-xs">{{ $products->id }}</td>
                  <td class="hidden-xs">{{ $products->nama_produk }}</td>
                  <td class="hidden-xs">{{ $products->type_produk }}</td>
                  <td class="hidden-xs">{{ $products->jumlah_produk}}</td>
                  <td class="hidden-xs">{{ $products->nama_supplier}}</td>
                  <td class="hidden-xs">{{ $products->status_permintaan}}</td>
                  <td class="hidden-xs">{{ $products->tanggal_request}}</td>
                  <td class="hidden-xs"><div align="center">
                    <form class="row" method="POST" action="{{ route('product.destroy', ['id' => $products->id]) }}" onsubmit = "return confirm('Are you sure?')">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        
                        <a href="{{ route('product.edit', ['id' => $products->id]) }}" class="btn btn-warning col-sm-5 col-xs-5 btn-margin">Update
                        </a>
                         <button type="submit" class="btn btn-danger col-sm-5 col-xs-5 btn-margin">Delete
                        </button>
                    </form></div>
                  </td>
              </tr>
            @endforeach
            </tbody>
          </table>
            
        </div>
      </div>
        </div>
        
        </div>
      </div>
    
      <div class="row">
        <div class="col-sm-5">
          <div class="dataTables_info" id="example2_info" role="status" aria-live="polite">Menampilkan {{count($product)}} masukan </div>
        </div>
        <div class="col-sm-7">
          <div class="pagination" id="example2_paginate">
            {!! $product->links() !!}
          </div>
        </div>
      </div>
    
    
    
    
    
    
    </div>
        </div>
            
    </section>
    <!-- /.content -->
  </div>
      
      


 <!-- jQuery 2.1.3 -->
<script src="{{ asset ("/bower_components/AdminLTE/plugins/jQuery/jquery-2.2.3.min.js") }}"></script>

<!-- Bootstrap 3.3.2 JS -->
<script src="{{ asset ("/bower_components/AdminLTE/bootstrap/js/bootstrap.min.js") }}" type="text/javascript"></script>

<!-- AdminLTE App -->
<script src="{{ asset ("/bower_components/AdminLTE/dist/js/app.min.js") }}" type="text/javascript"></script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. Slimscroll is required when using the
     fixed layout. -->

@endsection