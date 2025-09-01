@extends('admin.main')
@section('content')
    <div class="d-flex flex-column flex-column-fluid">
        <div id="kt_app_toolbar" class="app-toolbar  d-flex flex-stack py-4 py-lg-8 ">
            <div class="d-flex flex-grow-1 flex-stack flex-wrap gap-2 mb-n10" id="kt_toolbar">
                <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3 ">

                    <h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">
                        Users
                    </h1>
                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">

                        <li class="breadcrumb-item text-muted">
                            <a href="{{ route('admin.dashboard') }}" class="text-muted text-hover-primary">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-500 w-5px h-2px"></span>
                        </li>
                        <li class="breadcrumb-item text-muted">Discounts</li>
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-500 w-5px h-2px"></span>
                        </li>
                        <li class="breadcrumb-item text-gray-900">List</li>
                    </ul>
                </div>
                <!--begin::Button-->
                <div>
                    <a href="{{ route('admin.discount_codes.add') }}" class="btn btn-sm btn-success fw-bold">New Discount
                        Code</a>
                        <a href="{{ route('admin.discount_codes.urmeals.usage', ['id' => 1]) }}" class="btn btn-sm btn-primary fw-bold">URMEALS Usage Report</a>
                </div>

                <!--end::Button-->
            </div>
        </div>
        <!--begin::Content-->
        <div id="kt_app_content" class="app-content  flex-column-fluid ">

            <!--begin::Card-->
            <div class="card">
                <!--begin::Card body-->
                <!--begin::Body-->
                <div class="card-body py-3">
                    <!--begin::Table container-->
                    <div class="table-responsive">
                        <!--begin::Table-->
                        <table class="table align-middle gs-0 gy-4">
                            <!--begin::Table head-->
                            <thead>
                                <tr class="fw-bold bg-light">
                                    <th class="ps-4 min-w-150px">Code</th>
                                    <th class="min-w-125px">Valid For</th>
                                    <th class="min-w-125px">Ative</th>
                                    <th class="min-w-200px">Public</th>
                                    <th class="min-w-150px">Active User</th>
                                    <th class="min-w-160px">Active/Used Users <i class="bi bi-info-circle"
                                            title="For one-time use discounts, this is the number of customers who used the discount and still have an active subscription"
                                            data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click"
                                            data-bs-placement="top"></i></th>
                                    <th class="min-w-150px">Cancelled Users</th>
                                    <th class="min-w-150px">Total</th>
                                    <th class="min-w-200px ">Actions</th>
                                </tr>
                            </thead>
                            <!--end::Table head-->
                            <!--begin::Table body-->
                            <tbody>
                                <tr>
                                    <td>
                                        <a href="#" class="ps-2 text-dark mb-1 fs-6">10PCTCOMEBACK</a>
                                        <p class="ps-2 fs-6 text-gray-700 pe-7">Stay and Save 10% Off</p>
                                    </td>
                                    <td>
                                        <a href="#" class="text-dark mb-1 fs-6">New</a>
                                    </td>
                                    <td>
                                        <a href="#" class="text-dark d-block mb-1 fs-6">Yes</a>
                                    </td>
                                    <td>
                                        <a href="#" class="text-dark d-block mb-1 fs-6">Yes</a>
                                    </td>
                                    <td>
                                        <a href="#" class="text-dark d-block mb-1 fs-6">40</a>
                                    </td>
                                    <td>
                                        <a href="#" class="text-dark d-block mb-1 fs-6">60</a>
                                    </td>
                                    <td>
                                        <a href="#" class="text-dark d-block mb-1 fs-6">20</a>
                                    </td>
                                    <td>
                                        <a href="#" class="text-dark d-block mb-1 fs-6">120</a>
                                    </td>
                                    <td class="d-flex">
                                        <a href="{{ route('admin.discount_codes.edit', 1) }}"
                                            class="btn btn-light btn-active-color-primary btn-sm px-4 me-2">Edit</a>
                                        <a href="#"
                                            class="btn btn-light btn-active-color-primary btn-sm px-4 me-2">Delete</a>
                                    </td>
                                </tr>
                            </tbody>
                            <!--end::Table body-->
                        </table>
                        <!--end::Table-->
                    </div>
                    <!--end::Table container-->
                </div>
                <!--begin::Body-->
                <!--end::Card body-->
            </div>
            <!--end::Card-->
        </div>
        <!--end::Content-->

    </div>
@endsection
