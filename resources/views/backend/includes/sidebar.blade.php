l
    <!-- /.sidebar -->
   <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
     <a href="/admin/dashboard" class="brand-link">
      <img src="{{asset('backend/dist/img/seya.png')}}"
           alt="AdminLTE Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Siya Exchange</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
       <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('backend/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a  class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
   
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
    

          <li class="nav-item has-treeview">
            <a href="/dashboard/admins" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Admins
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/dashboard/admins" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Admins List</p> 
                </a>
              </li>
            <!--   <li class="nav-item">
                <a href="/dashboard/admins" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create Admin</p>
                </a>
              </li> -->
            </ul>
          </li> 

        </ul>
   </nav>
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
    

          <li class="nav-item has-treeview">
            <a href="/dashboard/users" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Users
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/dashboard/users" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Users List</p> 
                </a>
              </li>
            <!--   <li class="nav-item">
                <a href="../../index2.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create Users</p>
                </a>
              </li> -->
            </ul>
          </li> 

        </ul>
   </nav>
       <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
    

          <li class="nav-item has-treeview">
            <a href="/dashboard/transactions" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Transactions
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/dashboard/transactions" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Transactions List</p> 
                </a>
              </li>
            <!--   <li class="nav-item">
                <a href="../../index2.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create Users</p>
                </a>
              </li> -->
            </ul>
          </li> 

        </ul>
   </nav>

      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
      