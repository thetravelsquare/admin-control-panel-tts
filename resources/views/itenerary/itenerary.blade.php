@extends('layouts.header')
@section('content')
<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
    <div class="kt-subheader   kt-grid__item" id="kt_subheader">
        <div class="kt-container  kt-container--fluid ">
            <div class="kt-subheader__main">
                <h3 class="kt-subheader__title">All Iteneraries</h3>
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
                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 10; width: 90%; background-color:white;">
                        <thead>
                            <tr>
                                <th>Experience Name</th>
                                <th>City</th>
                                <th>Subcity</th>
                                <th>Category</th>
                                <th>Experience Slot</th>
                                <th>Experience Duration</th>
                                <th>Transfers</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($iteneraries as $itenerary)
                           <tr>
                                <td>{{ $itenerary->experience_name }}</td>
                                <td>{{ $itenerary->city }}</td>
                                <td>{{ $itenerary->sub_city }}</td>
                                <td>{{ $itenerary->category }}</td>
                                <td>{{ $itenerary->experience_slot }}</td>
                                <td>{{ $itenerary->experience_duration }}</td>
                                <td>{{ $itenerary->transfers }}</td>
                                <td><a class="btn btn-primary" href="{{ route('itenerary-details', $itenerary->id) }}">Details</a></td>
                           </tr>
                           @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    <script src="http://partner.thetravelsquare.in/resource/admin/files/plugins.bundle.js.download"></script>
    <script src="http://partner.thetravelsquare.in/resource/admin/files/scripts.bundle.js.download"></script>
    <script src="http://partner.thetravelsquare.in/resource/admin/files/login-1.js.download"></script>
    <script src="http://partner.thetravelsquare.in/resource/admin/files/fullcalendar.bundle.js.download"></script>
    <script src="http://partner.thetravelsquare.in/resource/admin/files/js(1)"></script>
    <script src="http://partner.thetravelsquare.in/resource/admin/files/gmaps.js.download"></script>
    <script src="http://partner.thetravelsquare.in/resource/admin/files/dashboard.js.download"></script>
    <script src="http://partner.thetravelsquare.in/resource/admin/js/pages/crud/forms/widgets/bootstrap-datepicker.js"></script>
    <script src="http://partner.thetravelsquare.in/resource/admin//plugins/custom/datatables/datatables.bundle.js"></script>
    <script src="http://partner.thetravelsquare.in/resource/admin/js/pages/crud/datatables/advanced/multiple-controls.js"></script>
    <div class="daterangepicker ltr show-ranges opensleft">
        <div class="ranges">
            <ul>
                <li data-range-key="Today">Today</li>
                <li data-range-key="Yesterday">Yesterday</li>
                <li data-range-key="Last 7 Days">Last 7 Days</li>
                <li data-range-key="Last 30 Days">Last 30 Days</li>
                <li data-range-key="This Month">This Month</li>
                <li data-range-key="Last Month">Last Month</li>
                <li data-range-key="Custom Range">Custom Range</li>
            </ul>
        </div>
        <div class="drp-calendar left">
            <div class="calendar-table"></div>
            <div class="calendar-time" style="display: none;"></div>
        </div>
        <div class="drp-calendar right">
            <div class="calendar-table"></div>
            <div class="calendar-time" style="display: none;"></div>
        </div>
        <div class="drp-buttons"><span class="drp-selected"></span><button
                class="cancelBtn btn btn-sm btn-default" type="button">Cancel</button><button
                class="applyBtn btn btn-sm btn-primary" disabled="disabled"
                    type="button">Apply</button> </div>
        </div>
    <script src="http://partner.thetravelsquare.in/resource/agroxa/plugins/datatables/dataTables.responsive.min.js"></script>
    <script src="http://partner.thetravelsquare.in/resource/agroxa/plugins/datatables/responsive.bootstrap4.min.js"></script>
    <script src="http://partner.thetravelsquare.in/resource/agroxa/assets/pages/datatables.init.js"></script>
</body>

</html>
@endsection