<header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <div class="navbar-header" data-logobg="skin6">
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="dashboard.html">
                        <!-- Logo icon -->
                        <b class="logo-icon">
                            <!-- Dark Logo icon -->
                            <img src="{{asset('ample/plugins/images/logo-icon.png')}}" alt="homepage" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span class="logo-text">
                            <!-- dark Logo text -->
                           Logo Here

                        </span>
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->

                    <a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none"
                        href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" style="background-color: #8da7be;">
                   
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                     <ul class="navbar-nav ms-auto d-flex align-items-center">

                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class=" in">
                            <form role="search" class="app-search d-none  me-3">
                                <input type="text" placeholder="Search..." class="form-control mt-0">
                                <a href="" class="active">
                                    <i class="fa fa-search"></i>
                                </a>
                            </form>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li>
                             <form method="post" action=" {{ route('logout') }} ">
                                        @csrf
                                        <button class="profile-pic btn btn-danger btn-sm"><i class="fas fa-sign-out-alt" aria-hidden="true"></i> Logout</button>
                                    </form>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar bg-custom-nav">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav bg-custom-nav">
                    <ul id="sidebarnav">
                        <!-- User Profile-->
                        <li class="sidebar-item pt-3">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('home')}}"
                                aria-expanded="false">
                                <i class="far fa-clock" aria-hidden="true"></i>
                                <span class="hide-menu">Dashboard</span>
                            </a>
                        </li>

                       
                        <div class="row pt-5">
                            <div class="col-md-12">
                                <p class="text-center"><b>Question Settings</b></p>
                                <li class="sidebar-item">
                                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('question.index')}}"
                                        aria-expanded="false">
                                        <i class="fa fa-table" aria-hidden="true"></i>
                                        <span class="hide-menu">Manage Questions</span>
                                    </a>
                                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('question.create')}}"
                                        aria-expanded="false">
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                        <span class="hide-menu">Create Question</span>
                                    </a>
                                 </li>
                            </div>
                        </div>

                        

                      
                        <div class="row pt-5">
                            <div class="col-md-12">
                                <p class="text-center"><b>Answer Settings</b></p>
                                <li class="sidebar-item">
                                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('answer.index')}}"
                                        aria-expanded="false">
                                        <i class="fa fa-table" aria-hidden="true"></i>
                                        <span class="hide-menu">Manage Answers</span>
                                    </a>
                                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('answer.create')}}"
                                        aria-expanded="false">
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                        <span class="hide-menu">Create Answer</span>
                                    </a>
                                 </li>
                            </div>
                        </div>

                         <div class="row pt-5">
                            <div class="col-md-12">
                                <p class="text-center"><b>Subscription Settings</b></p>
                                <li class="sidebar-item">
                                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('sub.index')}}"
                                        aria-expanded="false">
                                        <i class="fa fa-table" aria-hidden="true"></i>
                                        <span class="hide-menu">Manage Subscription</span>
                                    </a>
                                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('sub.create')}}"
                                        aria-expanded="false">
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                        <span class="hide-menu">Create Package</span>
                                    </a>
                                 </li>
                            </div>
                        </div>

                         <div class="row pt-5">
                            <div class="col-md-12">
                                <p class="text-center"><b>Jobs Settings</b></p>
                                <li class="sidebar-item">
                                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('job')}}"
                                        aria-expanded="false">
                                        <i class="fa fa-table" aria-hidden="true"></i>
                                        <span class="hide-menu">Manage Jobs</span>
                                    </a>
                                 </li>
                            </div>
                        </div>

                        <div class="row pt-5">
                            <div class="col-md-12">
                                
                                <li class="sidebar-item">
                                    <form method="post" action=" {{ route('logout') }} ">
                                        @csrf
                                        <button class="sidebar-link waves-effect waves-dark sidebar-link"><i class="fas fa-sign-out-alt" aria-hidden="true"></i> Logout</button>
                                    </form>
                                   
                                 </li>
                            </div>
                        </div>

                    </ul>

                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>