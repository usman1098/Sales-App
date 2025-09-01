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
                        <li class="breadcrumb-item text-muted">Users</li>
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-500 w-5px h-2px"></span>
                        </li>
                        <li class="breadcrumb-item text-gray-900">List</li>
                    </ul>
                </div>
                <!--begin::Button-->
                <a href="{{ route('admin.user.add') }}" class="btn btn-sm btn-primary fw-bold">Add User</a>
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
                                    <th class="ps-4 min-w-300px rounded-start">Name</th>
                                    <th class="min-w-125px">Email</th>
                                    <th class="min-w-125px">Role</th>
                                    <th class="min-w-200px">Active</th>
                                    <th class="min-w-150px">Signed In</th>
                                    <th class="min-w-200px ">Actions</th>
                                </tr>
                            </thead>
                            <!--end::Table head-->
                            <!--begin::Table body-->
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="symbol symbol-50px me-5">
                                                <span class="symbol-label bg-light">
                                                    <img src="{{ asset('admin_assets/media/avatars/300-1.jpg') }}"
                                                        class="h-75 align-self-end" alt="" />
                                                </span>
                                            </div>
                                            <div class="d-flex justify-content-start flex-column">
                                                <a href="#" class="text-dark  mb-1 fs-6">Jon Doe</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#" class="text-dark mb-1 fs-6">admin@gmail.com</a>
                                    </td>
                                    <td>
                                        <a href="#" class="text-dark d-block mb-1 fs-6">Admin</a>
                                    </td>
                                    <td>
                                        <a href="#" class="text-dark d-block mb-1 fs-6">Active</a>
                                    </td>
                                    <td>
                                        <a href="#" class="text-dark d-block mb-1 fs-6">2024-11-15 02:29 PM</a>
                                    </td>
                                    <td class="">
                                        <a href="#"
                                            class="btn btn-light btn-active-color-primary btn-sm px-4 me-2">View</a>
                                        <a href="{{ route('admin.user.edit', 1) }}"
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
