@extends('template.front-end.master')
@section('content')   

@include('template.front-end.nav')

    <div class="container p-5">
      <div class="row m-3 mt-3 bg-white p-2">
      <div class="col-12 p-2">
        <h4 class="text-center mt-3"><u>Pay {{ $price }} through</h4>

        <div class="row m-0">
          <div class="col-12 text-center">
            <div class="row justify-content-center">
              <div class="col-12 p-3">
                <a href="#" ><img src=" {{ asset('images/landing_page/paypal.png') }} " style="width:100px; height: 100px;"></a>
             </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>
    </div>
    <div class="row m-3 mt-3 bg-white p-2 ">
      <div class="col-12 text-center">
        <a class="btn btn-solid btn-success" href=" {{ route('answer.single', $id) }} ">View Answer</a>
      </div>
    </div>

    @include('template.front-end.footer')

   @endsection

<!------ Include the above in your HEAD tag ---------->

  