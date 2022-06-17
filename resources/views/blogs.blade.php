<?php // echo $countCurrencyTracker; die; ?>
@extends('layouts.header')
@section('content')
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center mb-4">
            <h1 class="h3 mb-0 text-gray-800">All Blogs</h1>
            {{-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-dark shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> --}}
        </div>
        <hr>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">All Blogs</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Headline</th>
                                <th>Blog</th> 
                                <th>Status</th> 
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($blogs as $blog)
                            <tr>
                                <td>{{ $blog->id }}</td>
                                <td>{{ $blog->headline }}</td>
                                <td>{{ $blog->blog }}</td> 
                                <td>
                                    @if ($blog->status == 1)
                                        <div class="text-success">Approved</div>
                                    @elseif($blog->status == NULL)
                                    <div class="text-secondary">Pending</div>
                                    @else
                                    <div class="text-danger">Rejected</div>
                                    @endif
                                </td> 
                                <td><button class="btn btn-dark" data-toggle="modal" data-target="#blogModal-{{ $blog->id }}">Edit</button></td>
                            </tr>
                            <div class="modal" id="blogModal-{{ $blog->id }}">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Approve Blog</h4>
                                            <button type="button" class="close"
                                                data-dismiss="modal">&times;</button>
                                        </div>
                                        <div class="modal-body">
                                            {{-- <form action="{{ route('currency-editor', $blog->id) }}" method="post"> --}}
                                                @csrf
                                                <div class="col m-2">
                                                    <input type="text" name="headline" placeholder="Blog Headline"
                                                        value="{{ $blog->headline }}" class="form-control">
                                                </div>
                                                <div class="col m-2">
                                                    <input type="text" name="blog" placeholder="Blog"
                                                        value="{{ $blog->blog }}" class="form-control">
                                                </div>
                                                <div class="col m-2">
                                                    <a href="{{ route('blog-approve', $blog->id) }}" class="btn btn-dark btn-block">Approve</a>
                                                    <a href="{{ route('blog-reject', $blog->id) }}" class="btn btn-dark btn-block">Reject</a>
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
