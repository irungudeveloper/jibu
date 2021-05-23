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
                            <form method="POST" action=" {{ route('question.store') }} ">
                @csrf
                <div class="form=group row">
                    <label for="question"><b>Question</b></label>
                    <textarea class="form-control border border-2" id="question" name="question"></textarea>
                </div>
                <div class="form-group pt-3">
                     <div class="row">
                        <div class="col-6">
                            <label for="A" class="col-3"><b>A:</b></label>
                            <input type="text" name="option_a" class="form-control col-12 border border-2" id="A">
                        </div>
                        <div class="col-6">
                            <label for="B" class="col-3"><b>B:</b></label>
                            <input type="text" name="option_b" class="form-control col-12 border border-2" id="B">
                        </div>
                     </div>
                     <div class="row pt-3">
                        <div class="col-6">
                            <label for="C" class="col-3"><b>C:</b></label>
                            <input type="text" name="option_c" class="form-control col-12 border border-2" id="C">
                        </div>
                        <div class="col-6">
                            <label for="D" class="col-3"><b>D:</b></label>
                            <input type="text" name="option_d" class="form-control col-12 border border-2" id="D">
                        </div>
                     </div>
                </div>
                <div class="form-group row">
                    <div class="col-12 text-center">
                        <button class="btn btn-success pl-4 pr-4 text-white">CREATE QUESTION + </button>
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
        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script type="text/javascript">
        
        $(document).ready(function()
        {
            var q_id;
            var options;
            var select=document.getElementById('option');

            $('#question').on('change',function(e)
            {
                q_id = $('#question').val();
                console.log(q_id);

                $.ajax(
                    {
                        url:" {{ route('answer.option') }} ",
                        method:'POST',
                        data:{
                            "_token":" {{ csrf_token() }} ",
                            id:q_id
                        },
                        dataType:'json',
                        success:function(response)
                        {
                            console.log(response.response_data[0]['option_a']);

                            var myOption1 = document.createElement("option");
                            var myOption2 = document.createElement("option");
                            var myOption3 = document.createElement("option");
                            var myOption4 = document.createElement("option");
                            myOption1.text = response.response_data[0]['option_a'];
                            myOption2.text = response.response_data[0]['option_b'];
                            myOption3.text = response.response_data[0]['option_c'];
                            myOption4.text = response.response_data[0]['option_d'];

                            myOption1.value = response.response_data[0]['option_a'];
                            myOption2.value = response.response_data[0]['option_b'];
                            myOption3.value = response.response_data[0]['option_c'];
                            myOption4.value = response.response_data[0]['option_d'];

                            select.add(myOption1);
                            select.add(myOption2);
                            select.add(myOption3);
                            select.add(myOption4);

                        },
                        error:function(error)
                        {
                            console.log(error);
                        }
                    });
            });
        });

    </script>


@endsection