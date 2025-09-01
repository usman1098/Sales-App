@extends('admin.main')
@section('content')
    <div class="d-flex flex-column flex-column-fluid">

        <!--begin::Toolbar-->
        <div id="kt_app_toolbar" class="app-toolbar  d-flex flex-stack py-4 py-lg-8 ">


            <!--begin::Toolbar wrapper-->
            <div class="d-flex flex-grow-1 flex-stack flex-wrap gap-2 mb-n10" id="kt_toolbar">
                <!--begin::Page title-->
                <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3 ">
                    <!--begin::Title-->
                    <h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">
                        Settings
                    </h1>
                    <!--end::Title-->
                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">
                            <a href="{{ route('admin.dashboard') }}" class="text-muted text-hover-primary">Home</a>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-500 w-5px h-2px"></span>
                        </li>
                        <!--end::Item-->
                        {{-- <!--begin::Item--> --}}
                        <li class="breadcrumb-item text-muted">
                            settings </li>
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-gray-900">
                        </li>
                        <!--end::Item-->

                    </ul>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page title-->
            </div>
            <!--end::Toolbar wrapper-->
        </div>
        <!--end::Toolbar-->

        <!--begin::Content-->
        <div id="kt_app_content" class="app-content  flex-column-fluid ">
            <div class="card mt-4">
                <div class="card-header" style="background: #ddd;">
                    <h2 class="card-title">Meal Days & Order Deadline</h2>
                </div>
                <div class="card-body">
                    <h3 class="d-flex  fs-5 fw-bold mb-3">Meal days</h3>
                    <div class="d-flex flex-wrap">
                        <label class="form-check d-flex align-items-center me-5">
                            <input class="form-check-input" name="meal_days[]" type="checkbox" value="tue" />
                            <span class="fw-semibold fs-6 ms-2">Tue</span>
                        </label>
                        <label class="form-check d-flex align-items-center  me-5">
                            <input class="form-check-input" name="meal_days[]" type="checkbox" value="wed" />
                            <span class="fw-semibold fs-6 ms-2">Wed</span>
                        </label>
                        <label class="form-check d-flex align-items-center  me-5">
                            <input class="form-check-input" name="meal_days[]" type="checkbox" value="thu" />
                            <span class="fw-semibold fs-6 ms-2">Thu</span>
                        </label>
                        <label class="form-check d-flex align-items-center  me-5">
                            <input class="form-check-input" name="meal_days[]" type="checkbox" value="fri" />
                            <span class="fw-semibold fs-6 ms-2">Fri</span>
                        </label>
                        <label class="form-check d-flex align-items-center  me-5">
                            <input class="form-check-input" name="meal_days[]" type="checkbox" value="sat" />
                            <span class="fw-semibold fs-6 ms-2">Sat</span>
                        </label>
                        <label class="form-check d-flex align-items-center  me-5">
                            <input class="form-check-input" name="meal_days[]" type="checkbox" value="sun" />
                            <span class="fw-semibold fs-6 ms-2">Sun</span>
                        </label>
                    </div>
                    <div class="fs-6 text-gray-700 pe-7">Days that meals are delivered or picked up (ex: Tue and Fri).
                    </div>
                    <h3 class="d-flex align-items-center fs-5 fw-bold mt-3">Auto-select</h3>
                    <h3 class="fs-6 text-gray-700 pe-7">Fri 12pm</h3>
                    <div class="fs-6 text-gray-700 pe-7">Day and time of the week that meals will be auto-selected</div>

                    <h3 class="d-flex align-items-center fs-5 fw-bold mt-3">Order deadline</h3>
                    <div class="d-flex justify-content-between align-items-center mt-2">
                        <div class="d-flex  d-flex align-items-center">
                            <select class="form-select form-select-sm" aria-label="Select Day">
                                <option value="mon">Mon</option>
                                <option value="tue">Tue</option>
                                <option value="wed">Wed</option>
                                <option value="thu">Thu</option>
                                <option value="fri">Fri</option>
                                <option value="sat">Sat</option>
                                <option value="sun">Sun</option>
                            </select>
                            <p class="text-gray-700 pe-2"></p>12pm</p>
                        </div>
                    </div>
                    <div class="fs-6 text-gray-700 pe-7">Last day and time of the week prior to delivery that meal
                        orders
                        can be submitted</div>

                    <h3 class="d-flex align-items-center fs-5 fw-bold mt-3">Sign up deadline</h3>
                    <div class="d-flex justify-content-between align-items-center mt-2">
                        <div class="d-flex d-flex align-items-center">
                            <select class="form-select form-select-sm" aria-label="Select Day">
                                <option value="mon">Mon</option>
                                <option value="tue">Tue</option>
                                <option value="wed">Wed</option>
                                <option value="thu">Thu</option>
                                <option value="fri">Fri</option>
                                <option value="sat">Sat</option>
                                <option value="sun">Sun</option>
                            </select>
                            <p class="text-gray-700 pe-2"></p>12pm</p>
                        </div>
                    </div>
                    <div class="fs-6 text-gray-700 pe-7">Last day and time of the week prior to delivery that new
                        customer
                        can sign up</div>
                </div>
            </div>
            <div class="card mt-4">
                <div class="card-header" style="background: #ddd;">
                    <h2 class="card-title">Delivery Info</h2>
                </div>
                <div class="card-body">
                    <div class="mb-10">
                        <label for="exampleFormControlInput1" class="fs-5 fw-bold form-label">Delivery times</label>
                        <input type="text" name="" id="" class="form-control form-control-sm" />
                        <div class="fs-6 text-gray-700 pe-7">Time range when meals will be delivered (ex: 3pm - 8pm).
                            Appears in emails, Schedule page, and web site footer.
                            Delivery disclaimer</div>
                    </div>
                    <div class="mb-10">
                        <label for="exampleFormControlInput1" class="fs-5 fw-bold form-label">Delivery
                            disclaimer</label>
                        <textarea type="text" class="form-control form-control-sm"></textarea>
                        <div class="fs-6 text-gray-700 pe-7">Appears on the sign up checkout and meal plan settings
                            pages
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mt-4">
                <div class="card-header" style="background: #ddd;">
                    <h2 class="card-title">Pickup Info</h2>
                    <div class="card-toolbar">

                    </div>
                </div>
                <div class="card-body">
                    <div class="mb-10">
                        <label for="exampleFormControlInput1" class="fs-5 fw-bold form-label">Pickup times</label>
                        <input type="text" name="" id="" class="form-control form-control-sm" />
                        <div class="fs-6 text-gray-700 pe-7">Time range when meals will be picked up (ex: 11am - 7pm).
                            Appears in emails, Schedule page, and web site footer.</div>
                    </div>
                    <div class="mb-10">
                        <label for="exampleFormControlInput1" class="fs-5 fw-bold form-label">Pickup
                            disclaimer</label>
                        <textarea type="text" class="form-control form-control-sm"></textarea>
                        <div class="fs-6 text-gray-700 pe-7">Appears on the sign up checkout and meal plan settings
                            pages
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mt-4">
                <div class="card-header" style="background: #ddd;">
                    <h2 class="card-title">To Go Info</h2>
                </div>
                <div class="card-body">
                    <div class="mb-10">
                        <label for="exampleFormControlInput1" class="fs-5 fw-bold form-label">To go hours</label>
                        <input type="text" name="" id="" class="form-control form-control-sm" />
                        <div class="fs-6 text-gray-700 pe-7">Abbreviated days and times to go is available (ex: Mon -
                            Fri,
                            11am - 7pm). Appears on To Go page and in web site footer.</div>
                    </div>
                </div>
            </div>
            <div class="card mt-4">
                <div class="card-header" style="background: #ddd;">
                    <h2 class="card-title">UR Settings</h2>
                    <div class="card-toolbar">

                    </div>
                </div>
                <div class="card-body">
                    <div class="mb-10">
                        <label for="exampleFormControlInput1" class="fs-5 fw-bold form-label">Pickup URMC
                            times</label>
                        <input type="text" name="" id="" class="form-control form-control-sm" />
                        <div class="fs-6 text-gray-700 pe-7">Time range when meals can be picked up (ex: 4pm - 7pm).
                        </div>
                    </div>
                    <div class="mb-10">
                        <label class="form-check d-flex align-items-center me-5">
                            <input class="form-check-input" name="" type="checkbox" value="tue" />
                            <span class="fw-semibold fs-6 ms-2">Disable delivery for new UR customers and display this
                                message:</span>
                        </label>
                        <input type="text" name="" id="" class="form-control form-control-sm" />
                    </div>
                </div>
            </div>
           <!--begin::Actions-->
           <div class="card-footer d-flex justify-content-end py-6 px-9">
            <button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit">Create</button>
        </div>
            <!--end::Card-->
        </div>
        <!--end::Content-->

    </div>
@endsection
