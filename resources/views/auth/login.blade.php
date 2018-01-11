@extends('layout.app')

@section('content')
  <!-- resources/views/auth/login.blade.php -->
  @include('flash::message')

  <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <h1 class="text-center">Paluwagan 2018</h1>
        <br />
        <div class="well">
          <form method="POST" action="{{ route('auth.login') }}">
            {!! csrf_field() !!}

            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" class="form-control" value="{{ old('username') }}">
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
