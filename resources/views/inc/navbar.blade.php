

<nav class="navbar navbar-expand-md navbar-dark bg-dark py-1" style="border-bottom:#ffd700 1px solid;">
    <a class="navbar-brand mr-0 pr-0 my-0" href="/"><img src="https://scontent-dus1-1.xx.fbcdn.net/v/t1.0-9/52487937_370561297060489_5365227804193456128_o.png?_nc_cat=104&_nc_ht=scontent-dus1-1.xx&oh=bb0e5ab0172f02c6521d847d7dbc83d3&oe=5CF2995D" height="50px" width="50px" style="border-radius: 50%;">
    </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
          <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Left Side Of Navbar -->
          <ul class="navbar-nav">

          </ul>
          
          <ul class="navbar-nav py-0">
              <li class="nav-item py-0">
                <a class="nav-link py-0" href="/" style="color: #ffd700; ">Home</a>
              </li>
              <li class="nav-item py-0">
                <a class="nav-link py-0" href="/about" style="color: #ffd700; ">About</a>
              </li>
              <li class="nav-item py-0">
                {{-- <a class="nav-link pr-4 mr-4 py-0" href="/contact" style="color: #ffd700; ">Contact</a> --}}
              </li>
            </ul>

          <!-- Right Side Of Navbar -->
          <ul class="navbar-nav ml-auto">
              <!-- Authentication Links -->
            @guest
                  <li class="nav-item">
                      <a class="nav-link text-light py-0" href="{{ route('login') }}">{{ __('Login') }}</a>
                  </li>
                  @if (Route::has('register'))
                      <li class="nav-item">
                          <a class="nav-link text-light py-0" href="{{ route('register') }}">{{ __('Register') }}</a>
                      </li>
                  @endif
              @else
                  <li class="nav-item dropdown">
                      <a id="navbarDropdown" class="nav-link dropdown-toggle text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                          {{ Auth::user()->name }} <span class="caret"></span>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right bg-dark" aria-labelledby="navbarDropdown">
                          
                        <a class="dropdown-item bg-dark" style="color: #ffffff;" href="/dashboard">Dashboard</a>

                        <a class="dropdown-item bg-dark" style="color: #ffffff;" href="/members">Everyone</a>
                        
                        <a class="dropdown-item bg-dark" style="color: #ffffff;" href="/members/create">Add Member</a>
                        
                        <a class="dropdown-item bg-dark" style="color: #ffffff;" href="/events/create">Post Event</a>

                          <a class="dropdown-item bg-dark" style="color: #ffffff;" href="{{ route('logout') }}"
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
      </div>
</nav>