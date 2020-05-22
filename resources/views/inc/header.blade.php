
<nav class="navbar navbar-expand-lg navbar-dark">
            <a href="{{route('home')}}" class="navbar-brand">KÓRERMEN</a>
            <button class="navbar-toggler" type="button" data-target="#navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a href="{{route('home')}}" class="nav-link">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link"></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navdrop" role="button" data-toggle="dropdown" data-hover="dropdown">Database</a>
                        <div class="dropdown-menu" style="width:500px" aria-labelledby="navbarDropdown">
                          <a href="{{route('movies')}}" class="dropdown-item">Create</a>
                          <a href="{{route('all')}}" class="dropdown-item">All</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navdrop" role="button" data-toggle="dropdown" data-hover="dropdown">GENRES</a>
                        <div class="dropdown-menu" style="width:500px" aria-labelledby="navbarDropdown">
                  <div class="d-flex justify-content-sm-between flex-column flex-sm-row">
                      <div>
                          <a class="dropdown-item" href="{{route('genres')}}">Action</a>
                          <a class="dropdown-item" href="{{route('genres')}}">Biography</a>
                          <a class="dropdown-item" href="{{route('genres')}}">Crime</a>
                          <a class="dropdown-item" href="{{route('genres')}}">Family</a>
                          <a class="dropdown-item" href="{{route('genres')}}">Horror</a>
                          <a class="dropdown-item" href="{{route('genres')}}">Psychological</a>
                          <a class="dropdown-item" href="{{route('genres')}}">War</a>
                      </div>
                      <div>
                          <a class="dropdown-item" href="{{route('genres')}}">Adventure</a>
                          <a class="dropdown-item" href="{{route('genres')}}">Comedy</a>
                          <a class="dropdown-item" href="{{route('genres')}}">Documentary</a>
                          <a class="dropdown-item" href="{{route('genres')}}">Fantasy</a>
                          <a class="dropdown-item" href="{{route('genres')}}">Thriller</a>
                          <a class="dropdown-item" href="{{route('genres')}}">Musical</a>
                      </div>
                      <div>
                          <a class="dropdown-item" href="{{route('genres')}}">Animation</a>
                          <a class="dropdown-item" href="{{route('genres')}}">Costume</a>
                          <a class="dropdown-item" href="{{route('genres')}}">Drama</a>
                          <a class="dropdown-item" href="{{route('genres')}}">History</a>
                          <a class="dropdown-item" href="{{route('genres')}}">Romance</a>
                          <a class="dropdown-item" href="{{route('genres')}}">Sports</a>
                      </div>
                  </div>
              </div>
                    </li>
                </ul>
            </div>
                      <!-- Right Side Of Navbar -->
                      <ul class="navbar-nav ml-auto">
                      <!-- Authentication Links -->
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
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                      </form>
                        </div>
                      </li>
                            @endguest
                      </ul>
</nav>
