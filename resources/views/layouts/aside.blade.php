<!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/./home" class="brand-link">
      <img src="/./dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">NF-e Guard</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->name }}</a>
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
                <a href="/./orcamento" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Start Test</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/./ordemdeservico" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Test List</p>
                </a>
              </li>
              
            </ul>
          </li>
          <li class="nav-item has-treeview menu-close">
            <a href="#" class="nav-link"><!-- nav-link active -->
              <i class="nav-icon fas fa-file-invoice-dollar"></i>
              <p>
                Notas Fiscais
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/./admin/usuario" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Emitir Notas</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/./admin/permission" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Gerenciar Notas</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/./admin/role" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Upload de Notas</p>
                </a>
              </li>
            </ul>
          </li>
          
          <li class="nav-item has-treeview menu-close">
            <a href="#" class="nav-link"><!-- nav-link active -->
              <i class="nav-icon fas fa-user"></i>
              <p>
                Usuários
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/./admin/usuario" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Gerenciar Usuários</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/./admin/permission" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Gerenciar Permissões</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/./admin/role" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Gerenciar Perfil</p>
                </a>
              </li>
            </ul>
          </li>
         

          <li class="nav-item">
              <a href="{{ route('logout') }}" id="logout-form" class="nav-link" onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">
                <i class="nav-icon fas fa-sign-out-alt"></i>        
                  <p>Sair do sistema </p>
              </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;" >
                  @csrf
                </form>
                  
 
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>