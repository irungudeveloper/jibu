@extends('template.front-end.master')
@section('content')

@include('template.front-end.navbar')

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

      <div class="row m-3 p-2 mt-5" id="packages">
      <div class="col-12">
        <h2 class="text-center">Subscription Packages</h2>
      </div>
     
     @foreach($sub as $data)
      <div class="col-md-4 col-lg-4 col-xs-4 col-sm-12">
        <div class="m-1 card border border-3"> 
        
          <div class="card-body">
            <h4 class="text-center">{{ $data->name }}</h4>
            <p class="text-center"><b>Amount: {{ $data->amount }} </b> </p>
            <p></p>
          </div>
            
              @can('administrator')

              @else
                <div class="card-footer text-center">
                   <a href=" {{ route('pay.sub', $data->id ) }} " class="btn btn-solid btn-success">Subscribe</a>
               </div>
              @endcan
            
        </div>
      </div>
      @endforeach
    </div>

@include('template.front-end.footer')

@endsection