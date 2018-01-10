@extends('layout.app')

@section('content')
  <!-- resources/views/auth/register.blade.php -->
  <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <h1 class="text-center">Paluwagan 2018</h1>
        <br />
        <div class="well">
          <form method="POST" action="/auth/register">
              {!! csrf_field() !!}

              <div class="form-group">
                  <label>Name</label>
                  <input type="text" name="name" class="form-control" value="{{ old('name') }}">
              </div>

              <div class="form-group">
                  <label>Username</label>
                  <input type="text" name="username" class="form-control" value="{{ old('username') }}">
              </div>

              <div class="form-group">
                  <label>Password</label>
                  <input type="password" name="password" class="form-control">
              </div>

              <div class="form-group">
                  <label>Confirm Password</label>
                  <input type="password" name="password_confirmation" class="form-control">
              </div>

              <div>
                  <button type="submit" class="btn btn-default">Register</button>
              </div>
          </form>
        </div>
      </div>
    </div>
@endsection
