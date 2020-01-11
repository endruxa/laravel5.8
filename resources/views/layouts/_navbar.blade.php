<nav class="navbar navbar-expand-lg navbar-light fixed-top">
    <div class="container">
      <a class="navbar-brand" href="/startbootstrap-clean-blog-jekyll/">Clean Blog</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fa fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/startbootstrap-clean-blog-jekyll/about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('articles') }}">Posts</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/startbootstrap-clean-blog-jekyll/contact">Contact</a>
          </li>
          @if (Route::has('login'))
              @auth
              <li class="nav-item">
                  <a href="{{ url('/main') }}" class="nav-link">Main</a>
              </li>
              @else
              <li class="nav-item">
                  <a href="{{ route('login') }}" class="nav-link">Login</a>
              </li>
                  @if (Route::has('register'))
                  <li class="nav-item">
                      <a href="{{ route('register') }}" class="nav-link">Register</a>
                  </li>
                  @endif
              @endauth
      @endif
        </ul>
      </div>
    </div>
  </nav>