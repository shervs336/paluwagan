<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">Account Summary</h3>
  </div>
  <div class="panel-body">
    <div class="row">
      <div class="col-md-4">
        <div  class="ratio img-responsive img-circle" style="background-image: url({{ route('profile.image', ['id' => Auth::user()->id]) }});"></div>
      </div>
      <div class="col-md-8">
        <h3>{{ Auth::user()->username }}</h3>
        <h4><i class="fa fa-money fa-fw"></i> {{ number_format(Auth::user()->shares->sum('amount'), 2, '.', ',') }}</h4>
        <h4><i class="fa fa-calendar fa-fw"></i> {{ $shareMonthTotal }}</h4>
      </div>
    </div>
  </div>
</div>
