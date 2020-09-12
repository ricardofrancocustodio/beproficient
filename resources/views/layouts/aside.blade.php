<!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/./home" class="brand-link">
      <img src="/./dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Be Proficient</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar" >
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex"  >
        <!-- <div class="image">
          <img src="" class="img-circle elevation-2" alt="User Image">
        </div> -->
        <div class="info">
          <a href="#" class="d-block">Hi, {{ Auth::user()->name }}!</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="/./home" class="nav-link">
              <i class="nav-icon fas fa-chart-line"></i>
              <p>
                Dashboard
                <span class="right badge badge-danger"></span>
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview menu-close">
            <a href="#" class="nav-link"><!-- nav-link active -->
              <i class="nav-icon fas fa-toolbox"></i>
              <p>
                Tests
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/./testlist" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Test List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/./englishproficiencytest" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Choose Test</p>
                </a>
              </li>
              
            </ul>
          </li>
          
          <li class="nav-item">

              
                <form id="logout-form" action="{{ route('logout') }}" method="POST" >
                  @csrf
                  <a href="{{ route('logout') }}" id="logout-form" class="nav-link" onclick="logout();">
                <i class="nav-icon fas fa-sign-out-alt"></i>        
                  <p>Logout</p>
              </a>
                </form>
                  
 
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1></h1>
          </div>
          <div class="col-sm-6">
            <!-- <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Inline Charts</li>
            </ol> -->
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
<script type="text/javascript">
  function logout()
  {
    event.preventDefault();
  document.getElementById('logout-form').submit();

  }
  
</script>