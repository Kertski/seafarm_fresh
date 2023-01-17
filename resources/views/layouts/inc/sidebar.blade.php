<div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
      <div class="logo"><a href="http://localhost:8000" class="simple-text logo-normal">
          <img src="{{ asset('assets/images/seafarm-logo-blue.png')}}" alt="Seafarm Fresh" width="200px">
        </a></div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item {{ Request::is('dashboard') ? 'active':'' }}  ">
            <a class="nav-link"  href="{{ url('dashboard') }}">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item {{ Request::is('categories') ? 'active':''; }}">
            <a class="nav-link" href="{{ url('categories') }}">
              <i class="material-icons">category</i>
              <p>Categories</p>
            </a>
          </li>
          <li class="nav-item  {{ Request::is('add-category') ? 'active':''; }}">
            <a class="nav-link" href="{{ url('add-category') }}">
              <i class="material-icons">add</i>
              <p>Add Category</p>
            </a>
          </li>
          <li class="nav-item {{ Request::is('products') ? 'active':''; }}">
            <a class="nav-link" href="{{ url('products') }}">
              <i class="material-icons">storefront</i>
              <p>Products</p>
            </a>
          </li>
          <li class="nav-item  {{ Request::is('add-products') ? 'active':''; }}">
            <a class="nav-link" href="{{ url('add-products') }}">
              <i class="material-icons">build</i>
              <p>Add Products</p>
            </a>
          </li>
          <li class="nav-item {{ Request::is('admin/blogs') ? 'active':''; }}">
            <a class="nav-link" href="{{ url('admin/blogs') }}">
              <i class="material-icons">Title</i>
              <p>Blogs</p>
            </a>
          </li>
          <li class="nav-item {{ Request::is('add-blog') ? 'active':''; }}">
            <a class="nav-link" href="{{ url('add-blog') }}">
              <i class="material-icons">add</i>
              <p>New Blog</p>
            </a>
          </li>
          <li class="nav-item  {{ Request::is('orders') ? 'active':''; }}">
            <a class="nav-link" href="{{ url('orders') }}">
              <i class="material-icons">content_paste</i>
              <p>Orders</p>
            </a>
          </li>
          <li class="nav-item  {{ Request::is('users') ? 'active':''; }}">
            <a class="nav-link" href="{{ url('users') }}">
              <i class="material-icons">persons</i>
              <p>Users</p>
            </a>
          </li>
        </ul>
      </div>
    </div>