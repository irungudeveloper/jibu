@extends('template.front-end.master')
@section('content')

@include('template.front-end.nav')
  
  <section class="login-section login-style-2 mb-40 mt-40">
      <div class="container bg-white">
        <div class="login-wrapper img-bg">
          <div class="row justify-content-center">
            <div class="col-lg-12 col-xl-12 offset-xl-1">
              <div class="login-content-wrapper ">
              
               <div class="row m-3 mt-3 border border-3 p-2 pt-5 mt-5">
            <div class="col-12 text-center mb-20">
              <h3>Create Your Account</h3>
            </div>
            <div class="col-12 p-2">
              <form method="POST" action=" {{ route('subaccount.store') }} ">
                @csrf
                <div class="form-group row">
                  <div class="col-md-6 col-sm-12 col-lg-6 mb-3">
                    <label for="sir_name">Sir Name</label>
                    <input type="text" name="sir_name" id="sir_name" class="form-control ">
                  </div>
                  <div class="col-md-6 col-sm-12 col-lg-6 ">
                    <label for="other_name">Other Names</label>
                    <input type="text" name="other_name" id="other_name" class="form-control ">
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-12">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control ">
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-12">
                    <label for="phone">Phone Number</label>
                    <input type="text" name="phone" id="phone" class="form-control ">
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-md-6 col-sm-12 col-lg-6 mb-3">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control">
                  </div>
                  <div class="col-md-6 col-sm-12 col-lg-6 ">
                    <label for="retype">Retype Password</label>
                    <input type="password" name="retype" id="retype" class="form-control">
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-12 text-center">
                    <button class="btn btn-solid btn-success">Create Account</button>
                  </div>
                </div>

              </form>
            </div>
          </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

@include('template.front-end.footer')

@endsection