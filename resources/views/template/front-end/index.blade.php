@extends('template.front-end.master')
@section('content')

@include('template.front-end.navbar')


     <div class="container-fluid m-0 p-0">
      <div class="row m-0 p-0">
        <div class="col-md-12 col-lg-12 col-sm-12 col-12 pt-3 pb-3">
          <div class="row">
            <div class="col-sm-12 col-12 col-lg-12 col-md-12">
              <h4 class="text-center">Writing Services</h4>
              <p class="text-center">Do you have a research paper, essay, school project or an assigment that needs to be done in limited time? Worry no more, you know why, cause we got you. Here at JIBU, we have qualified writers and researchers who are available to do the work for you. Just specify the deadline, the minimum pages required and the type of assignment you want done. </p>
              <div class="row text-center">
                <div class="col-12 col-md-12 col-sm-12 text-center">
                   <a href="{{ route('essay') }}" class="btn btn-solid btn-success rounded-pill text-center">GET SERVICE</a>
                </div> 
              </div>
            </div>
          </div>

          <div class="row mt-5">
            <div class="col-sm-12 col-12 col-lg-12 col-md-12">
              <h4 class="text-center">Assignment Answers</h4>
              <p class="text-center">Is there a question troubling you and seems to have no answer? Worry no more, search through our vast database and get the answeers in an instant. Select the relevant category where your question lies to get more accurate results! </p>
              <div class="row text-center">
                <div class="col-12 col-md-12 col-sm-12 text-center">
                   <a href="{{route('view.question')}}" class="btn btn-solid btn-success rounded-pill text-center">SEARCH NOW</a>
                </div> 
              </div>
            </div>
          </div>

            

        </div>
      </div>
    </div>

@include('template.front-end.footer')

@endsection