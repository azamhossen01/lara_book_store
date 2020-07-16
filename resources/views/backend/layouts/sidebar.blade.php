<ul class="sidebar navbar-nav">
    <li class="nav-item active">
    <a class="nav-link" href="{{route('home')}}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span>
      </a>
    </li>
    {{-- <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-fw fa-folder"></i>
        <span>Pages</span>
      </a>
      <div class="dropdown-menu" aria-labelledby="pagesDropdown">
        <h6 class="dropdown-header">Login Screens:</h6>
        <a class="dropdown-item" href="login.html">Login</a>
        <a class="dropdown-item" href="register.html">Register</a>
        <a class="dropdown-item" href="forgot-password.html">Forgot Password</a>
        <div class="dropdown-divider"></div>
        <h6 class="dropdown-header">Other Pages:</h6>
        <a class="dropdown-item" href="404.html">404 Page</a>
        <a class="dropdown-item" href="blank.html">Blank Page</a>
      </div>
    </li> --}}
    <li class="nav-item">
    <a class="nav-link" href="{{route('categories.index')}}">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>Categories</span></a>
    </li>
    <li class="nav-item">
    <a class="nav-link" href="{{route('writers.index')}}">
        <i class="fas fa-fw fa-user"></i>
        <span>Writers</span></a>
    </li>
    <li class="nav-item">
    <a class="nav-link" href="{{route('books.index')}}">
        <i class="fas fa-fw fa-book"></i>
        <span>Books</span></a>
    </li>
    <li class="nav-item">
    <a class="nav-link" href="{{route('customers.index')}}">
        <i class="fas fa-fw fa-users"></i>
        <span>Customers</span></a>
    </li>
    <li class="nav-item">
    <a class="nav-link" href="{{route('orders.index')}}">
        <i class="fas fa-fw fa-cubes"></i>
        <span>Orders</span></a>
    </li>
    <li class="nav-item">
    <a class="nav-link" href="{{route('book_return_index')}}">
        <i class="fas fa-fw fa-book"></i>
        <span>Book Return</span></a>
    </li>
    <li class="nav-item">
    <a class="nav-link" href="{{route('blogs.index')}}">
        <i class="fas fa-fw fa-newspaper"></i>
        <span>Blogs</span></a>
    </li>
    <li class="nav-item">

        <a class="nav-link" href="{{ route('logout') }}"
           {{-- data-target="#logoutModal"   --}}
           onclick="event.preventDefault();
          document.getElementById('logout-form').submit();"><i class="fas fa-fw fa-circle"></i>
        <span>Logout</span></a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </li>
  </ul>