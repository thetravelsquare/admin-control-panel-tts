@extends('layouts.header')
@section('content')
    <div class="container-fluid">
        <h1 class="h3 mb-2 text-gray-800">Partners</h1>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">All Partners</h6>
            </div>
            <div class="card-body">
                @if(Session::get('success'))
                <script>
                    setTimeout(function() {
                        $('.alert').fadeOut(1000);
                    }, 10000);
                </script>
                <div class="alert alert-success">
                    {{ session::get('success') }}
                </div>
            @endif
            @if(Session::get('error'))
                <script>
                    setTimeout(function() {
                        $('.alert').fadeOut(1000);
                    }, 10000);
                </script>
                <div class="alert alert-danger">
                    {{ session::get('error') }}
                </div>
            @endif
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Mobile</th>
                                <th>DOB</th>
                                <th>Gender</th>
                                <th>Status</th>
                                <th>Joined date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($partners as $partner)
                                <tr>
                                    <td>{{ $partner->name }}</td>
                                    <td>{{ $partner->mobile }}</td>
                                    <td>{{ $partner->dob }}</td>
                                    <td>{{ $partner->gender }}</td>
                                    <td>
                                        @if($partner->status == 'approved')
                                        <div class="text-success">{{ Str::title($partner->status) }}</div>
                                        @elseif($partner->status == 'pending')
                                            <div class="text-secondary">{{ Str::title($partner->status) }}</div>
                                        @else
                                            <div class="text-danger">{{ Str::title($partner->status) }}</div>
                                        @endif
                                    </td>
                                    <td>{{ $partner->created_at }}</td>
                                    <td>
                                        <button class="btn btn-dark" data-toggle="modal" data-target="#partnerModal-{{ $partner->id }}">Details</button>
                                        <a href="{{ route('partner-approve', $partner->id) }}" class="btn btn-dark">Approve</a>
                                        <a href="{{ route('partner-reject', $partner->id) }}" class="btn btn-dark">Reject</a>
                                    </td>
                                </tr>

                                <div class="modal" id="partnerModal-{{ $partner->id }}">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Partner Details</h4>
                                                <button type="button" class="close"
                                                    data-dismiss="modal">&times;</button>
                                            </div>
                                            <div class="modal-body">
                                                {{-- <form action="{{ route('currency-editor', $blog->id) }}" method="post"> --}}
                                                    @csrf
                                                    <div class="col m-2">
                                                        <input type="text" name="headline" placeholder="Blog Headline"
                                                            value="{{ $partner->headline }}" class="form-control">
                                                    </div>
                                                    <div class="col m-2">
                                                        <input type="text" name="blog" placeholder="Blog"
                                                            value="{{ $partner->blog }}" class="form-control">
                                                    </div>
                                                {{-- </form> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
