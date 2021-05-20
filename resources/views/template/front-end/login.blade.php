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
              <h3>Login To Your Account</h3>
            </div>
            <div class="col-12 p-2">
              <form method="POST" action=" {{ route('login') }} ">
                @csrf

                <div class="input-group mb-3">
            <input type="email" name="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}"
                   value="{{ old('email') }}" placeholder="{{ __('adminlte::adminlte.email') }}" autofocus>
            @if($errors->has('email'))
                <div class="invalid-feedback">
                    <strong>{{ $errors->first('email') }}</strong>
                </div>
            @endif
        </div>

        {{-- Password field --}}
        <div class="input-group mb-3">
            <input type="password" name="password" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}"
                   placeholder="{{ __('adminlte::adminlte.password') }}">
            
            @if($errors->has('password'))
                <div class="invalid-feedback">
                    <strong>{{ $errors->first('password') }}</strong>
                </div>
            @endif
        </div>

                <div class="form-group row">
                  <div class="col-12 text-center">
                    <button class="btn btn-solid btn-success">Login</button>
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