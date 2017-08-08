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
			<div class="col-md-12">
        <div class="card">
          <ul class="nav nav-tabs" role="tablist">
              <li role="presentation" class="active"><a href="#input" aria-controls="input" role="tab" data-toggle="tab">Input</a></li>
              <li role="presentation"><a href="#showList" aria-controls="showList" role="tab" data-toggle="tab">Tampilkan daftar</a></li>
          </ul>

          <!-- Tab panes -->
          <div class="tab-content">
              <div role="tabpanel" class="tab-pane active" id="input">
                <form action="{{ route('pengadaan.store') }}" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
								  <div class="form-group row">
							    	<label class="col-md-2" for="id_spk">Nomor SPK</label>
							    	<div class="col-md-4">
							    		<input type="text" class="form-control" id="id_spk" name="id_spk">
							    	</div>
							  	</div>
							  	<div class="form-group row">
							    	<label class="control-label col-md-2" for="tanggal">Tanggal</label>	
							        <div class='col-sm-4'>
                        <input type='date' class="form-control" name="tanggal" id='tanggal' />
							        </div>
							  	</div>
                  <div class="form-group row">
                    <label class="control-label col-md-2" for="keperluan">Keperluan</label> 
                      <div class='col-sm-4'>
                        <input type='text' class="form-control" id='keperluan' name="keperluan" />
                      </div>
                  </div>
							  	<div class="form-group row">
							    	<label class="col-md-2" for="nama_supplier">Supplier</label>
							    	<div class="col-md-4">
							    		<select class="form-control" id="nama_supplier" name="nama_supplier">
							    			@foreach ($supplier as $supplier)
										  	<option>{{ $supplier->nama_supplier }}</option>
										  	@endforeach
										</select>
									
							    	</div>
							  	</div>
							  	<div class="form-group row col-md-12">
                    <table class="table table-condensed">
                      <thead>
                        <tr>
                          <th width="30%">Barang</th>
                          <th width="20%"></th>
                          <th width="10%"></th>
                          <th width="30%"></th>
                          <th width="10%"></th>
                        </tr>
                      </thead>
                      <!--elemet sebagai target append-->
                      <tbody id="itemlist">
                          <tr>
                              <td><input name="nama_barang[]" class="form-control" placeholder="nama barang" /></td>
                              <td><input name="jenis_barang[]" class="form-control" placeholder="jenis barang" /></td>
                              <td><input type="number" name="jumlah[]" class="form-control" placeholder="jumlah" /></td>
                              <td><input type="number" name="harga_satuan[]" class="form-control" placeholder="harga satuan" /></td>
                              <td></td>
                          </tr>
                      </tbody>
                      <tfoot>
                          <tr>
                              <td>
                                <button class="btn btn-info" onclick="additem(); return false"><span class="glyphicon glyphicon-plus"></span>Tambah barang</button>
                              </td>
                              <td>
                              </td>
                              <td></td>
                              <td></td>
                          </tr>
                      </tfoot>
                    </table>
							    </div> <!-- end-->

								  <hr>
  								<div class="form-group row">
  									<label class="col-md-2">Total Biaya</label>
  								</div>
  							  	<button type="submit" class="btn btn-success">Submit</button>
                </form>	
              </div>
              
              <div role="tabpanel" class="tab-pane" id="showList">
                <a class="btn btn-success" href="{{ url('pdf/pengadaan') }}"><span class="glyphicon glyphicon-print"></span> Cetak</a>
                <table id="table_pengadaan" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="table_pengadaan">
                  <thead>
                    <tr role="row">
                        
                    <th width="10%" class="hidden-xs" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">Nomor SPK</th>
                    <th width="15%" class="hidden-xs" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">Nama Barang</th>
                      <th width="15%%" class="hidden-xs" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">Jenis Barang</th>
                      <th width="10%" class="hidden-xs" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">Jumlah</th>
                      <th width="20%" class="hidden-xs" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">Harga Satuan</th>
                      <th width="20%" class="hidden-xs" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">Keperluan</th>
                      <th width="10%" class="hidden-xs" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">Tanggal</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach ($pengadaan as $pengadaan)
                      <tr role="row" class="odd">
                        <td class="hidden-xs">{{ $pengadaan->id_spk }}</td>
                        <td class="hidden-xs">{{ $pengadaan->nama_barang}}</td>
                        <td class="hidden-xs">{{ $pengadaan->jenis_barang}}</td>
                        <td class="hidden-xs">{{ $pengadaan->jumlah}}</td>
                        <td class="hidden-xs">{{ $pengadaan->harga_satuan}}</td>
                        <td class="hidden-xs">{{ $pengadaan->keperluan}}</td>
                        <td class="hidden-xs">{{ $pengadaan->tanggal}}</td>

              
                    </tr>
                  @endforeach
                  </tbody>
                </table>

              </div> <!-- end showList -->
          </div>
				</div> <!-- end card -->
			</div>
    
    	<!-- Modal -->
      <div class="modal fade" id="tambahBarang" role="dialog">
        <div class="modal-dialog">
        
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Modal Header</h4>
            </div>
            <div class="modal-body">
              <p>Some text in the modal.</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>
          
        </div>
      </div>


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