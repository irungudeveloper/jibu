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
                    <p class="text-center"><b>QUESTION UPDATE FORM</b></p>
                    <div class="col-md-12 bg-white p-3">
                            <form method="POST" action=" {{ route('question.update',$question->id) }} ">
                @csrf
                @method('PUT')
                <div class="form=group row">
                    <label for="question"><b>Question</b></label>
                    <textarea class="form-control col-12 border border-2 mb-2" id="question" name="question">{{$question->question}}</textarea>
                </div>
                @foreach($question->option as $option)
                <div class="form-group">
                     <div class="row pt-3">
                        <div class="col-6">
                            <label for="A" class="col-3">A:</label>
                            <input type="text" name="option_a" class="form-control col-12 border border-2" id="A" value="{{$option->option_a}}">
                        </div>
                        <div class="col-6">
                            <label for="B" class="col-3">B:</label>
                            <input type="text" name="option_b" class="form-control col-12 border border-2" id="B" value="{{$option->option_b}}">
                        </div>
                     </div>
                     <div class="row pt-3">
                        <div class="col-6">
                            <label for="C" class="col-3">C:</label>
                            <input type="text" name="option_c" class="form-control col-12 border border-2" id="C" value="{{$option->option_c}}">
                        </div>
                        <div class="col-6">
                            <label for="D" class="col-3">D:</label>
                            <input type="text" name="option_d" class="form-control col-12 border border-2" id="D" value="{{$option->option_d}}">
                        </div>
                     </div>
                </div>
                @endforeach
                <div class="form-group row">
                    <div class="col-12 text-center">
                        <button class="btn btn-success pl-3 pr-3 text-white mt-3">UPDATE QUESTION +</button>
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