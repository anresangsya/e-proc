  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="{{url('dashboard')}}" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>E</b>M</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg">E-Proc</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
     <!-- <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>-->
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
                   @if (Auth::guest())
                  <div class="pull-left">
                    <a href="{{ route('login') }}" class="navbar-brand">Masuk</a>
                  </div>
               @else
           <!--      <div class="pull-left">
                    <a href="{{ url('profile') }}" class="navbar-brand">Profil</a>
                  </div> -->
                 <div class="pull-right">
                     
                    <a class="navbar-brand" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                    LOGOUT
                    </a>
                 </div> 
                @endif
          </ul>
          <!-- User Account Menu -->
        <!--  <li class="dropdown user user-menu">
   
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
   
              <img src="{{ asset("/bower_components/AdminLTE/dist/img/avatar5.png") }}" class="user-image" alt="User Image">
          
              <span class="hidden-xs">{{ Auth::user()->name }}</span>
            </a>
            <ul class="dropdown-menu">
        
                
              <li class="user-header">
                <img src="{{ asset("/bower_components/AdminLTE/dist/img/avatar5.png") }}" class="img-circle" alt="User Image">

                <p>
                  Hello {{ Auth::user()->name }} 
                </p>
              </li>




            
              <li class="user-footer">
               @if (Auth::guest())
                  <div class="pull-left">
                    <a href="{{ route('login') }}" class="btn btn-default btn-flat">Masuk</a>
                  </div>
               @else
                 <div class="pull-left">
                    <a href="{{ url('profile') }}" class="btn btn-default btn-flat">Profil</a>
                  </div>
                 <div class="pull-right">
                    <a class="btn btn-default btn-flat" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                    keluar
                    </a>
                 </div> 
                @endif
              </li>
            </ul>
          </li>
        </ul> -->
      </div>
    </nav>
  </header>
   <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
      {{ csrf_field() }}
   </form>