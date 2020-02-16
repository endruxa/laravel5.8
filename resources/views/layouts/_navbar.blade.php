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
        <ul class="nav navbar-nav navbar-right">
              <!-- Authentication Links -->
              @guest
                  <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                  <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Register</a></li>
                  @else
                      <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                              {{ Auth::user()->name }} <span class="caret"></span>
                          </a>

                          <ul class="dropdown-menu">
                              <li>
                                  <a class="nav-link" href="{{ route('logout') }}"
                                      onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                      Logout
                                  </a>

                                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                      {{ csrf_field() }}
                                  </form>
                              </li>
                          </ul>
                      </li>
              @endguest
          </ul>
      </div>
  </nav>