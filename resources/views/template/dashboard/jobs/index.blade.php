 @extends('template.dashboard.master')
 @section('content')

 @include('template.dashboard.sidebar')

 <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Dashboard</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <div class="d-md-flex">
                            <ol class="breadcrumb ms-auto">
                                <li><a href="#" class="fw-normal">Dashboard</a></li>
                            </ol>
                            
                        </div>
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Three charts -->
                <!-- ============================================================== -->
               
                <!-- ============================================================== -->
                <!-- PRODUCTS YEARLY SALES -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- RECENT SALES -->
                <!-- ============================================================== -->
                
                <!-- ============================================================== -->
                <!-- Recent Comments -->
                <!-- ============================================================== -->
               
    <div class="row justify-content-center mb-5">
        <div class="col-12 bg-white p-3">

          

            <table id="myTable" class="table table-responsive table-striped table-bordered">
                <thead class="table-dark text-white">
                    <th scope="col" class="text-white">Name</th>
                    <th scope="col" class="text-white">Email</th>
                    <th scope="col" class="text-white">Description</th>
                    <th scope="col" class="text-white">Job Type</th>
                    <th scope="col" class="text-white">Hours</th>
                    <th scope="col" class="text-white">Pages</th>
                    <th scope="col" class="text-white">Actions</th>
                </thead>
                <tbody>
                    @foreach($submission as $data)

                        <tr>
                            <td>{{ $data->name }} </td>
                            <td>{{ $data->email }} </td>
                            <td>{{ $data->description }}</td>
                            <td>{{ $data->paper }} </td>
                            <td>{{ $data->hours }} </td>
                            <td>{{ $data->pages }} </td>
                            <td> 
                                <div class="row p-2">
                                    <div class="col-md-6 col-sm-12 col-lg-6 mb-2">
                                        <a class="btn btn-info text-white rounded-circle" href=" ">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                    </div>
                                    
                                </div>          
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center"> 2021 © JIBU
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>

@endsection