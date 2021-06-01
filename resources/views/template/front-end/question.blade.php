@extends('template.front-end.master')
@section('content')

@include('template.front-end.nav')

<div class="row m-3">
	<div class="col-12">
		<p>Search for the question or peruse through the available questions</p>

		<form>
			<div class="form-group row">
				<div class="input-group mb-3">
				  <input type="text" class="form-control" placeholder="Search" aria-label="Recipient's username" aria-describedby="button-addon2">
				  <button class="btn btn-outline-success" type="button" id="button-addon2">Search</button>
				</div>
			</div>
		</form>

	</div>
</div>

  <div class="row m-3" id="questions">
      <div class="col-12">
        <h2 class="text-center pt-3">All Questions</h2>
        <div class="row">
          @foreach($question as $data)
            <div class="col-md-6 col-lg-6 col-xs-6 col-sm-12">
              <div class="card border border-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-12">
                      <h3 style="text-transform: capitalize;">{{ $data->question }}</h3>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12">
                        <div class="row">
                          @foreach($data->option as $option)
                              <div class="col-md-6 col-lg-6 col-xs-6 col-sm-12">
                                <p>A: {{ $option->option_a }} </p>
                              </div>
                              <div class="col-md-6 col-lg-6 col-xs-6 col-sm-12">
                                <p>B: {{ $option->option_b }} </p>
                              </div>
                              <div class="col-md-6 col-lg-6 col-xs-6 col-sm-12">
                                <p>C: {{ $option->option_c }} </p>
                              </div>
                              <div class="col-md-6 col-lg-6 col-xs-6 col-sm-12">
                                <p>D: {{ $option->option_d }} </p>
                              </div>
                           @endforeach
                        </div>
                    </div>
                  </div>
                  <div class="row">
                  </div>
                </div>
                <div class="card-footer text-center">
                  @if(Auth::user())
                    <a href=" {{ route('answer.single',$data->id) }} " class="btn btn-success pl-3 pr-3">VIEW ANSWER</a>       
                  @else
                    <a href="/pay/100/{{$data->id}}" class="btn btn-success pl-3 pr-3">Pay 100 To View Answer</a>  
                  @endif
                </div>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </div>


@include('template.front-end.footer')
@endsection