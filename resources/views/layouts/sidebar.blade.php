  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ asset("/bower_components/AdminLTE/dist/img/avatar5.png") }}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{ Auth::user()->name}}</p>
          <!-- Status -->
        <a href="#"><i class="fa fa-circle text-success"></i>Online</a>
        </div>
      </div>

      <!-- search form (Optional) 
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form> -->
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu">
        <!-- Optionally, you can add icons to the links -->
        
        <li class="treeview"><a href="/"><i class="fa fa-link"></i> <span>Beranda</span></a></li>
        <li class="treeview"><a href="{{ url('/pengadaan') }}"><i class="fa fa-link"></i> <span>Pengadaan</span></a></li>
        <li class="treeview"><a href="{{ url('/product') }}"><i class="fa fa-link"></i> <span>Produk</span></a></li>
        
     <!--     <li class="treeview">
          <a href="{{ url('/product') }}
                   "><i class="fa fa-link"></i> <span>Products</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
         <ul class="treeview-menu">
            <li><a href="{{ url('/product') }}">Product List</a></li>
            <li><a href="{{ url('/') }}">Product Overview</a></li>
             
              </ul> 
          </li> -->
   
              
              
      
        <li class="treeview"><a href="/supplier"><i class="fa fa-link"></i> <span>Penyedia Barang</span></a></li>
        <li class="treeview"><a href="/"><i class="fa fa-link"></i> <span>SPK</span></a></li>
                
</ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>