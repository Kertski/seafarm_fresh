<nav class="navbar navbar-dark navbar-expand-xl navbar_cont navbar-absolute fixed-top">
    <div class="ms-3">
      <a class="navbar-brand" href="#"><img src="{{ asset('assets/images/seafarm-logo-white.png')}}" alt="Seafarm Fresh" width="220px"></a>
    </div>
      <button class="navbar-toggler me-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ url('/')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('category')}}">Products</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('blog')}}">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('about-us')}}">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('contact-us')}}">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('cart')}}"><i class="fa fa-shopping-cart">

            </i>
              <span class="badge badge-pill bg-white cart-count"></span>
            </a>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto">
          <div class="search-bar">
            <form action="{{ url('searchproduct') }}" method="POST">
              @csrf
              <div class="input-group">
                <input type="search" class="form-control nav-search-input" name="product_name" id="search_product" placeholder="Search products" aria-describedby="basic-addon1">
                <button type="submit" class="input-group-text search-icon-button" id="basic-addon1" ><i class="fa fa-search"></i></button>
              </div>
            </form>
          </div>
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
          <li class="nav-item dropdown pe-3">
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
      </div>
  </nav>