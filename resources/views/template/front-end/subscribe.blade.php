@extends('template.front-end.master')
@section('content')

@include('template.front-end.nav')
  
 <div class="container-fluid">
      <div class="row m-0 p-md-5 p-sm-0 p-lg-2 ">
      <div class="col-12 p-2 border border-5">

        @foreach($sub as $data)
         
       <p>
         Thank you for selecting the <b>{{$data->name}}</b> package. <br>If you wish to proceed, please select a convenient payment option to pay <b>{{ $data->amount }}/=</b></br>
       </p>
         @endforeach

         <h4 class="text-center mt-4 ">Payment Options</h4>
        <div class="row m-0">
          <div class="col-12 text-center">
            <div class="row">
              <div class="col-sm-12 col-lg-6 col-md-6 p-3">
                <a href="{{route('new.signin')}}" ><img src=" {{ asset('images/landing_page/paypal.png') }} " style="width:100px; height: 100px;"></a>
             </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>
    </div>

@include('template.front-end.footer')

@endsection