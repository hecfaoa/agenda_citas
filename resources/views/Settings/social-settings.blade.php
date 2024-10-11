<?php $page = 'social-settings'; ?>
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
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h5 class="card-title">Google Login Credential</h5>
                            <div class="status-toggle d-flex justify-content-between align-items-center">
                                <input type="checkbox" id="status_1" class="check" checked="">
                                <label for="status_1" class="checktoggle">checkbox</label>
                            </div>
                        </div>
                        <div class="card-body pt-0">

                            <form action="javascript:;">
                                <div class="settings-form">
                                    <div class="form-group form-placeholder">
                                        <label>Client ID <span class="star-red">*</span></label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group form-placeholder">
                                        <label>Client Secret <span class="star-red">*</span></label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group mb-0">
                                        <div class="settings-btns">
                                            <button type="submit"
                                                class="border-0 btn btn-primary btn-gradient-primary btn-rounded">Save</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h5 class="card-title">Facebook</h5>
                            <div class="status-toggle d-flex justify-content-between align-items-center">
                                <input type="checkbox" id="status_2" class="check" checked="">
                                <label for="status_2" class="checktoggle">checkbox</label>
                            </div>
                        </div>
                        <div class="card-body pt-0">
                            <form action="javascript:;">
                                <div class="settings-form">
                                    <div class="form-group form-placeholder">
                                        <label>App ID <span class="star-red">*</span></label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group form-placeholder">
                                        <label>App Secret <span class="star-red">*</span></label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group mb-0">
                                        <div class="settings-btns">
                                            <button type="submit"
                                                class="border-0 btn btn-primary btn-gradient-primary btn-rounded">Save</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h5 class="card-title">Twiter Login Credential</h5>
                            <div class="status-toggle d-flex justify-content-between align-items-center">
                                <input type="checkbox" id="status_3" class="check">
                                <label for="status_3" class="checktoggle">checkbox</label>
                            </div>
                        </div>
                        <div class="card-body pt-0">
                            <form action="javascript:;">
                                <div class="settings-form">
                                    <div class="form-group form-placeholder">
                                        <label>Client ID <span class="star-red">*</span></label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group form-placeholder">
                                        <label>Client Secret <span class="star-red">*</span></label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group mb-0">
                                        <div class="settings-btns">
                                            <button type="submit"
                                                class="border-0 btn btn-primary btn-gradient-primary btn-rounded">Save</button>
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
