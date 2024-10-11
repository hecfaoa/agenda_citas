<?php $page = 'change-password'; ?>
@extends('layout.mainlayout')
@section('content')
    <div class="page-wrapper">
        <!-- Page Content -->
        <div class="content container-fluid">
            <!-- Page Header -->
            @component('components.page-header')
                @slot('title')
                    Dashboard
                @endslot
                @slot('li_1')
                    Settings
                @endslot
            @endcomponent
            <!-- /Page Header -->

            @component('components.settings-header')
            @endcomponent

            <div class="row">
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-body">
                            <form action="javascript:;">
                                <div class="row">
                                    <h4 class="page-title">Change Password</h4>
                                    <div class="col-12 col-md-6 col-xl-12">
                                        <div class="form-group local-forms">
                                            <label>Old password <span class="login-danger">*</span></label>
                                            <input class="form-control" type="text" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-xl-6">
                                        <div class="form-group local-forms">
                                            <label>New password <span class="login-danger">*</span></label>
                                            <input class="form-control" type="text" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-xl-6">
                                        <div class="form-group local-forms">
                                            <label>Confirm password <span class="login-danger">*</span></label>
                                            <input class="form-control" type="text" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="doctor-submit text-end">
                                            <button type="submit" class="btn btn-primary submit-form me-2">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- /Page Content -->
        @component('components.notification-box')
        @endcomponent
    </div>
@endsection
