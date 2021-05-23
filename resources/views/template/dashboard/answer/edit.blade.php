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
                    <div class="col-md-12 p-3 bg-white">
                        <form method="POST" action=" {{ route('answer.update',$answer->id) }} ">
                @csrf
                @method('PUT')
                <div class="form-group row pt-3">
                    <h4 class="text-center">Answer Update Form</h4>
                    <label for="question"><b>Question</b></label>
                    <select id="question" name="question_id" class="form-control border border-2">
                        <option value=" {{ $answer->question->id }} " >{{$answer->question->question}}</option>
                        @foreach($question as $data)
                            <option value=" {{ $data->id }} "> {{ $data->question }} </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group row pt-3">
                    <label for="option"><b>Option</b></label>
                    <select id="option" name="answer" class="form-control border border-2">
                        <option value=" {{ $answer->answer }} " >{{$answer->answer}}</option>
                    </select>
                </div>
                <div class="form-group row pt-3">
                    <label for="explanation"><b>Explanation</b></label>
                    <textarea class="form-control border border-2" id="explanation" name="explanation">{{$answer->explanation}}</textarea>
                </div>
                <div class="form-group row">
                    <div class="col-12 text-center">
                        <button class="btn btn-success pl-3 pr-3 text-white">UPDATE ANSWER</button>
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