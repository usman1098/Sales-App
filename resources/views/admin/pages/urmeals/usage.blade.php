@extends('admin.main')
@section('content')
    <div class="d-flex flex-column flex-column-fluid">
        <div id="kt_app_toolbar" class="app-toolbar  d-flex flex-stack py-4 py-lg-8 ">
            <div class="d-flex flex-grow-1 flex-stack flex-wrap gap-2 mb-n10" id="kt_toolbar">
                <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3 ">

                    <h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">UR
                        Meals
                    </h1>
                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">

                        <li class="breadcrumb-item text-muted">
                            <a href="{{ route('admin.dashboard') }}" class="text-muted text-hover-primary">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-500 w-5px h-2px"></span>
                        </li>
                        <li class="breadcrumb-item text-muted">
                            <a href="{{ route('admin.discount_codes') }}"
                                class="text-muted text-hover-primary">Discounts</a>
                        </li>
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-500 w-5px h-2px"></span>
                        </li>
                        <li class="breadcrumb-item text-gray-900">UR Meals</li>
                    </ul>
                </div>

                <!--begin::Button-->
                <div>
                    <a href="{{ route('admin.discount_codes.edit', ['id' => 1]) }}"
                        class="btn btn-sm btn-primary fw-bold">Edit Discount Code</a>
                    <a href="{{ route('admin.discount_codes.add') }}" class="btn btn-sm btn-primary fw-bold">Delete</a>
                </div>
                <!--end::Button-->
            </div>

        </div>
        <!--begin::Navs-->
        <div>
            <ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bold">
                <!--begin::Nav item-->
                <li class="nav-item mt-2">
                    <a class="nav-link text-active-primary ms-0 me-10 py-5 active"
                        href="../../demo35/dist/pages/user-profile/overview.html">Usage Report</a>
                </li>
                <!--end::Nav item-->
                <!--begin::Nav item-->
                <li class="nav-item mt-2">
                    <a class="nav-link text-active-primary ms-0 me-10 py-5"
                        href="../../demo35/dist/pages/user-profile/projects.html">Active</a>
                </li>
                <!--end::Nav item-->
                <!--begin::Nav item-->
                <li class="nav-item mt-2">
                    <a class="nav-link text-active-primary ms-0 me-10 py-5"
                        href="../../demo35/dist/pages/user-profile/campaigns.html">Active/Used</a>
                </li>
                <!--end::Nav item-->
                <!--begin::Nav item-->
                <li class="nav-item mt-2">
                    <a class="nav-link text-active-primary ms-0 me-10 py-5"
                        href="../../demo35/dist/pages/user-profile/documents.html">Cancelled</a>
                </li>
                <!--end::Nav item-->
                <!--begin::Nav item-->
                <li class="nav-item mt-2">
                    <a class="nav-link text-active-primary ms-0 me-10 py-5"
                        href="../../demo35/dist/pages/user-profile/followers.html">All Customers</a>
                </li>
                <!--end::Nav item-->
                <!--begin::Nav item-->
                <li class="nav-item mt-2">
                    <a class="nav-link text-active-primary ms-0 me-10 py-5"
                        href="../../demo35/dist/pages/user-profile/activity.html">Activity</a>
                </li>
                <!--end::Nav item-->
            </ul>
        </div>
        <!--begin::Navs-->
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
                                    <th class="ps-2 min-w-150px">Date Processed</th>
                                    <th class="min-w-125px">Week Of Service</th>
                                    <th class="min-w-125px">Sign Up</th>
                                    <th class="min-w-200px">Name</th>
                                    <th class="min-w-150px">Employee ID</th>
                                    <th class="min-w-150px">Employee Location</th>
                                    <th class="min-w-150px">Plan</th>
                                    <th class="min-w-150px">Plan Price</th>
                                    <th class="min-w-150px">Discount</th>
                                    <th class="min-w-150px">Discount Amt</th>
                                    <th class="min-w-150px">UR Discount %</th>
                                    <th class="min-w-150px">UR Discount Amt</th>
                                    <th class="min-w-150px">EH Discount %</th>
                                    <th class="min-w-150px">EH Discount Amt</th>
                                    <th class="min-w-150px">Delivery or Pickup</th>
                                    <th class="min-w-150px">Delivery Amt</th>
                                    <th class="min-w-150px">Tax</th>
                                    <th class="min-w-150px">Total Paid</th>
                                </tr>
                            </thead>
                            <!--end::Table head-->
                            <!--begin::Table body-->
                            <tbody>
                                <tr>
                                    <td>
                                        <a href="#" class="ps-2 text-dark  mb-1 fs-6">11/17/2024</a>
                                    </td>
                                    <td>
                                        <a href="#" class="text-dark mb-1 fs-6">11/18/2024</a>
                                    </td>
                                    <td>
                                        <a href="#" class="text-dark d-block mb-1 fs-6">03/01/2022 10:09 PM</a>
                                    </td>
                                    <td>
                                        <a href="#" class="text-dark d-block mb-1 fs-6">Yadanza, Nicole</a>
                                    </td>
                                    <td>
                                        <a href="#" class="text-dark d-block mb-1 fs-6">URMEALS</a>
                                    </td>
                                    <td>
                                        <a href="#" class="text-dark d-block mb-1 fs-6">UR Medicine</a>
                                    </td>
                                    <td>
                                        <a href="#" class="text-dark d-block mb-1 fs-6">8 Meals Per Week, Standard</a>
                                    </td>
                                    <td>
                                        <a href="#" class="text-dark d-block mb-1 fs-6">$87.99</a>
                                    </td>
                                    <td>
                                        <a href="#" class="text-dark d-block mb-1 fs-6">URMEALS (20% off discount)</a>
                                    </td>
                                    <td>
                                        <a href="#" class="text-dark d-block mb-1 fs-6">$17.60</a>
                                    </td>
                                    <td>
                                        <a href="#" class="text-dark d-block mb-1 fs-6">15%</a>
                                    </td>
                                    <td>
                                        <a href="#" class="text-dark d-block mb-1 fs-6">$10.56</a>
                                    </td>

                                    <td>
                                        <a href="#" class="text-dark d-block mb-1 fs-6">10%</a>
                                    </td>
                                    <td>
                                        <a href="#" class="text-dark d-block mb-1 fs-6">$7.04</a>
                                    </td>
                                    <td>
                                        <a href="#" class="text-dark d-block mb-1 fs-6">Pickup at Our Store</a>
                                    </td>
                                    <td>
                                        <a href="#" class="text-dark d-block mb-1 fs-6">$0.00</a>
                                    </td>
                                    <td>
                                        <a href="#" class="text-dark d-block mb-1 fs-6">$5.63</a>
                                    </td>
                                    <td>
                                        <a href="#" class="text-dark d-block mb-1 fs-6">$76.02</a>
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
