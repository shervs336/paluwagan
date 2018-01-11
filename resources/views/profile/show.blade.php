@extends('layout.app')

@section('content')

  @include('flash::message')

  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <h1 class="text-center"><i class="fa fa-user-circle fa-fw"></i> My Profile</h1>
      <div class="well">
        <form method="post" action="{{ route('profile.update', ['id' => Auth::user()->id]) }}" enctype="multipart/form-data" placeholder="">
          {{ csrf_field() }}
          {{ method_field('PUT') }}

          <div class="form-group" class="text-center">
            @if(!Auth::user()->image)
              <div  class="ratio img-responsive img-circle" style="background-image: url(https://www.mearto.com/assets/no-image-83a2b680abc7af87cfff7777d0756fadb9f9aecd5ebda5d34f8139668e0fc842.png); width: 80%"></div>
            @else
              <div  class="ratio img-responsive img-circle" style="background-image: url({{ route('profile.image', ['id' => Auth::user()->id]) }}); width: 70%; padding-bottom: 70%; margin: 0 auto"></div>
            @endif
            <label>Profile Image: </label>
            <input type="file" name="image" class="form-control text-center"/>
          </div>

          <div class="form-group">
            <label>Password: </label>
            <input type="password" name="password" class="form-control">
          </div>

          <div class="form-group">
            <label>Confirm Password: </label>
            <input type="password" name="password_confirmation" class="form-control">
          </div>

          <br />

          <div class="form-group text-center">
              <button type="submit" class="btn btn-default"><i class="fa fa-save fa-fw"></i> Save</button>
              <a href="{{ route('dashboard') }}" class="btn btn-danger"><i class="fa fa-ban fa-fw"></i> Cancel</a>
          </div>
        </form>
      </div>
    </div>
  </div>

@endsection
