@extends('layouts.header')
@section('content')
<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
    <div class="kt-subheader   kt-grid__item" id="kt_subheader">
        <div class="kt-container  kt-container--fluid ">
            <div class="kt-subheader__main">
                <h3 class="kt-subheader__title">All Cities</h3>
            </div>
        </div>
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
    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
        <div class="kt-portlet kt-portlet--mobile">
            <div class="kt-portlet__body kt-portlet__body">
                <div id="sub_datatable_ajax_source" class="kt-datatable kt-datatable--default kt-datatable--brand kt-datatable--loaded">
                    <form action="{{ route('update-city', $city->id) }}" method="post">
                        @csrf
                        <label for="city" class="small mb-0 pb-0">City</label>
                        <input type="text" name="name" value="{{ $city->name }}" class="form-control">
                        <div class="text-center mt-2">
                            <button class="btn btn-sm btn-dark">Update City</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
@endsection