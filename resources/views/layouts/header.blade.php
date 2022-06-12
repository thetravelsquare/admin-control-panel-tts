<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin-TTS</title>
    <link href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="{{ asset('assets/css/sb-admin-2.min.css') }}" rel="stylesheet">
</head>
<body id="page-top">
    <div id="wrapper">
        <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon">
                    <img src="http://thetravelsquare.in/img/the-travel-square-logo.png" height="40">
                </div>
                <div class="sidebar-brand-text mx-3">TTS ADMIN</div>
            </a>
            <hr class="sidebar-divider my-0">
            <li class="nav-item active">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
            <hr class="sidebar-divider">
            <div class="sidebar-heading">
                Admin Tools
            </div>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('currency') }}">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Currency ROE</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Admin Terminal</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Controller :</h6>
                        <a class="collapse-item" href="utilities-animation.html">Flights</a>
                        <a class="collapse-item" href="utilities-other.html">Hotels</a>
                        <a class="collapse-item" href="utilities-border.html">Experiences</a>
                        <a class="collapse-item" href="utilities-other.html">Packages</a>
                        <a class="collapse-item" href="utilities-other.html">Visa</a>
                        <a class="collapse-item" href="utilities-color.html">B2B Fixed Departures</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#datamanagement" aria-expanded="true" aria-controls="datamanagement">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Data Management</span>
                </a>
                <div id="datamanagement" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Data Uploading :</h6>
                        <a class="collapse-item" href="{{ route('fds') }}">B2B Fixed Departures</a>
                        <a class="collapse-item" href="utilities-animation.html">Flights</a>
                        <a class="collapse-item" href="utilities-other.html">Hotels</a>
                        <a class="collapse-item" href="{{ route('iteneraries') }}">Experiences</a>
                        <a class="collapse-item" href="utilities-other.html">Packages</a>
                        <a class="collapse-item" href="utilities-other.html">Visa</a>
                    </div>
                </div>
            </li>
            <hr class="sidebar-divider">
            <div class="sidebar-heading">
                Admin Approvals
            </div>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('all-partners') }}">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Partner Registrations</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('deals') }}">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Agent Deals</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('blogs') }}">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Blog Approvals</span></a>
            </li>
            <hr class="sidebar-divider">
            <div class="sidebar-heading">
                Bookings & CRM
            </div>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#platformusers" aria-expanded="true" aria-controls="platformusers">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Platform Users</span>
                </a>
                <div id="platformusers" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Customer Base:</h6>
                        <a class="collapse-item" href="blank.html">TTS Customers</a>
                        <a class="collapse-item" href="404.html">B2B Customers</a>
                        <h6 class="collapse-header">Partners & Suppliers:</h6>
                        <a class="collapse-item" href="login.html">Travel Agents Partners</a>
                        <a class="collapse-item" href="register.html">Suppliers</a>
                        <a class="collapse-item" href="#">Developers</a>
                        <a class="collapse-item" href="#">Mysite Users</a>
                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">Other Platforms:</h6>
                        <a class="collapse-item" href="#">Airline Tech Solutions</a>
                        <a class="collapse-item" href="#">B2B Fixed Departures</a>
                        <a class="collapse-item" href="#">B2B Maldives</a>
                        <a class="collapse-item" href="#">DMC Dubai</a>
                        <a class="collapse-item" href="#">DMC Bali</a>
                        <a class="collapse-item" href="#">DMC Thailand</a>
                        <a class="collapse-item" href="#">Fixed Departure Flights</a>
                        <a class="collapse-item" href="#">GMT Insurance</a>
                        <a class="collapse-item" href="#">Hashtrek</a>
                        <a class="collapse-item" href="#">Instawire Forex</a>
                        <a class="collapse-item" href="#">Track My Bag</a>
                        <a class="collapse-item" href="#">TravPay</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Bookings</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Confirm Bookings :</h6>
                        <a class="collapse-item" href="buttons.html">TTS OTA</a>
                        <a class="collapse-item" href="cards.html">B2B Fixed Departures</a>
                    </div>
                </div>
            </li>
            <hr class="sidebar-divider">
            <div class="sidebar-heading">
                Requests & Quotes
            </div>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#requests" aria-expanded="true" aria-controls="requests">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Request & Verifications</span>
                </a>
                <div id="requests" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Infomation Requests :</h6>
                        <a class="collapse-item" href="{{ route('general-requests') }}">General Requests</a>
                        <a class="collapse-item" href="{{ route('business-requests') }}">Business Requests</a>
                        <a class="collapse-item" href="#">Verification Requests</a>
                        <h6 class="collapse-header">Campaign Requests :</h6>
                        <a class="collapse-item" href="{{ route('ppc-requests') }}">PPC Requests</a>
                        <h6 class="collapse-header">Financial Requests:</h6>
                        <a class="collapse-item" href="#">Cancellation Requests</a>
                        <a class="collapse-item" href="{{ route('refund-requests') }}">Refund Requests</a>
                        <a class="collapse-item" href="{{ route('settlement-requests') }}">Settlement Requests</a>
                        <a class="collapse-item" href="{{ route('payment-requests') }}">Payment Link Requests</a>
                        <h6 class="collapse-header">Booking Requests:</h6>
                        <a class="collapse-item" href="{{ route('group-fare-requests') }}">Group Fare Requests</a>
                    </div>
                </div>
            </li>
            <hr class="sidebar-divider">
            <div class="sidebar-heading">
                Accounts & TravPay
            </div>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#accounts" aria-expanded="true" aria-controls="accounts">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Accounts & Payments</span>
                </a>
                <div id="accounts" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">

                        <h6 class="collapse-header">Manual & Gateway :</h6>
                        <a class="collapse-item" href="#">All Accounts</a>
                        <a class="collapse-item" href="#">All Transactions</a>
                        <h6 class="collapse-header">TravPay :</h6>
                        <a class="collapse-item" href="#">x</a>
                        <a class="collapse-item" href="#">x</a>
                        <a class="collapse-item" href="#">x</a>
                        <a class="collapse-item" href="#">x</a>
                    </div>
                </div>
            </li>
            <hr class="sidebar-divider">
            <div class="sidebar-heading">
                Leads & More
            </div>
            <li class="nav-item">
                <a class="nav-link" href="charts.html">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Leads Management</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#app" aria-expanded="true" aria-controls="app">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>App </span>
                </a>
                <div id="app" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Customer App :</h6>
                        <a class="collapse-item" href="utilities-animation.html">View/Edit All Images</a>
                        <a class="collapse-item" href="utilities-other.html">Home Screen BG</a>
                        <a class="collapse-item" href="utilities-border.html">Vacations by Theme</a>
                        <a class="collapse-item" href="utilities-other.html">Trending Destinations</a>
                        <a class="collapse-item" href="utilities-other.html">Unexplored Destinations</a>
                        <a class="collapse-item" href="utilities-color.html">Message Box Upper</a>
                        <a class="collapse-item" href="utilities-color.html">Message Box Lower</a>
                        <a class="collapse-item" href="utilities-color.html">Trending experience</a>
                        <a class="collapse-item" href="utilities-color.html">Best offer and deals</a>
                        <a class="collapse-item" href="utilities-color.html">Video box</a>
                    </div>
                </div>
            </li>
            <hr class="sidebar-divider d-none d-md-block">

            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
            <div class="sidebar-card d-none d-lg-flex">
                <i class="fa fa-refresh"></i><a class="btn btn-success btn-sm" href="#">Try Re-Connect</a>
            </div>
        </ul>

        @include('layouts/navbar')
        @yield('content')
        @include('layouts/footer')