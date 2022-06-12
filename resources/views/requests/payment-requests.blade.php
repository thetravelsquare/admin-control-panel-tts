@extends('layouts.header')
@section('content')
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center mb-4">
            <h1 class="h3 mb-0 text-gray-800">All Payment Request's</h1>
        </div>
        <hr>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">All Payment Request's</h6>
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
                                <th>Amount</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Name</th>
                                <th>Request From ID</th>
                                <th>Request From Type</th>
                                <th>Currency</th>
                                <th>Payment Link</th>
                                <th>Created At</th>
                                {{-- <th>Action</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            @php $i = 1 @endphp
                            @foreach ($payment_requests as $rq)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $rq->amount }}</td>
                                <td>{{ $rq->phone }}</td>
                                <td>{{ $rq->email }}</td>
                                <td>{{ $rq->name }}</td>
                                <td>{{ $rq->request_from_id }}</td>
                                <td>{{ $rq->request_from_type }}</td>
                                <td>{{ $rq->currency }}</td>
                                <td>{{ $rq->payment_link }}</td>
                                <td>{{ $rq->created_at }}</td>
                                {{-- <td>
                                    <div class="dropdown text-center">
                                        <a type="button" data-toggle="dropdown">
                                          <i class="fa fa-ellipsis-v"></i>
                                        </a>
                                        <div class="dropdown-menu">
                                          <a class="dropdown-item" href="{{ route('refund.initiate', $rq->id) }}">Initiate</a>
                                          <a class="dropdown-item" href="{{ route('refund.approve', $rq->id) }}">Complete</a>
                                          <a class="dropdown-item" href="{{ route('refund.reject', $rq->id) }}">Reject</a>
                                        </div>
                                      </div>
                                </td> --}}
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
