<?php $page = 'payment-settings'; ?>
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
                            <h5 class="card-title">Paypal</h5>
                            <div class="status-toggle d-flex justify-content-between align-items-center">
                                <input type="checkbox" id="status_1" class="check">
                                <label for="status_1" class="checktoggle">checkbox</label>
                            </div>
                        </div>
                        <div class="card-body pt-0">
                            <form action="javascript:;">
                                <div class="settings-form">
                                    <div class="form-group">
                                        <p class="pay-cont">Paypal Option</p>
                                        <label class="custom_radio me-4">
                                            <input type="radio" name="budget" value="Yes" checked="">
                                            <span class="checkmark"></span> Sandbox
                                        </label>
                                        <label class="custom_radio">
                                            <input type="radio" name="budget" value="Yes">
                                            <span class="checkmark"></span> Live
                                        </label>
                                    </div>
                                    <div class="form-group form-placeholder">
                                        <label>Braintree Tokenization key <span class="star-red">*</span></label>
                                        <input type="text" class="form-control"
                                            placeholder="sandbox_pgjcppvs_pd6gznv7zbrx9hb8">
                                    </div>
                                    <div class="form-group form-placeholder">
                                        <label>Braintree Merchant ID <span class="star-red">*</span></label>
                                        <input type="text" class="form-control" placeholder="pd6gznv7zbrx9hb8">
                                    </div>
                                    <div class="form-group form-placeholder">
                                        <label>Braintree Public key <span class="star-red">*</span></label>
                                        <input type="text" class="form-control" placeholder="h8bydrz7gcjkp7d4">
                                    </div>
                                    <div class="form-group form-placeholder">
                                        <label>Braintree Private key <span class="star-red">*</span></label>
                                        <input type="text" class="form-control"
                                            placeholder="sandbox_pgjcppvs_pd6gznv7zbrx9hb8">
                                    </div>
                                    <div class="form-group form-placeholder">
                                        <label>Paypal APP ID <span class="star-red">*</span></label>
                                        <input type="text" class="form-control" placeholder="pd6gznv7zbrx9hb8">
                                    </div>
                                    <div class="form-group form-placeholder">
                                        <label>Paypal Secret Key <span class="star-red">*</span></label>
                                        <input type="text" class="form-control" placeholder="h8bydrz7gcjkp7d4">
                                    </div>
                                    <div class="form-group mb-0">
                                        <div class="settings-btns">
                                            <button type="submit"
                                                class="border-0 btn btn-primary btn-gradient-primary btn-rounded">Save</button>&nbsp;&nbsp;
                                            <button type="submit" class="btn btn-secondary btn-rounded">Cancel</button>
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
                            <h5 class="card-title">Stripe</h5>
                            <div class="status-toggle d-flex justify-content-between align-items-center">
                                <input type="checkbox" id="status_2" class="check" checked="">
                                <label for="status_2" class="checktoggle">checkbox</label>
                            </div>
                        </div>
                        <div class="card-body pt-0">
                            <form action="javascript:;">
                                <div class="settings-form">
                                    <div class="form-group">
                                        <p class="pay-cont">Stripe Option</p>
                                        <label class="custom_radio me-4">
                                            <input type="radio" name="budget" value="Yes" checked="">
                                            <span class="checkmark"></span> Sandbox
                                        </label>
                                        <label class="custom_radio">
                                            <input type="radio" name="budget" value="Yes">
                                            <span class="checkmark"></span> Live
                                        </label>
                                    </div>
                                    <div class="form-group form-placeholder">
                                        <label>Gateway Name <span class="star-red">*</span></label>
                                        <input type="text" class="form-control" placeholder="Stripe">
                                    </div>
                                    <div class="form-group form-placeholder">
                                        <label>API Key <span class="star-red">*</span></label>
                                        <input type="text" class="form-control"
                                            placeholder="pk_test_AealxxOygZz84AruCGadWvUV00mJQZdLvr">
                                    </div>
                                    <div class="form-group form-placeholder">
                                        <label>Rest Key <span class="star-red">*</span></label>
                                        <input type="text" class="form-control"
                                            placeholder="sk_test_8HwqAWwBd4C4E77bgAO1jUgk00hDlERgn3">
                                    </div>
                                    <div class="form-group mb-0">
                                        <div class="settings-btns">
                                            <button type="submit"
                                                class="border-0 btn btn-primary btn-gradient-primary btn-rounded">Save</button>&nbsp;&nbsp;
                                            <button type="submit" class="btn btn-secondary btn-rounded">Cancel</button>
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
