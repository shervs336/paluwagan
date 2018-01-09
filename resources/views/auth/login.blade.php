@extends('layout.app')

@section('content')
  <!-- resources/views/auth/login.blade.php -->
  <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <h1 class="text-center">Paluwagan 2018</h1>
        <br />
        <div class="well">
          <form method="POST" action="{{ route('auth.login') }}">
            {!! csrf_field() !!}

            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control" value="{{ old('email') }}">
            </div>

            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" id="password">
            </div>

            <div class="checkbox">
              <label>
                <input type="checkbox" name="remember"> Remember Me
              </lable>
            </div>

            <div>
                <button type="submit" class="btn btn-default">Login</button>
            </div>
          </form>
        </div>
      </div>
  </div>
@endsection
