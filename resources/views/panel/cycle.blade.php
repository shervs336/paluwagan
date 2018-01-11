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
            <th>Name</td>
          </tr>
        </thead>
        <tbody>
          @foreach($users as $user)
            <tr>
              <td>{{ $user->id }}</td>
              <td>{{ $user->username }}</td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
