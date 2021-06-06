@extends('template.front-end.master')
@section('content')

@include('template.front-end.nav')

	<div class="container container-fluid p-4 m-0">

		<h4 class="text-center">Fill In the Form Below Too get A Pricing On Your Paper</h4>

		<div class="row m-0 p-0 justify-content-center">
			<div class="col-12 col-md-10 col-sm-12 col-lg-10 text-center">

				<div class="card border-1 p-5">
					<form method="post" action="">
					@csrf
					<div class="form-group row">
						<div class="col-sm-12 col-md-2 col-lg-2">
							<label>Select Currency :</label>
						</div>
						<div class="col-sm-12 col-md-6 col-lg-6">
							<select class="form-control">
								<option>SELECT CURRENCY</option>
								<option>KSH</option>
								<option>USD</option>
								<option>EUR</option>
							</select>
						</div>
					</div>	
					<div class="form-group row">
						<div class="col-sm-12 col-md-2 col-lg-2">
							<label>Select Service :</label>
						</div>
						<div class="col-sm-12 col-md-6 col-lg-6">
							<select class="form-control">
								<option>SELECT SERVICE</option>
								<option>Academic Paper Writng</option>
								<option>Rewritng</option>
								<option>Resume Writing</option>
							</select>
						</div>
					</div>
					<div class="form-group row">
						<div class="col-sm-12 col-md-2 col-lg-2">
							<label>Select Paper :</label>
						</div>
						<div class="col-sm-12 col-md-6 col-lg-6">
							<select class="form-control">
								<option>SELECT PAPER</option>
								<option>Project Proposal</option>
								<option>Term Paper</option>
								<option>Resume</option>
							</select>
						</div>
					</div>
					<div class="form-group row">
						<div class="col-sm-12 col-md-2 col-lg-2">
							<label>Select Number of Words / Page :</label>
						</div>
						<div class="col-sm-12 col-md-6 col-lg-6">
							<input type="number" name="" class="form-control">
						</div>
					</div>
					<div class="form-group row">
						<div class="col-sm-12 col-md-2 col-lg-2">
							<label>Select Number Of Pages :</label>
						</div>
						<div class="col-sm-12 col-md-6 col-lg-6">
							<input type="number" name="" class="form-control">
						</div>
					</div>
					<div class="form-group row">
						<div class="col-sm-12 col-md-2 col-lg-2">
							<label>Select Hours Till Deadline :</label>
						</div>
						<div class="col-sm-12 col-md-6 col-lg-6">
							<input type="number" name="" class="form-control">
						</div>
					</div>
					<div class="row">
						<div class="col-12 col-md-12 col-lg-12 text-center">
							<button class="btn btn-solid btn-success">GET QUOTATION</button>
						</div>
					</div>
				</form>
				</div>
				
			</div>
		</div>
	</div>

@include('template.front-end.footer')
@endsection