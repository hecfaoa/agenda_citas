<?php $page = 'seo-settings'; ?>
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
                        <div class="card-header">
                            <h5 class="card-title">SEO Settings</h5>
                        </div>
                        <div class="card-body pt-0">
                            <form action="javascript:;">
                                <div class="settings-form">
                                    <div class="form-group form-placeholder">
                                        <label>Meta Title <span class="star-red">*</span></label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Meta Keywords <span class="star-red">*</span></label>
                                        <input type="text" data-role="tagsinput" class="input-tags form-control"
                                            placeholder="Meta Keywords" name="services" value="Lorem,Ipsum" id="services">
                                    </div>
                                    <div class="form-group">
                                        <label>Meta Description <span class="star-red">*</span></label>
                                        <textarea class="form-control"></textarea>
                                    </div>
                                    <div class="form-group mb-0">
                                        <div class="settings-btns">
                                            <button type="submit"
                                                class="border-0 btn btn-primary btn-gradient-primary btn-rounded">Submit</button>
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
