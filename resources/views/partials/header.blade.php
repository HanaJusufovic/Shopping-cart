<!-- <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
  <h5 class="my-0 mr-md-auto font-weight-normal">Company name</h5>
  <nav class="my-2 my-md-0 mr-md-3">
    <a class="p-2 text-dark" href="#">Features</a>
    <a class="p-2 text-dark" href="#">Enterprise</a>
    <a class="p-2 text-dark" href="#">Support</a>
    <a class="p-2 text-dark" href="#">Pricing</a>
  </nav>
  <a class="btn btn-outline-primary" href="{{ route('user.signup') }}">Sign up</a>
  <a class="btn btn-outline-primary" href="{{ route('user.signin') }}">Sign in</a>
  <a class="p-2 text-dark" href="{{ route('user.logout') }}">Logout</a>
</div> -->

<nav class="navbar navbar-expand-lg navbar-light bg-light rounded">
    <a class="navbar-brand" href=" {{ route('product.index') }} ">BOOKSHOP</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExample09">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href=" {{ route('product.shoppingCart') }} "> Shopping Cart
          
          <span class="badge">  {{ Session::has('cart') ? Session::get('cart')->totalQty : '' }}  </span>
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="dropdown09" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">User Managment</a>
          <div class="dropdown-menu" aria-labelledby="dropdown09">
          @if(Auth::check())

          <a class="dropdown-item" href="{{ route('user.profile') }}"> User Profile</a>
          <hr>
            <a class="dropdown-item" href="{{ route('user.logout') }}">Logout</a>
          @else
          <a class="dropdown-item" href="{{ route('user.signup') }}"> Sign Up</a>
          <a class="dropdown-item" href="{{ route('user.signin') }}"> Sign In</a>

          @endif
            
           
          </div>
        </li>
      </ul>
    </div>
  </nav>