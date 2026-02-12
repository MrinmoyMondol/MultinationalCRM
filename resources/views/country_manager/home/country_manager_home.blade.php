@extends('layouts.app')

@section('content')
<!-- ========================
    Start Page Content
========================= -->


    <!-- Start Content -->
    <div class="pb-0 content">

        <!-- Page Header -->
        <div class="flex-wrap gap-2 mb-4 d-flex align-items-center justify-content-between">
            <div>
                <h4 class="mb-0">Country Manager Dashboard</h4>
            </div>
            <div class="flex-wrap gap-2 d-flex align-items-center">
                <div class="w-auto daterangepick form-control d-flex align-items-center">
                    <i class="ti ti-calendar text-dark me-2"></i>
                    <span class="reportrange-picker-field text-dark">23 May 2025 - 30 May 2025</span>
                </div>
                <a href="javascript:void(0);" class="shadow btn btn-icon btn-outline-light" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Refresh" data-bs-original-title="Refresh"><i class="ti ti-refresh"></i></a>
                <a href="javascript:void(0);" class="shadow btn btn-icon btn-outline-light" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Collapse" data-bs-original-title="Collapse" id="collapse-header"><i class="ti ti-transition-top"></i></a>
            </div>
        </div>
        <!-- End Page Header -->

        <!-- start row -->
        <div class="row">

            <div class="col-md-6 d-flex">
                <div class="card flex-fill">
                    <div class="flex-wrap row-gap-3 card-header d-flex align-items-center justify-content-between">
                        <h6 class="mb-0">Recently Created Deals</h6>
                        <div class="dropdown">
                            <a class="shadow dropdown-toggle btn btn-outline-light" data-bs-toggle="dropdown" href="javascript:void(0);">
                            Last 30 days
                        </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="javascript:void(0);" class="dropdown-item">
                                Last 15 days
                            </a>
                                <a href="javascript:void(0);" class="dropdown-item">
                                Last 30 days
                            </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive custom-table">
                            <table class="table dataTable table-nowrap" id="deals-project">
                                <thead class="table-light">
                                    <tr>
                                        <th>Deal Name</th>
                                        <th>Stage</th>
                                        <th>Deal Value</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- end card body -->
                </div>
                <!-- end card -->
            </div>
            <!-- end col -->

            <div class="col-md-6 d-flex">
                <div class="card flex-fill">
                    <div class="card-header">
                        <div class="flex-wrap row-gap-3 d-flex align-items-center justify-content-between">
                            <h6 class="mb-0">Deals By Stage</h6>
                            <div class="flex-wrap row-gap-3 d-flex align-items-center">
                                <div class="dropdown me-2">
                                    <a class="shadow dropdown-toggle btn btn-outline-light" data-bs-toggle="dropdown" href="javascript:void(0);">
                                    Sales Pipeline
                                </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a href="javascript:void(0);" class="dropdown-item">
                                        Marketing Pipeline
                                    </a>
                                        <a href="javascript:void(0);" class="dropdown-item">
                                        Sales Pipeline
                                    </a>
                                        <a href="javascript:void(0);" class="dropdown-item">
                                        Email
                                    </a>
                                        <a href="javascript:void(0);" class="dropdown-item">
                                        Chats
                                    </a>
                                        <a href="javascript:void(0);" class="dropdown-item">
                                        Operational
                                    </a>
                                    </div>
                                </div>
                                <div class="dropdown">
                                    <a class="shadow dropdown-toggle btn btn-outline-light" data-bs-toggle="dropdown" href="javascript:void(0);">
                                    Last 30 Days
                                </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a href="javascript:void(0);" class="dropdown-item">
                                        Last 30 Days
                                    </a>
                                        <a href="javascript:void(0);" class="dropdown-item">
                                        Last 15 Days
                                    </a>
                                        <a href="javascript:void(0);" class="dropdown-item">
                                        Last 7 Days
                                    </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="py-0 card-body">
                        <div id="deals-chart"></div>
                    </div>
                    <!-- end card body -->
                </div>
                <!-- end card -->
            </div>
            <!-- end col -->

        </div>
        <!-- end row -->

        <!-- start row -->
        <div class="row">

            <div class="col-md-6 d-flex">
                <div class="card flex-fill">
                    <div class="card-header">
                        <div class="flex-wrap row-gap-3 d-flex align-items-center justify-content-between">
                            <h6 class="mb-0">Lost Deals Stage</h6>
                            <div class="flex-wrap row-gap-3 d-flex align-items-center">
                                <div class="dropdown me-2">
                                    <a class="shadow dropdown-toggle btn btn-outline-light" data-bs-toggle="dropdown" href="javascript:void(0);">
                                    Marketing Pipeline
                                </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a href="javascript:void(0);" class="dropdown-item">
                                        Marketing Pipeline
                                    </a>
                                        <a href="javascript:void(0);" class="dropdown-item">
                                        Sales Pipeline
                                    </a>
                                        <a href="javascript:void(0);" class="dropdown-item">
                                        Email
                                    </a>
                                        <a href="javascript:void(0);" class="dropdown-item">
                                        Chats
                                    </a>
                                        <a href="javascript:void(0);" class="dropdown-item">
                                        Operational
                                    </a>
                                    </div>
                                </div>
                                <div class="dropdown">
                                    <a class="shadow dropdown-toggle btn btn-outline-light" data-bs-toggle="dropdown" href="javascript:void(0);">
                                    Last 30 Days
                                </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a href="javascript:void(0);" class="dropdown-item">
                                        Last 30 Days
                                    </a>
                                        <a href="javascript:void(0);" class="dropdown-item">
                                        Last 6 months
                                    </a>
                                        <a href="javascript:void(0);" class="dropdown-item">
                                        Last 12 months
                                    </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="py-0 card-body">
                        <div id="last-chart"></div>
                    </div>
                    <!-- end card body -->
                </div>
                <!-- end card -->
            </div>
            <!-- end col -->

            <div class="col-md-6 d-flex">
                <div class="card flex-fill">
                    <div class="card-header">
                        <div class="flex-wrap row-gap-3 d-flex align-items-center justify-content-between">
                            <h6 class="mb-0">Won Deals Stage</h6>
                            <div class="flex-wrap row-gap-3 d-flex align-items-center">
                                <div class="dropdown me-2">
                                    <a class="shadow dropdown-toggle btn btn-outline-light" data-bs-toggle="dropdown" href="javascript:void(0);">
                                    Marketing Pipeline
                                </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a href="javascript:void(0);" class="dropdown-item">
                                        Marketing Pipeline
                                    </a>
                                        <a href="javascript:void(0);" class="dropdown-item">
                                        Sales Pipeline
                                    </a>
                                        <a href="javascript:void(0);" class="dropdown-item">
                                        Email
                                    </a>
                                        <a href="javascript:void(0);" class="dropdown-item">
                                        Chats
                                    </a>
                                        <a href="javascript:void(0);" class="dropdown-item">
                                        Operational
                                    </a>
                                    </div>
                                </div>
                                <div class="dropdown">
                                    <a class="shadow dropdown-toggle btn btn-outline-light" data-bs-toggle="dropdown" href="javascript:void(0);">
                                    Last 30 Days
                                </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a href="javascript:void(0);" class="dropdown-item">
                                        Last 30 Days
                                    </a>
                                        <a href="javascript:void(0);" class="dropdown-item">
                                        Last 6 months
                                    </a>
                                        <a href="javascript:void(0);" class="dropdown-item">
                                        Last 12 months
                                    </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="py-0 card-body">
                        <div id="won-chart"></div>
                    </div>
                    <!-- end card body -->
                </div>
                <!-- end card -->
            </div>
            <!-- end col -->

        </div>
        <!-- end row -->

        <!-- start row -->
        <div class="row">

            <div class="col-md-12 d-flex">
                <div class="card w-100">
                    <div class="flex-wrap row-gap-3 card-header d-flex align-items-center justify-content-between">
                        <h6 class="mb-0">Deals by Year</h6>
                        <div class="flex-wrap row-gap-3 d-flex align-items-center">
                            <div class="dropdown me-2">
                                <a class="shadow dropdown-toggle btn btn-outline-light" data-bs-toggle="dropdown" href="javascript:void(0);">
                                Sales Pipeline
                            </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="javascript:void(0);" class="dropdown-item">
                                    Marketing Pipeline
                                </a>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                    Sales Pipeline
                                </a>
                                </div>
                            </div>
                            <div class="dropdown">
                                <a class="shadow dropdown-toggle btn btn-outline-light" data-bs-toggle="dropdown" href="javascript:void(0);">
                                Last 30 Days
                            </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="javascript:void(0);" class="dropdown-item">
                                    Last 3 months
                                </a>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                    Last 6 months
                                </a>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                    Last 12 months
                                </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="py-0 card-body">
                        <div id="deals-year"></div>
                    </div>
                    <!-- end card body -->
                </div>
                <!-- end card -->
            </div>
            <!-- end col -->

        </div>
        <!-- end row -->

    </div>
    <!-- End Content -->




<!-- ========================
End Page Content
========================= -->
@endsection
