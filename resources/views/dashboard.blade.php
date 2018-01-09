@extends('layout.app')

@section('content')
    <div class="row">
      <div class="col-md-6">
        <div class="panel panel-success">
          <div class="panel-heading">
            <h3 class="panel-title">Paluwagan Cycle</h3>
          </div>
          <div class="panel-body">
            <div class="table-responsive">
              <table class="table table-hover table-striped table-bordered">
                <thead>
                  <tr>
                    <th>Order Number</th>
                    <th>Nickname</td>
                  </tr>
                </thead>
                <tbody>
                  @foreach($members as $member)
                    <tr>
                      <td>{{ $member->id }}</td>
                      <td>{{ $member->nickname }}</td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection
