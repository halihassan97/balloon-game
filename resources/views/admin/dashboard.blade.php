@extends('layouts.admin')

@section('content')
    <div class="content-page">
        <div class="content">

            <!-- Start Content-->
            <div class="container-fluid">
                <div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
                    <div class="flex-grow-1">
                        <h4 class="fs-18 fw-semibold m-0">Dashboard</h4>
                    </div>
                </div>

                <!-- Start Main Widgets -->
                <div class="row">
                    <div class="col-md-6 col-xxl-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="widget-first">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="rounded-circle bg-secondary-subtle p-2 me-2">
                                            <iconify-icon icon="tabler:currency-dollar" class="align-middle text-dark fs-26 mb-0"></iconify-icon>
                                        </div>
                                        <p class="mb-0 text-dark fs-16">Total Revenue</p>
                                    </div>


                                    <div class="d-flex align-items-center justify-content-between">
                                        <h3 class="fs-24 fw-medium text-dark mb-0 me-3">$50,457</h3>

                                        <div class="d-flex align-items-center">
                                                    <span class="me-2 rounded-2 badge fs-12 badge-soft-success fw-medium">
                                                        <i class="mdi mdi-trending-up fs-14"></i> +1.31%
                                                    </span>
                                            <p class="text-muted fs-14 mb-0 text-center">vs last month</p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-xxl-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="widget-first">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="rounded-circle bg-primary-subtle p-2 me-2">
                                            <iconify-icon icon="tabler:user-share" class="align-middle text-dark fs-26 mb-0"></iconify-icon>
                                        </div>
                                        <p class="mb-0 text-dark fs-16">New Leads Added</p>
                                    </div>

                                    <div class="d-flex align-items-center justify-content-between">
                                        <h3 class="fs-24 fw-medium text-dark mb-0 me-3">150</h3>

                                        <div class="d-flex align-items-center">
                                                    <span class="me-2 rounded-2 badge fs-12 badge-soft-danger fw-medium">
                                                        <i class="mdi mdi-trending-down fs-14"></i> -5.35%
                                                    </span>
                                            <p class="text-muted fs-14 mb-0">vs last month</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-xxl-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="widget-first">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="rounded-circle bg-success-subtle p-2 me-2">
                                            <iconify-icon icon="tabler:users" class="align-middle text-dark fs-26 mb-0"></iconify-icon>
                                        </div>
                                        <p class="mb-0 text-dark fs-16">Conversion Rate</p>
                                    </div>

                                    <div class="d-flex align-items-center justify-content-between">
                                        <h3 class="fs-24 fw-medium text-dark mb-0 me-3">25%</h3>

                                        <div class="d-flex align-items-center">
                                                    <span class="me-2 rounded-2 badge fs-12 badge-soft-success fw-medium">
                                                        <i class="mdi mdi-trending-up fs-14"></i> +2.37%
                                                    </span>
                                            <p class="text-muted text-center fs-14 mb-0">vs last month</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-xxl-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="widget-first">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="rounded-circle bg-danger-subtle p-2 me-2">
                                            <iconify-icon icon="tabler:circle-check" class="align-middle text-dark fs-26 mb-0"></iconify-icon>
                                        </div>
                                        <p class="mb-0 text-dark fs-16">Total Deals Closed</p>
                                    </div>

                                    <div class="d-flex align-items-center justify-content-between">
                                        <h3 class="fs-24 fw-medium text-dark mb-0 me-3">30</h3>

                                        <div class="d-flex align-items-center">
                                                    <span class="me-2 rounded-2 badge fs-12 badge-soft-success fw-medium">
                                                        <i class="mdi mdi-trending-up fs-14"></i> +3.28%
                                                    </span>
                                            <p class="text-muted text-center fs-14 mb-0">vs last month</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Main Widgets -->

            </div> <!-- container-fluid -->
        </div> <!-- content -->

@endsection




