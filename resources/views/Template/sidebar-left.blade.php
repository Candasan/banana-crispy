<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('img/user.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
            <a class="nav-link" href="#" role="button" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }} <span class="caret"></span>
            </a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->


          <!-- menu blog -->
          <li class="nav-item has-treeview menu-open">
              <a href="#" class="nav-link active">
                <i class="nav-icon fas fa-blog orange"></i>
                <p>
                  Pesanan
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <router-link to="user" class="nav-link">
                      <i class="fas fa-user nav-icon yellow"></i>
                    <p>User</p>
                  </router-link>
                </li>
                {{-- <li class="nav-item">
                  <router-link to="daftar-pesanan" class="nav-link">
                    <i class="fas fa-list-alt nav-icon teal"></i>
                    <p>Daftar Pesanan</p>
                  </router-link>
                </li> --}}
                <li class="nav-item">
                    <router-link to="category" class="nav-link">
                      <i class="fas fa-list-alt nav-icon teal"></i>
                      <p>Daftar Pesanan</p>
                    </router-link>
                </li>
                {{-- <li class="nav-item">
                  <router-link to="tambah-blog" class="nav-link ">
                    <i class="fas fa-folder-plus nav-icon cyan"></i>
                    <p>Add Blog</p>
                  </router-link>
                </li> --}}
                
              </ul>
            </li>


              <li class="nav-item">
                
                      <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
                          <i class="fas fa-sign-out-alt nav-icon red"></i> {{ __('Logout') }} 
                      </a>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          @csrf
                      </form>
                  
              </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>