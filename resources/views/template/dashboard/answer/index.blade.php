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

            <a class="btn btn-success border rounded mb-2 text-white" href=" {{ route('answer.create') }} ">
                Add Answer +
            </a> 

            <table id="myTable" class="table table-responsive-sm table-striped table-bordered">
                <thead class="table-dark text-white">
                    <th scope="col" class="text-white">Answer</th>
                    <th scope="col" class="text-white">Explanation</th>
                    <th scope="col" class="text-white">Actions</th>
                </thead>
                <tbody>
                    @foreach($answer as $data)
                        <tr>
                            <td> {{ $data->answer }} </td>
                            <td> {{ $data->explanation }} </td>
                            <td> 
                                <div class="row p-2">
                                    <div class="col-6">
                                        <a class="btn btn-info text-white rounded-circle" href=" {{ route('answer.edit',$data->id) }} ">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                    </div>
                                    <div class="col-6 col-sm-12 col-md-2 col-lg-2">
                                        <button type="button" class="btn btn-danger rounded-pill text-white" data-bs-toggle="modal" data-bs-target="#exampleModal{{$data->id}}">
                                          <i class="fas fa-trash-alt"></i>
                                        </button>

                                        <div class="modal fade" id="exampleModal{{$data->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                          <div class="modal-dialog">
                                            <div class="modal-content">
                                              <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Delete Confirmation </h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                              </div>
                                              <div class="modal-body text-danger">
                                                Are you sure you want to delete?
                                              </div>
                                              <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                                                <form action=" {{ route('answer.destroy',$data->id) }} " method="post">                             @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger ml-3"/>
                                                        <i class="fas fa-trash-alt"></i>
                                                    </button>
                                                </form>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        
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