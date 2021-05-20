@extends('template.front-end.master')
@section('content')

@include('template.front-end.nav')
  
   
    <div class="container-fluid m-0 p-0">
      <div class="row justify-content-center p-5">
        <div class="col-12 border border-3">
          <div class="card">
            <div class="card-header">
              <h4>Question : {{ $answer->question->question }}</h4>
              <div class="row">
                @foreach($answer->question->option as $option)
                <div class="col-6">
                  <p>A: {{ $option->option_a }} </p>
                </div>
                <div class="col-6">
                  <p>B: {{ $option->option_b }} </p>
                </div>
                <div class="col-6">
                  <p>C: {{ $option->option_c }} </p>
                </div>
                <div class="col-6">
                  <p>D: {{ $option->option_d }} </p>
                </div>
                @endforeach
              </div>
            </div>
            <div class="card-body">
              <h4>Answer : {{ $answer->answer }} </h4>
              <p>Explanation: {{ $answer->explanation }} </p>
            </div>
          </div>
        </div>        
      </div>
    </div>

@include('template.front-end.footer')

@endsection