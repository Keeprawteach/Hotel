<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">

  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">

    <!-- Sidebar user panel (optional) -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="{{ asset("/bower_components/AdminLTE/dist/img/user2-160x160.jpg") }}" class="img-circle" alt="User Image" />
      </div>
      <div class="pull-left info">
        <p>{{ Auth::user()->name }}</p>
        <!-- Status -->
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>

    <!-- search form (Optional) -->
    <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search..."/>
        <span class="input-group-btn">
          <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
        </span>
      </div>
    </form>
    <!-- /.search form -->

    <!-- Sidebar Menu -->
    <ul class="sidebar-menu">
      <li class="header">HEADER</li>
      <!-- Optionally, you can add icons to the links -->
      <li class="treeview">
        <a href="{{ url('/admin/promotion/create')}}"><span>Promotion</span> <i class="fa pull-right"></i></a>
        <ul class="treeview-menu">
          <li><a href="{{ url('/admin/promotion/create')}}">Create</a></li>
          <li><a href="{{ url('/admin/promotion/')}}">Data</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#"><span>Booking Request</span> <i class="fa pull-right"></i></a>
      </li>
      <li class="treeview">
        <a href="{{ url('/admin/order/')}}"><span>Master Order</span> <i class="fa pull-right"></i></a>
      </li>

      <li class="treeview">
        <a href="{{ url('/admin/place_order/')}}"><span>Place Order</span> <i class="fa pull-right"></i></a>
      </li>

      <li class="treeview">
        <a href="{{ url('/admin/delivery_order/')}}"><span>Delivery Order</span> <i class="fa pull-right"></i></a>
      </li>

      <li class="treeview">
        <a href="#"><span>Category</span> <i class="fa fa-angle-left pull-right"></i></a>
        <ul class="treeview-menu">
          <li><a href="{{ url('/admin/category/create')}}">Create</a></li>
          <li><a href="{{ url('/admin/category/')}}">Data</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#"><span>Menu</span> <i class="fa fa-angle-left pull-right"></i></a>
        <ul class="treeview-menu">
          <li><a href="{{ url('/admin/menu/create')}}">Create</a></li>
          <li><a href="{{ url('/admin/menu/')}}">Data</a></li>
        </ul>
      </li>

      <li class="treeview">
        <a href="#"><span>Customer</span> <i class="fa pull-right"></i></a>
        <ul class="treeview-menu">
          <li><a href="{{ url('/admin/customer/')}}">Data</a></li>
        </ul>
      </li>

      <li class="treeview">
        <a href="#"><span>Table</span> <i class="fa pull-right"></i></a>
        <ul class="treeview-menu">
          <li><a href="{{ url('/admin/desk/create')}}">Create</a></li>
          <li><a href="{{ url('/admin/desk/')}}">Data</a></li>
        </ul>
      </li>

      <li class="treeview">
        <a href="#"><span>Report</span> <i class="fa pull-right"></i></a>
        <ul class="treeview-menu">
          <li><a href="{{ url('/admin/report/stats')}}">Stats</a></li>
          <li><a href="{{ url('/admin/report/')}}">Data</a></li>
        </ul>
      </li>

      <li>
        <a href="{{ url('/Auth\AuthController@logout') }}"
        onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">
        Logout
      </a>
      <form id="logout-form"
      action="{{ url('/logout') }}"
      method="POST"
      style="display: none;">
      {{ csrf_field() }}
    </form>
  </li>

</ul><!-- /.sidebar-menu -->
</section>
<!-- /.sidebar -->
</aside>
