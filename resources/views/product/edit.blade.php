@extends('product.base')

@section('content')

@section('action-content')

<div class="wrapper">

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Ubah Produk
      </h1>
      <ol class="breadcrumb">
        <!-- li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li-->
        <li class="active">Hello {{Auth::user()->name}}</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        
        
    <div class="box">    
  <div class="box-header">
    <div class="row">
        <div class="col-sm-8">
       
            
            <form class="form-horizontal" role="form" method="POST" action="{{ route('product.update', ['id' => $product->id]) }}">
                
          <!--  {!! Form::open(array('class' => 'form-horizontal', 'role' => 'form', 'method' => 'POST')) !!}
                        <div class="form-group">
                            {!! Form::label('nama_produk', 'Nama Produk', ['class' => 'control-label col-md-3']) !!}
                            <div class="col-md-9">
                                {!! Form::text('nama_produk', null, ['class' => 'form-control', 'placeholder' => 'Nama Produk']) !!}
                            </div>
                        </div>
 
                        <div class="form-group">
                            {!! Form::label('jumlah_produk', 'Jumlah Produk', ['class' => 'control-label col-md-3']) !!}
                            <div class="col-sm-2">
                                {!! Form::text('jumlah_produk', null,  ['class' => 'form-control']) !!}                                
                            </div>
                        </div>
                        
                        <div class="form-group">
                            {!! Form::label('nama_supplier','Nama Supplier' , ['class' => 'control-label col-md-3']) !!}
                            <div class="col-md-9">
                                {!! Form::select('nama_supplier', array('samsung' => 'Samsung', 'sony' => 'Sony', 'toshiba' => 'Toshiba', 'sanken' => 'Sanken'), null, ['class' => 'form-control','placeholder' => 'Pilih Supplier']) !!}
                            </div>
                        </div>
                        
 <!--
                        <div class="form-group">
                            {!! Form::label('password', 'Password', ['class' => 'control-label col-md-3']) !!}
                            <div class="col-md-9">
                                {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'write your password']) !!}
                            </div>
                        </div>
 
                        <div class="form-group">
                            {!! Form::label('date', 'Date', ['class' => 'control-label col-md-3']) !!}
                            <div class="col-md-9">
                                {!!Form::date('name', \Carbon\Carbon::now(), ['class' => 'form-control'])!!}
                            </div>
                        </div>
 
                        <div class="form-group">
                            {!! Form::label('gender', 'Gender', ['class' => 'control-label col-md-3']) !!}
                            <div class="col-md-9">
                                <div class="radio">
                                    <label>{!! Form::radio('gender', 'Male', true) !!} Male</label>
                                </div>
                                <div class="radio">
                                    <label>{!! Form::radio('gender', 'Female') !!} Female</label>
                                </div>
                            </div>
                        </div>
 
                        <div class="form-group">
                            {!! Form::label('hobby', 'Hobby', ['class' => 'control-label col-md-3']) !!}
                            <div class="col-md-9">
                                <div class="checkbox">
                                    <label>{!! Form::checkbox('hobby') !!} This is my hobby</label>
                                </div>
                                <div class="checkbox">
                                    <label>{!! Form::checkbox('hobby') !!} The other hobby</label>
                                </div>
                                <div class="checkbox">
                                    <label>{!! Form::checkbox('hobby') !!} The other hobby</label>
                                </div>
                                <div class="checkbox">
                                    <label>{!! Form::checkbox('hobby') !!} The other hobby</label>
                                </div>
                            </div>
                        </div>
 
                        <div class="form-group">
                            {!! Form::label('size','Size' , ['class' => 'control-label col-md-3']) !!}
                            <div class="col-md-9">
                                {!! Form::select('size', array('L' => 'Large', 'S' => 'Small'), null, ['class' => 'form-control','placeholder' => 'Pick a size...']) !!}
                            </div>
                        </div>
            
                        <div class="form-group">
                            {!! Form::label('file','File' , ['class' => 'control-label col-md-3']) !!}
                            <div class="col-md-9">
                                {!! Form::file('image', ['class' => 'form-control']) !!}
                            </div>
                        </div> 
 
                        <div class="form-group">
                            <div class="col-md-9 col-md-offset-3">
                                {!! Form::submit('Tambah', ['class' => 'btn btn-primary']) !!}
                            </div>
                        </div> 
            
                    {!! Form::close() !!} -->
                
                <input type="hidden" name="_method" value="PATCH">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group">
                            
                            
                            <label for="nama_produk" class="col-md-2 control-label">Nama Produk</label>

                            <div class="col-md-6">
                                <input id="nama_produk" type="text" class="form-control" name="nama_produk" value="{{ $product->nama_produk }}">

                                @if ($errors->has('nama_produk'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nama_produk') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="jumlah_produk" class="col-md-2 control-label">Jumlah Produk</label>

                            <div class="col-md-6">
                                <input id="jumlah_produk" type="text" class="form-control" name="jumlah_produk" value="{{ $product->jumlah_produk }}" required>

                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nama_supplier" class="col-md-2 control-label">Nama Supplier</label>

                            <div class="col-md-6">
                                <input id="nama_supplier" type="text" class="form-control" name="nama_supplier" value="{{ $product->nama_supplier }}" required>

                            </div>
                            
                        </div>
                <div class="col-md-6">
                               
                <button class="btn btn-primary" type="submit">Ubah</button>

                            </div>
            </form> 
            
          <h1 class="box-title"></h1>
        </div>
        
                  
            
            
        </div>
     <!--   <div class="col-sm-2">
          <a class="btn btn-primary" href="{{ route('employee-management.create') }}">Print</a>
        </div> -->
    </div>
  </div>
        
      <!-- Your Page Content Here -->

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
    