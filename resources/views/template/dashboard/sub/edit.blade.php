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
                <div class="row justify-content-center">
                    <p class="text-center"><b>QUESTION CREATION FORM</b></p>
                    <div class="col-md-12 bg-white p-3">
                           <form action=" {{ route('sub.update',$sub->id) }} " method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group row">
                        <div class="col-12">
                             <label for="sub">Name</label>
                             <input type="text" name="name" class="form-control" id="sub" value="{{$sub->name}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-12">
                             <label for="amount">Amount</label>
                             <input type="integer" name="amount" class="form-control" id="amount" value="{{$sub->amount}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-12 text-center">
                             <button class="btn btn-solid btn-success">UPDATE</button>
                        </div>
                    </div>
                </form>
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