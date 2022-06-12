@extends('layouts.header')
@section('content')
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center mb-4">
            <h1 class="h3 mb-0 text-gray-800">All Group Fare Request's</h1>
        </div>
        <hr>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">All Group Fare Request's</h6>
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
                                <th>Group Fare ID</th>
                                <th>User ID</th>
                                <th>Partner ID</th>
                                <th>Flight Type</th>
                                <th>Departure</th>
                                <th>Arrival</th>
                                <th>Departure Date</th>
                                <th>Arrival Date</th>
                                <th>Departure Time</th>
                                <th>Arrival Time</th>
                                <th>Adults</th>
                                <th>Child</th>
                                <th>Fare</th>
                                <th>Created At</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $i = 1 @endphp
                            @foreach ($group_fare_requests as $rq)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $rq->gf_id }}</td>
                                <td>{{ $rq->user_id }}</td>
                                <td>{{ $rq->partner_id }}</td>
                                <td>{{ $rq->flight_type }}</td>
                                <td>{{ $rq->departure }}</td>
                                <td>{{ $rq->arrival }}</td>
                                <td>{{ $rq->departure_date }}</td>
                                <td>{{ $rq->arrival_date }}</td>
                                <td>{{ $rq->dep_time }}</td>
                                <td>{{ $rq->arr_time }}</td>
                                <td>{{ $rq->adults }}</td>
                                <td>{{ $rq->child }}</td>
                                <td>{{ $rq->fare }}</td>
                                <td>{{ $rq->created_at }}</td>
                                <td>
                                    <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#myModal-{{ $rq->id }}">
                                        Update Fare
                                      </button>
                                    <div class="modal" id="myModal-{{ $rq->id }}">
                                        <div class="modal-dialog">
                                        <div class="modal-content">
                                    
                                            <!-- Modal Header -->
                                            <div class="modal-header">
                                            <h4 class="modal-title">Update Fare</h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <form action="{{ route('update-group-fare', $rq->id) }}" method="POST">
                                            @csrf
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <label for="flight-type">Flight Type</label>
                                                    <input type="text" readonly value="{{ $rq->flight_type }}" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="flight-type">Departure Date & Time</label>
                                                    <input type="text" readonly value="{{ $rq->departure_date }} ({{ $rq->dep_time }})" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="flight-type">Arrival Date & Time</label>
                                                    <input type="text" readonly value="{{ $rq->arrival_date }} - ({{ $rq->arr_time }})" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="flight-type">Adults</label>
                                                    <input type="text" readonly value="{{ $rq->adults }}" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="flight-type">Child</label>
                                                    <input type="text" readonly value="{{ $rq->child }}" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="flight-type">Fare</label>
                                                    <input type="text" name="fare" value="{{ $rq->fare }}" placeholder="Add Fare" class="form-control">
                                                </div>
                                            </div>
                                            <div class="text-center mb-3">
                                                <button class="btn btn-dark">Submit</button>
                                            </div>
                                            </form>
                                        </div>
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
