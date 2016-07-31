 <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{Auth::user()->name}}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview">
          <a href="dashboard">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i>
            <span>Home</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{url('home/edit/1')}}"><i class="fa fa-pencil-square-o"></i> Edit Homepage</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i>
            <span>About</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li>
              <a href="#"><i class="fa fa-folder-o"></i> Board</a>
              <ul class="treeview-menu">
                <li>
                  <a href="#">
                    <i class="fa fa-folder-o"></i> Director
                  </a>
                  <ul class="treeview-menu">
                    <li>
                      <a href="{{url('about/directors/create')}}">
                        <i class="fa fa-plus"></i> Add Director
                      </a>
                      <a href="{{url('about/directors')}}">
                        <i class="fa fa-pencil-square-o"></i> Modify Director
                      </a>
                    </li>
                  </ul>
                </li>
                <li>
                  <a href="{{url('about/board/1')}}">
                    <i class="fa fa-file-o"></i> View Page
                  </a>
                </li>
                <li>
                  <a href="{{url('about/board/edit/1')}}">
                    <i class="fa fa-pencil-square-o"></i> Edit Page
                  </a>
                </li>
              </ul>
            </li>

            <li><a href="{{url('about/legal/edit')}}"><i class="fa fa-pencil-square-o"></i> Legal</a></li>
            <li><a href="{{url('about/chain/edit')}}"><i class="fa fa-pencil-square-o"></i> Chain</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i>
            <span>Services</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{url('service/edit')}}"><i class="fa fa-pencil-square-o"></i> Edit Page</a></li>
            <li><a href="{{url('service/icon/create')}}"><i class="fa fa-plus"></i> Add Service Icon</a></li>
            <li><a href="{{url('service/icon')}}"><i class="fa fa-pencil-square-o"></i> Edit Service Icon</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i>
            <span>Portfolio</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{url('portfolio/edit')}}"><i class="fa fa-pencil-square-o"></i> Edit Page</a></li>
            <li><a href="{{url('portfolio/item/create')}}"><i class="fa fa-plus"></i> Add Portfolio</a></li>
            <li><a href="{{url('portfolio/item')}}"><i class="fa fa-pencil-square-o"></i> Edit Portfolio</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i>
            <span>Connect</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{url('connect/edit')}}"><i class="fa fa-pencil-square-o"></i> Edit Page</a></li>
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>