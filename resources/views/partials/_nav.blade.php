<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{ url('/') }}"><i class="fa fa-pencil" aria-hidden="true"></i></i> #Pens</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right pull-right">
        <li>
          <a href="{{ route('products.shoppingCart') }}">
            <i class="fa fa-shopping-cart" aria-hidden="true"> </i> 
            Shopping Cart 
            <span class="badge">{{ Session::has('cart') ? Session::get('cart')->totalQty : '' }}</span></a>
          </li>
          @if (Auth::check())
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user" aria-hidden="true"></i> {{ Auth::user()->name }} <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="{{ route('user.profile') }}" class="">Profile</a></li>
              <li><a href="{{ route('user.logout') }}" class="">Logout</a></li>
            </ul>
          </li>
          @endif
          @if (!(Auth::check()))
          <li><a href="{{ url('login') }}"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</a></li>
          <li><a href="{{ url('register') }}"><i class="fa fa-registered" aria-hidden="true"></i> Register</a></li>
          @endif
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>