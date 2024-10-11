<?php $page = 'edit-blog'; ?>
@extends('layout.mainlayout')
@section('content')
    <div class="page-wrapper">
        <div class="content">
            <!-- Page Header -->
            @component('components.page-header')
                @slot('title')
                    Blog
                @endslot
                @slot('li_1')
                    Edit Blogs
                @endslot
            @endcomponent
            <!-- /Page Header -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="javascript:;">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-heading">
                                            <h4>Blog Details</h4>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-xl-6">
                                        <div class="form-group local-forms">
                                            <label>Blog Title <span class="login-danger">*</span></label>
                                            <input class="form-control" type="text"
                                                value="Vaccines Are Close - But Right Now We Need to Hunker Down">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-xl-6">
                                        <div class="form-group local-forms">
                                            <label>Author Name <span class="login-danger">*</span></label>
                                            <input class="form-control" type="text" value="Stephen Bruk">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-xl-6">
                                        <div class="form-group local-forms">
                                            <label>Blog Category <span class="login-danger">*</span></label>
                                            @livewire('select-blog-category')
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-xl-6">
                                        <div class="form-group local-forms">
                                            <label>Blog Sub Category <span class="login-danger">*</span></label>
                                            @livewire('select-blog-sub-category')
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-xl-6">
                                        <div class="form-group local-forms">
                                            <label>Tags <small>(separated with a comma)</small> <span
                                                    class="login-danger">*</span></label>
                                            <input type="text" data-role="tagsinput" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-xl-6">
                                        <div class="form-group select-gender">
                                            <label class="gen-label">Blog Status <span class="login-danger">*</span></label>
                                            <div class="form-check-inline">
                                                <label class="form-check-label">
                                                    <input type="radio" name="gender" class="form-check-input"
                                                        checked>Active
                                                </label>
                                            </div>
                                            <div class="form-check-inline">
                                                <label class="form-check-label">
                                                    <input type="radio" name="gender" class="form-check-input">In Active
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-xl-12">
                                        <div class="form-group summer-mail">
                                            <textarea rows="4" cols="5" class="form-control summernote" placeholder="Enter your message here"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-xl-12">
                                        <div class="form-group local-top-form">
                                            <label class="local-top">Avatar <span class="login-danger">*</span></label>
                                            <div class="settings-btn upload-files-avator">
                                                <input type="file" accept="image/*" name="image" id="file"
                                                    onchange="loadFile(event)" class="hide-input">
                                                <label for="file" class="upload">Choose File</label>
                                            </div>
                                        </div>
                                        <div class="upload-images upload-size">
                                            <img src="{{ URL::asset('/assets/img/favicon.png') }}" alt="Image">
                                            <a href="javascript:void(0);" class="btn-icon logo-hide-btn">
                                                <i class="feather-x-circle"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="doctor-submit text-end">
                                            <button type="submit" class="btn btn-primary submit-form me-2">Publish
                                                Blog</button>
                                            <button type="submit" class="btn btn-primary cancel-form">Cancel</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @component('components.notification-box')
        @endcomponent
    </div>
@endsection
