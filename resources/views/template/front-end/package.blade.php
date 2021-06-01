@extends('template.front-end.master')
@section('content')

@include('template.front-end.nav')

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