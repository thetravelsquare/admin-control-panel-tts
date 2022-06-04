@extends('layouts.header')
@section('content')
    <div class="container-fluid">
        <h1 class="h3 mb-2 text-gray-800">Partners</h1>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">All Partners</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Mobile</th>
                                <th>DOB</th>
                                <th>Gender</th>
                                <th>Joined date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($partners as $partner)
                                <tr>
                                    <td>{{ $partner->name }}</td>
                                    <td>{{ $partner->mobile }}</td>
                                    <td>{{ $partner->dob }}</td>
                                    <td>{{ $partner->gender }}</td>
                                    <td>{{ $partner->created_at }}</td>
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
