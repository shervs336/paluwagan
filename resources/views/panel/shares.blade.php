<div class="row">
  <div class="col-md-12">
    <div class="panel panel-info">
      <div class="panel-heading">
        <h3 class="panel-title">Shares (Php)</h3>
      </div>
      <div class="panel-body">
        <form action="{{ route('shares.manage') }}" method="post">
          {{ csrf_field() }}
          <div class="table-responsive">
            <table class="table table-hover table-striped table-bordered">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Jan</th>
                  <th>Feb</th>
                  <th>Mar</th>
                  <th>Apr</th>
                  <th>May</th>
                  <th>Jun</th>
                  <th>Jul</th>
                  <th>Aug</th>
                  <th>Sep</th>
                  <th>Oct</th>
                  <th>Nov</th>
                  <th>Dec</th>
                  <th>Total</th>
                </tr>
              </thead>
              <tbody>
                  @foreach($users as $user)
                    <tr>
                      <td valign="middle">{{ $user->username }}</td>
                        @foreach($user->shares as $share)
                          @if(Request::is('shares/manage/*') || Request::is('shares/manage'))
                            <td><input type="number" name="amount[{{ $user->id }}][{{ $share->month }}]" class="form-control input-sm no-block" value="{{ $share->amount }}"></td>
                          @else
                            <td>{{ $share->amount > 0.00 ? $share->amount : '-' }}</td>
                          @endif
                        @endforeach
                        @if($user->shares->count() == 0)
                          @for($i = 1; $i <= 12; $i++)
                            @if(Request::is('shares/manage/*') || Request::is('shares/manage'))
                              <td><input type="number" name="amount[{{ $user->id }}][{{ $i }}]" class="form-control input-sm no-block" value="0.00"></td>
                            @else
                              <td>-</td>
                            @endif
                          @endfor
                        @endif
                      <td>{{ $user->shares->sum('amount') > 0 ? number_format($user->shares->sum('amount'), 2, '.', ',') : '-' }}</td>
                    </tr>
                  @endforeach
              </tbody>
              <tfoot>
                  <tr class="bg-primary">
                    <td colspan="13" class="text-right"><b>Grand Shared Total (Php): </b></td>
                    <td><b>{{ number_format($sharesGrandTotal, 2, '.', ',') }}</b></td>
                  </tr>
              </tfoot>
            </table>
          </div>
          @if(Request::is('shares/manage/*') || Request::is('shares/manage'))
            <br />
            <div class="form-group text-center">
                <button type="submit" class="btn btn-default"><i class="fa fa-save fa-fw"></i> Save</button>
                <a href="{{ route('dashboard') }}" class="btn btn-danger"><i class="fa fa-ban fa-fw"></i> Cancel</a>
            </div>
          @endif
        </form>
      </div><!-- /.panel-body -->
    </div><!-- /.panel -->
  </div>
</div>
