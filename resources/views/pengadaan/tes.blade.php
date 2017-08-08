@extends('product.base')

@section('action-content')

<link rel="stylesheet" type="text/css" href="/css/style.css">

<div class="wrapper">

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Pengadaan Barang

      </h1>
      <ol class="breadcrumb">
        <!-- li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li-->
        <li class="active">Hello {{Auth::user()->name}}</li>
      </ol>
      <hr>

    </section>

    <!-- Main content -->
    <section class="content">
      <form>
      <div class="row">
        <div class="col-md-4">
          <input name="nama1" class="form-control" />
        </div>
        <div class="col-md-4">
          <input name="jumlah1" class="form-control" />
        </div>
        <div class="col-md-4">
          <input name="harga1" class="form-control" />
        </div>
      </div>
      <div class="row col-md-4">
        <button class="btn btn-small btn-default" onclick="additem(); return false"><i class="glyphicon glyphicon-plus"></i></button>
      </div>
      </form>
  
    </section>
    <!-- /.content -->
  </div>
</div>
      
      


 <!-- jQuery 2.1.3 -->
<script src="{{ asset ("/bower_components/AdminLTE/plugins/jQuery/jquery-2.2.3.min.js") }}"></script>

<!-- Bootstrap 3.3.2 JS -->
<script src="{{ asset ("/bower_components/AdminLTE/bootstrap/js/bootstrap.min.js") }}" type="text/javascript"></script>

<!-- AdminLTE App -->
<script src="{{ asset ("/bower_components/AdminLTE/dist/js/app.min.js") }}" type="text/javascript"></script>


<script type="text/javascript" src="/js/jquery.js"></script>
<script type="text/javascript" src="/js/js.js"></script>

@endsection