@extends('layouts.header')
@section('content')
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center mb-4">
            <h1 class="h3 mb-0 text-gray-800">All Settlement Request's</h1>
        </div>
        <hr>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">All Settlement Request's</h6>
            </div>
            <div class="card-body">
                @if (Session::get('success'))
                <script>
                    setTimeout(function() {
                        $('.alert').fadeOut(1000);
                    }, 10000);
                </script>
                <div class="alert alert-success">
                    {{ session::get('success') }}
                </div>
                @endif
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Image</th>
                                <th>Claim By ID</th>
                                <th>Claim By Type</th>
                                <th>Amount</th>
                                <th>Currency</th>
                                <th>Status</th>
                                <th>Created At</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $i = 1 @endphp
                            @foreach ($settlement_requests as $rq)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>
                                    <a href="http://localtts.in/uploads/{{ $rq->image }}">
                                        <img src="http://localtts.in/uploads/'{{ $rq->image }}" style="width: 80px; height: 80px;" alt="{{ $rq->image }}" width="100px" height="100px">
                                    </a>
                                </td>
                                <td>{{ $rq->claim_by_id }}</td>
                                <td>{{ $rq->claim_by_type }}</td>
                                <td>{{ $rq->amount }}</td>
                                <td>{{ $rq->currency }}</td>
                                <td>{{ $rq->status }}</td>
                                <td>{{ $rq->created_at }}</td>
                                <td>
                                    <div class="dropdown text-center">
                                        <a type="button" data-toggle="dropdown">
                                          <i class="fa fa-ellipsis-v"></i>
                                        </a>
                                        <div class="dropdown-menu">
                                          <a class="dropdown-item" href="{{ route('settlement.processing', $rq->id) }}">Processing</a>
                                          <a class="dropdown-item" href="{{ route('settlement.settled', $rq->id) }}">Settled</a>
                                        </div>
                                      </div>
                                </td>
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
