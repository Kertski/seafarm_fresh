<nav class="navbar navbar-expand-lg bg-body-tertiary bg-dark">
    <div class="container">
      <a class="navbar-brand" href="#">Navbar</a>
      <div class="search-bar">
        <form action="{{ url('searchproduct') }}" method="POST">
          @csrf
          <div class="input-group">
            <input type="search" class="form-control" name="product_name" id="search_product" placeholder="Search products" aria-describedby="basic-addon1">
            <button type="submit" class="input-group-text" id="basic-addon1" ><i class="fa fa-search"></i></button>
          </div>
        </form>
      </div>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ url('/')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('category')}}">Category</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('cart')}}">Cart
              <span class="badge badge-pill bg-primary cart-count"></span>
            </a>
          </li>
          <ul class="navbar-nav ms-auto">
            @guest
                @if (Route::has('login'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                @endif

                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
            @else
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    {{ Auth::user()->user_name }}
                </a>
                <ul class="dropdown-menu">
                  <li>
                    <a class="dropdown-item" href="{{ url('my-orders') }}">
                        My Orders
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="#">
                        My Profile
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="{{ route('logout') }}"  onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                  </li>                             
                </ul>
              </li>
            @endguest
        </ul>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>