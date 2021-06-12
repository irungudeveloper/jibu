@extends('template.front-end.master')
@section('content')

@include('template.front-end.nav')

	<div class="container p-0 m-0">
		<div class="row m-0 p-4 justify-content-center">
			<div class="col-12 col-sm-12 col-md-12 col-lg-10">
				<h4 class="text-center">Fill In The Details In The Form Below</h4>

				<div class="card border-1 p-2">
					<form onsubmit = "event.preventDefault(); clicked();">
          @csrf
          
          
          <div class="form-group row justify-content-center">
            <div class="col-sm-12 col-md-2 col-lg-2">
              <label>Name </label>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
              <input type="text" name="" class="form-control" id="s_name">
            </div>
          </div>
          <div class="form-group row justify-content-center">
            <div class="col-sm-12 col-md-2 col-lg-2">
              <label>Email </label>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
              <input type="email" name="" class="form-control" id="email">
            </div>
          </div>

          <div class="form-group row justify-content-center">
            <div class="col-sm-12 col-md-2 col-lg-2">
              <label>Essay Description</label>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
              <textarea name="message" id="message" class="form-control" placeholder="Message" rows="6"></textarea>
            </div>
          </div>
     
          <div class="row justify-content-center">
            <div class="col-12 col-md-12 col-lg-12 text-center">
                <button type="submit" id="submit" class="text-white button button-sm radius-10-0">Proceed To Payment</button>
            </div>
          </div>

          <div class="row justify-content-center">
            <div class="col-12 col-md-12 col-lg-12 text-center" id="addquote">
                
            </div>
          </div>

        </form>
				</div>

			</div>
		</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<script type="text/javascript">

		function clicked()
		{
			// alert(sessionStorage.getItem("hours"));

			var hours = sessionStorage.getItem("hours");
			var paper = sessionStorage.getItem("paper");
			var pages = sessionStorage.getItem("pages");

			var price = sessionStorage.getItem("price");

			var s_name = $('#s_name').val();
			var email = $('#email').val();
			var desc = $('#message').val();


			console.log('here');
			  $.ajax(
                                  {
                                      url:" {{ route('submit') }} ",
                                      method:"POST",
                                      data:{
                                        "_token":" {{ csrf_token() }} ",
                                        name:s_name,
                                        email:email,
                                        description:desc,
                                        hours:hours,
                                        paper:paper,
                                        pages:pages
                                      },
                                      dataType:'json',
                                      success:function(response) 
                                      { 
                                          swal("Success!", "The Job Has Been Sent. It will be sent via the email provided", "success");
                                          // console.table(response);
                                      },
                                      error:function(error)
                                      {
                                        console.log(error);
                                      }
                                  });

		}

	</script>

@include('template.front-end.footer')
@endsection