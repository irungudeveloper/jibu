<header class="header header-1 bg-white">
      <div class="navbar-area">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-12">
              <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand" href="index.html">
                  <img src="assets/img/logo/logo.svg" alt="Logo" />
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="toggler-icon"></span>
                  <span class="toggler-icon"></span>
                  <span class="toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                  <ul id="nav" class="navbar-nav ml-auto">
                    <li class="nav-item">
                      <a class="page-scroll" href=" {{ route('landing') }} ">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="page-scroll" href="{{ route('view.question') }}">Questions</a>
                    </li>
                    <li class="nav-item">
                      <a class="page-scroll" href="{{ route('view.package') }}">Packages</a>
                    </li>
                    <li class="nav-item">
                      <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                    
                    @auth

                    @can('administrator')
                      <li class="nav-item">
                        <a href="{{ url('/home') }}" class="page-scroll text-primary">Dashboard</a>
                      </li>
                    @endcan

                    @can('subscriber')
                      <li class="nav-item">
                        <form method="POST" action=" {{ route('logout') }} ">
                          @csrf
                          <button class="page-scroll text-danger">LOGOUT</button>
                        </form>
                      </li>
                    @endcan
                    @endauth
                     
                    @guest
                      <li class="nav-item"> 
                        <a href="{{route('new.login')}}" class="page-scroll text-success">Login</a>
                      </li>
                    @endguest

                  </ul>
                </div>
                <!-- navbar collapse -->
              </nav>
              <!-- navbar -->
            </div>
          </div>
          <!-- row -->
        </div>
        <!-- container -->
      </div>
      <!-- navbar area -->
    </header>