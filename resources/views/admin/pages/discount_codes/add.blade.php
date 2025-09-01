@extends('admin.main')
@section('content')
    <div class="d-flex flex-column flex-column-fluid">
        <div id="kt_app_toolbar" class="app-toolbar  d-flex flex-stack py-4 py-lg-8 ">
            <div class="d-flex flex-grow-1 flex-stack flex-wrap gap-2 mb-n10" id="kt_toolbar">
                <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3 ">

                    <h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">
                        Add Discounts
                    </h1>
                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">

                        <li class="breadcrumb-item text-muted">
                            <a href="{{ route('admin.dashboard') }}" class="text-muted text-hover-primary">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-500 w-5px h-2px"></span>
                        </li>
                        <li class="breadcrumb-item text-muted">
                            <a href="{{ route('admin.discount_codes') }}" class="text-muted text-hover-primary">Discounts</a>
                        </li>
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-500 w-5px h-2px"></span>
                        </li>
                        <li class="breadcrumb-item text-gray-900">Add</li>
                    </ul>
                </div>
            </div>
        </div>
        <!--begin::Content-->
        <div id="kt_app_content" class="app-content  flex-column-fluid ">

            <!--begin::Card-->
            <div class="card">
                <!--begin::Card body-->
                <div class="card-body">
                    <form id="kt_account_profile_details_form" class="form fv-plugins-bootstrap5 fv-plugins-framework"
                        novalidate="novalidate" data-gtm-form-interact-id="0">
                        <!--begin::Card body-->
                        <div class="card-body">
                            <!--begin::Input group-->
                            <div class="row mb-6">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label fw-semibold fs-6">Title</label>
                                <!--end::Label-->
                                <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                    <input type="text" name="title"
                                        class="form-control form-control-lg form-control-solid" placeholder="Title">
                                    <div
                                        class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                    </div>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="row mb-6">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label  fw-semibold fs-6">Code</label>
                                <!--end::Label-->

                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                    <input type="text" name=""
                                        class="form-control form-control-lg form-control-solid" placeholder="code">
                                    <div
                                        class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                    </div>
                                </div>
                                <!--end::Col-->
                            </div>
                            
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="row mb-6">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label  fw-semibold fs-6">Discount Type</label>
                                <!--end::Label-->

                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row">
                                    <select name="discount_type_id" aria-label="Select a discont type" data-placeholder="Select a discont type..."
                                        class="form-select form-select-solid form-select-lg form-control">
                                        <option value="">Select a Discount...</option>
                                        <option data-kt-flag="flags/indonesia.svg" value="Precent">Precent</option>
                                        <option data-kt-flag="flags/malaysia.svg" value="dollar-amount">Dollar Amount</option>
                                        <option data-kt-flag="flags/canada.svg" value="free-delivery">Free Delivery</option>
                                    </select>
                                </div>
                                <!--end::Col-->
                            </div>
                            <div class="row mb-6">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label  fw-semibold fs-6">Reduction amount</label>
                                <!--end::Label-->

                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                    <div class="fs-6 text-gray-700 pe-7">(Examples: 0.5 for 50% off, 10 for $10 off)</div>
                                    <input type="text" name=""
                                        class="form-control form-control-lg form-control-solid" placeholder="Reduction amount">
                                    <div
                                        class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                    </div>
                                </div>
                                <!--end::Col-->
                            </div>
                            <div class="row mb-6">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label  fw-semibold fs-6">Mininum meals</label>
                                <!--end::Label-->

                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                    <div class="fs-6 text-gray-700 pe-7">(require a minimum number of meals to use this discount)</div>
                                    <input type="text" name=""
                                        class="form-control form-control-lg form-control-solid" placeholder="Mininum meals">
                                    <div
                                        class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                    </div>
                                </div>
                                <!--end::Col-->
                            </div>

                            <!--begin::Input group-->
                            <div class="row mb-6">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label  fw-semibold fs-6">Recurring</label>
                                <!--end::Label-->

                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row fv-plugins-icon-container fv-plugins-bootstrap5-row-valid">
                                    <!--begin::Options-->
                                    <div class="d-flex align-items-center mt-3">
                                        <!--begin::Option-->
                                        <label
                                            class="form-check form-check-custom form-check-inline form-check-solid me-5 is-valid">
                                            <input class="form-check-input" name="" type="checkbox"
                                                value="1" data-gtm-form-interact-field-id="1">
                                            <span class="fs-6 text-gray-700 pe-7">
                                                (check this box for weekly discount, leave unchecked for one-time or first week use only)
                                            </span>
                                        </label>
                                        <!--end::Option-->
                                    </div>
                                    <!--end::Options-->
                                    <div
                                        class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                    </div>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->
                            <div class="row mb-6">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label  fw-semibold fs-6">Stackable</label>
                                <!--end::Label-->

                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row fv-plugins-icon-container fv-plugins-bootstrap5-row-valid">
                                    <!--begin::Options-->
                                    <div class="d-flex align-items-center mt-3">
                                        <!--begin::Option-->
                                        <label
                                            class="form-check form-check-custom form-check-inline form-check-solid me-5 is-valid">
                                            <input class="form-check-input" name="" type="checkbox"
                                                value="1" data-gtm-form-interact-field-id="1">
                                            <span class="fs-6 text-gray-700 pe-7">
                                                (can be combined with other discounts) 
                                            </span>
                                        </label>
                                        <!--end::Option-->
                                    </div>
                                    <!--end::Options-->
                                    <div
                                        class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                    </div>
                                </div>
                                <!--end::Col-->
                            </div>
                            <div class="row mb-6">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label  fw-semibold fs-6">Family style</label>
                                <!--end::Label-->

                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row fv-plugins-icon-container fv-plugins-bootstrap5-row-valid">
                                    <!--begin::Options-->
                                    <div class="d-flex align-items-center mt-3">
                                        <!--begin::Option-->
                                        <label
                                            class="form-check form-check-custom form-check-inline form-check-solid me-5 is-valid">
                                            <input class="form-check-input" name="" type="checkbox"
                                                value="1" data-gtm-form-interact-field-id="1">
                                            <span class="fs-6 text-gray-700 pe-7">
                                                (discount applicable for Family Style plans)
                                            </span>
                                        </label>
                                        <!--end::Option-->
                                    </div>
                                    <!--end::Options-->
                                    <div
                                        class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                    </div>
                                </div>
                                <!--end::Col-->
                            </div>
                            <div class="row mb-6">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label  fw-semibold fs-6">Default</label>
                                <!--end::Label-->

                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row fv-plugins-icon-container fv-plugins-bootstrap5-row-valid">
                                    <!--begin::Options-->
                                    <div class="d-flex align-items-center mt-3">
                                        <!--begin::Option-->
                                        <label
                                            class="form-check form-check-custom form-check-inline form-check-solid me-5 is-valid">
                                            <input class="form-check-input" name="" type="checkbox"
                                                value="1" data-gtm-form-interact-field-id="1">
                                            <span class="fs-6 text-gray-700 pe-7">
                                                (auto-apply to new customer orders) 
                                            </span>
                                        </label>
                                        <!--end::Option-->
                                    </div>
                                    <!--end::Options-->
                                    <div
                                        class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                    </div>
                                </div>
                                <!--end::Col-->
                            </div>
                            <div class="row mb-6">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label  fw-semibold fs-6">Active</label>
                                <!--end::Label-->

                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row fv-plugins-icon-container fv-plugins-bootstrap5-row-valid">
                                    <!--begin::Options-->
                                    <div class="d-flex align-items-center mt-3">
                                        <!--begin::Option-->
                                        <label
                                            class="form-check form-check-custom form-check-inline form-check-solid me-5 is-valid">
                                            <input class="form-check-input" name="" type="checkbox"
                                                value="1" data-gtm-form-interact-field-id="1">
                                            <span class="fs-6 text-gray-700 pe-7">
                                                (must be checked for discount to take effect) 
                                            </span>
                                        </label>
                                        <!--end::Option-->
                                    </div>
                                    <!--end::Options-->
                                    <div
                                        class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                    </div>
                                </div>
                                <!--end::Col-->
                            </div>
                            <div class="row mb-6">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label  fw-semibold fs-6">Public</label>
                                <!--end::Label-->

                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row fv-plugins-icon-container fv-plugins-bootstrap5-row-valid">
                                    <!--begin::Options-->
                                    <div class="d-flex align-items-center mt-3">
                                        <!--begin::Option-->
                                        <label
                                            class="form-check form-check-custom form-check-inline form-check-solid me-5 is-valid">
                                            <input class="form-check-input" name="" type="checkbox"
                                                value="1" data-gtm-form-interact-field-id="1">
                                            <span class="fs-6 text-gray-700 pe-7">
                                                (enable promo links and enter code at checkout) 
                                            </span>
                                        </label>
                                        <!--end::Option-->
                                    </div>
                                    <!--end::Options-->
                                    <div
                                        class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                    </div>
                                </div>
                                <!--end::Col-->
                            </div>
                            <div class="row mb-6">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label  fw-semibold fs-6"></label>
                               
                                <div class="col-lg-8 fv-row fv-plugins-icon-container fv-plugins-bootstrap5-row-valid">
                                    <!--begin::Options-->
                                    <div class="d-flex align-items-center mt-3">
                                        <h2>Who is this discount valid for?</h2>
                                        <!--end::Option-->
                                    </div>
                                    <!--end::Options-->
                                    
                                </div>
                                <!--end::Col-->
                            </div>
                            <div class="row mb-6">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label  fw-semibold fs-6"></label>
                                <!--end::Label-->

                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row fv-plugins-icon-container fv-plugins-bootstrap5-row-valid">
                                    <!--begin::Options-->
                                    <div class="d-flex align-items-center mt-3">
                                        <!--begin::Option-->
                                        <label
                                            class="form-check form-check-custom form-check-inline form-check-solid me-5 is-valid">
                                            <input class="form-check-input" name="" type="checkbox"
                                                value="1" data-gtm-form-interact-field-id="1">
                                            <span class="fs-6  fw-semibold  pe-7">
                                                New customers
                                            </span>
                                        </label>
                                        <!--end::Option-->
                                    </div>
                                    <!--end::Options-->
                                    <div
                                        class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                    </div>
                                </div>
                                <!--end::Col-->
                            </div>
                            <div class="row mb-6">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label  fw-semibold fs-6"></label>
                                <!--end::Label-->

                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row fv-plugins-icon-container fv-plugins-bootstrap5-row-valid">
                                    <!--begin::Options-->
                                    <div class="d-flex align-items-center mt-3">
                                        <!--begin::Option-->
                                        <label
                                            class="form-check form-check-custom form-check-inline form-check-solid me-5 is-valid">
                                            <input class="form-check-input" name="" type="checkbox"
                                                value="1" data-gtm-form-interact-field-id="1">
                                            <span class="fs-6 fw-semibold-700 pe-7">
                                                Returning customers
                                            </span>
                                        </label>
                                        <!--end::Option-->
                                    </div>
                                    <!--end::Options-->
                                    <div
                                        class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                    </div>
                                </div>
                                <!--end::Col-->
                            </div>
                            <div class="row mb-6">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label  fw-semibold fs-6"></label>
                                <div class="col-lg-8 fv-row fv-plugins-icon-container fv-plugins-bootstrap5-row-valid">
                                    <div class="d-flex align-items-center mt-3">
                                        <h2>Plan types</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-6">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label  fw-semibold fs-6"></label>
                                <!--end::Label-->

                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row fv-plugins-icon-container fv-plugins-bootstrap5-row-valid">
                                    <!--begin::Options-->
                                    <div class="d-flex align-items-center mt-3">
                                        <!--begin::Option-->
                                        <label
                                            class="form-check form-check-custom form-check-inline form-check-solid me-5 is-valid">
                                            <input class="form-check-input" name="" type="checkbox"
                                                value="1" data-gtm-form-interact-field-id="1">
                                            <span class="fs-6 fw-semibold-700 pe-7">
                                                Balanced Meal
                                            </span>
                                        </label>
                                        <!--end::Option-->
                                    </div>
                                    <!--end::Options-->
                                    <div
                                        class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                    </div>
                                </div>
                                <!--end::Col-->
                            </div>
                            <div class="row mb-6">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label  fw-semibold fs-6"></label>
                                <!--end::Label-->

                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row fv-plugins-icon-container fv-plugins-bootstrap5-row-valid">
                                    <!--begin::Options-->
                                    <div class="d-flex align-items-center mt-3">
                                        <!--begin::Option-->
                                        <label
                                            class="form-check form-check-custom form-check-inline form-check-solid me-5 is-valid">
                                            <input class="form-check-input" name="" type="checkbox"
                                                value="1" data-gtm-form-interact-field-id="1">
                                            <span class="fs-6 fw-semibold-700 pe-7">
                                                Junior Meal
                                            </span>
                                        </label>
                                        <!--end::Option-->
                                    </div>
                                    <!--end::Options-->
                                    <div
                                        class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                    </div>
                                </div>
                                <!--end::Col-->
                            </div>
                            <div class="row mb-6">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label  fw-semibold fs-6"></label>
                                <!--end::Label-->

                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row fv-plugins-icon-container fv-plugins-bootstrap5-row-valid">
                                    <!--begin::Options-->
                                    <div class="d-flex align-items-center mt-3">
                                        <!--begin::Option-->
                                        <label
                                            class="form-check form-check-custom form-check-inline form-check-solid me-5 is-valid">
                                            <input class="form-check-input" name="" type="checkbox"
                                                value="1" data-gtm-form-interact-field-id="1">
                                            <span class="fs-6 fw-semibold-700 pe-7">
                                                Bulk Food
                                            </span>
                                        </label>
                                        <!--end::Option-->
                                    </div>
                                    <!--end::Options-->
                                    <div
                                        class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                    </div>
                                </div>
                                <!--end::Col-->
                            </div>
                        </div>
                        <!--end::Card body-->

                        <!--begin::Actions-->
                        <div class="card-footer d-flex justify-content-end py-6 px-9">
                            <button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit">Create</button>
                        </div>
                        <!--end::Actions-->
                        <input type="hidden">
                    </form>
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Card-->
        </div>
        <!--end::Content-->

    </div>
@endsection
