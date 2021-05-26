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
                      <a class="page-scroll" href="{{ route('landing') }}">Questions</a>
                    </li>
                    <li class="nav-item">
                      <a class="page-scroll" href="{{ route('landing') }}">Packages</a>
                    </li>
                    <li class="nav-item">
                      <a class="page-scroll" href="{{ route('landing') }}">Contact</a>
                    </li>
                     @if (Route::has('login'))

                    @auth

                    @can('administrator')
                      <li class="nav-item">
                        <a href="{{ url('/home') }}" class=" mt-2 btn btn-outline-primary rounded-pill">Dashboard</a>
                      </li>
                    @endcan

                    @can('subscriber')
                      <li class="nav-item">
                        <form method="POST" action=" {{ route('logout') }} ">
                          @csrf
                          <button class="mt-3 btn-sm btn btn-outline-danger rounded-pillml-5">LOGOUT</button>
                        </form>
                      </li>
                    @endcan
                    @endauth
                     @endif
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