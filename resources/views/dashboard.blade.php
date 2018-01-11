  @extends('layout.app')

@section('content')
    @include('flash::message')

    <div class="row">
      <div class="col-md-6">
        @include('panel.account-summary')
      </div>
      <div class="col-md-6">
        @include('panel.cycle')
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        @include('panel.shares')
      </div>
    </div>
@endsection
