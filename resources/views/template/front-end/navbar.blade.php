 <section class="hero-section-wrapper-1 mb-30">

      <!-- ========================= header-4 start ========================= -->
      <header class="header header-4">
        <div class="navbar-area bg-white">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg">
                  <a class="navbar-brand" href="index.html">
                    <img src="assets/img/logo/logo.svg" alt="Logo" />
                  </a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent4" aria-controls="navbarSupportedContent4" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="toggler-icon"></span>
                    <span class="toggler-icon"></span>
                    <span class="toggler-icon"></span>
                  </button>

                  <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent4">
                    <ul id="nav4" class="navbar-nav ml-auto">
                      <li class="nav-item">
                        <a class="page-scroll" href=" {{ route('landing') }} ">Home</a>
                      </li>
                      <li class="nav-item">
                        <a class="page-scroll" href="{{route('view.question')}}">Questions</a>
                      </li>
                      <li class="nav-item">
                        <a class="page-scroll" href="{{route('view.package')}}">Packages</a>
                      </li>
                      <li class="nav-item">
                        <a class="page-scroll" href="#contact">Contact</a>
                      </li>

                
                    @auth

                    @can('administrator')
                      <li class="nav-item">
                        <a href="{{ url('/home') }}" class="btn btn-outline-primary rounded-pill ml-5">Dashboard</a>
                      </li>
                    @endcan

                    @can('subscriber')
                      <li class="nav-item">
                        <form method="POST" action=" {{ route('logout') }} ">
                          @csrf
                          <button class="btn btn-outline-danger rounded-pillml-5">LOGOUT</button>
                        </form>
                      </li>
                    @endcan
                    @endauth
                    
                    @guest
                    
                       <li class="nav-item">
                        <a href="{{route('new.login')}}" class="btn btn-success text-white p-2">Login</a>
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
      <!-- ========================= header-4 end ========================= -->

      <!-- ========================= hero-1 start ========================= -->
      <div class="hero-section hero-style-1">
        <div class="container">
          <div class="row">
            <div class="col-lg-6">
              <div class="hero-content-wrapper">
                <h3>One Stop Shop For Your Academic Question Answers</h3>
                <p>Get started by searching for the question below or scroll to view other featured questions and gain knowledge</p>

                  <div class="input-group mb-3">
                      <input type="text" class="form-control" placeholder="Search For Question" aria-label="Recipient's username" aria-describedby="basic-addon2">
                      <span class="input-group-text" id="basic-addon2"><button class="btn btn-outline-success">Search <i class="lni lni-search-alt"></i></button></span>
                    </div>
              </div>
            </div>
            <div class="col-lg-6 align-self-end">
              <div class="hero-image">

              </div>
            </div>
          </div>
        </div>
        <div class="shapes">
          <img src="{{asset('lindyui/asset/img/hero/hero-1/shape-1.svg')}}" alt="" class="shape shape-1">
          <img src="{{asset('lindyui/asset/img/hero/hero-1/shape-2.svg')}}" alt="" class="shape shape-2">
          <img src="{{asset('lindyui/asset/img/hero/hero-1/shape-3.svg')}}" alt="" class="shape shape-3">
        </div>
      </div>
      <!-- ========================= hero-1 end ========================= -->

    </section>