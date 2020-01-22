<nav class="navbar navbar-expand-lg navbar-light">
      <button class="navbar-toggler navbar-toggler-left" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fa fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('category.index') }}">Caregories</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('articles') }}">Posts</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/startbootstrap-clean-blog-jekyll/contact">Contact</a>
          </li>
        </ul>
          @if (Route::has('login'))
              @auth
              <div class="top-right links"> 
                  <a href="{{ url('/main') }}" class="nav-link">Main</a>
                @else
                    <a href="{{ route('login') }}" class="nav-link">Login</a>
                    @if (Route::has('register'))
                      <a href="{{ route('register') }}" class="nav-link">Register</a>
                    @endif
              </div>
              @endauth
           @endif
      </div>
  </nav>