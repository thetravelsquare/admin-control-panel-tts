<?php // echo $countCurrencyTracker; die; ?>
@extends('layouts.header')
@section('content')
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center mb-4">
            <h1 class="h3 mb-0 text-gray-800">Add New City</h1>
        </div>
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
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Add New City</h6>
            </div>
            <div class="card-body">
             <form action="{{ route('add-city') }}" method="post">
                @csrf
                <label for="city" class="small mb-0 pb-0">City</label>
                <input type="text" name="name" class="form-control">
                <div class="text-center mt-2">
                    <button class="btn btn-sm btn-dark">Add New City</button>
                </div>
            </form>
            </div>
        </div>
    </div>
    </div>
@endsection
