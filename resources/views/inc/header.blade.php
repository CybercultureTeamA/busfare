
    <div class="container-fluid">
      <div class="row align-items-center">
        
        <div class="col-12 search-form-wrap js-search-form">
          <form method="get" action="#">
            <input type="text" id="s" class="form-control" placeholder="Search...">
            <button class="search-btn" type="submit"><span class="icon-search"></span></button>
          </form>
        </div>

        <div class="col-4 site-logo">
              <a class="text-black h2 mb-0" href="{{ url('/') }}">
                  {{ config('app.name', 'Laravel') }}
              </a>
          
        </div>

        <div class="col-8 text-right">
          <nav class="site-navigation" role="navigation">
            <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block mb-0">
              <li><a href="/">Home</a></li>
              <li><a href="/about">About</a></li>
              
             
              
              <li class="nav-item"><a class="nav-link" href="/posts/create">Create Post</a></li>
              @guest
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
              </li>
              @if (Route::has('register'))
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                  </li>
              @endif
          @else
              <li class="nav-item dropdown">
                  <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                      {{ Auth::user()->name }} <span class="caret"></span>
                  </a>

                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="{{ route('logout') }}"
                         onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                          {{ __('Logout') }}
                      </a>
                      <a  class="dropdown-item" href="/home">Home</a>  

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          
                          @csrf
                      
                                     
                                 
                      </form>
                  </div>
              </li>
              
              
              <li class="d-none d-lg-inline-block"><a href="#" class="js-search-toggle"><span class="icon-search"></span></a></li>
              <!-- lets check -->
              <ul class="navbar-nav ml-auto">
                     

                  <!-- Authentication Links -->
                 
                  @endguest
             
          </div>
      </div>
 

              <!-- lets check -->
            </ul>
          </nav>
          <a href="#" class="site-menu-toggle js-menu-toggle text-black d-inline-block d-lg-none"><span class="icon-menu h3"></span></a></div>
        </div>

    </div>
  