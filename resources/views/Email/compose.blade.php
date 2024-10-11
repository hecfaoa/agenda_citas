<?php $page = 'compose'; ?>
@extends('layout.mainlayout')
@section('content')
    <div class="page-wrapper">
        <div class="content">
            <!-- Page Header -->
            @component('components.page-header')
                @slot('title')
                    App
                @endslot
                @slot('li_1')
                    Inbox
                @endslot
            @endcomponent
            <!-- /Page Header -->
            <div class="row">
                @livewire('inbox-sidebar')
                <div class="col-xl-8">
                    <div class="card chat-box mb-2">
                        <div class="compose-mail">
                            <h3>Compose New Mail</h3>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group local-forms">
                                    <label>To</label>
                                    <input type="text" class="form-control ">
                                    <ul class="nav sub-mails">
                                        <li><a href="javascript:;">CC</a></li>
                                        <li><a href="javascript:;">Bcc</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group local-forms">
                                    <label>Subject</label>
                                    <input type="text" class="form-control ">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group summer-mail">
                                    <textarea rows="4" cols="5" class="form-control summernote" placeholder="Enter your message here"></textarea>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-xl-12">
                                <div class="form-group local-top-form">
                                    <label class="local-top">Attachments <span class="login-danger">*</span></label>
                                    <div class="settings-btn upload-files-avator">
                                        <input type="file" accept="image/*" name="image" id="file"
                                            onchange="loadFile(event)" class="hide-input">
                                        <label for="file" class="upload">Choose File</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="mail-send">
                                    <a href="javascript:;"><img src="{{ URL::asset('/assets/img/icons/trash.svg') }}"
                                            class="me-2" alt="img"></a>
                                    <a href="javascript:;"><img src="{{ URL::asset('/assets/img/icons/ram.svg') }}"
                                            class="me-2" alt="img"></a>
                                    <a href="javascript:;" class="btn btn-primary">Send</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
        @component('components.notification-box')
        @endcomponent
    </div>
@endsection
