<?php $page = 'mail-view'; ?>
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
                @livewire('mail-view-sidebar')
                <div class="col-xl-8 ">
                    <div class="card chat-box ">
                        <div class="mailview-content view-content-bottom">
                            <div class="mail-view-list">
                                <ul class="nav">
                                    <li><a href="javascript:;"><img alt=""
                                                src="{{ URL::asset('/assets/img/icons/warning.svg') }}"></a></li>
                                    <li><a href="javascript:;"><img alt=""
                                                src="{{ URL::asset('/assets/img/icons/tag-icon-04.svg') }}"></a></li>
                                    <li><a href="javascript:;"><img alt=""
                                                src="{{ URL::asset('/assets/img/icons/inbox.svg') }}"></a>
                                    </li>
                                    <li><a href="javascript:;"><img alt=""
                                                src="{{ URL::asset('/assets/img/icons/folder-icon-05.svg') }}"></a></li>
                                </ul>
                            </div>
                            <div class="mailview-header comman-space-flex">
                                <div class="sender-info comman-flex">
                                    <div class="sender-img">
                                        <img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-01.jpg') }}"
                                            class="rounded-circle me-2">
                                    </div>
                                    <div class="send-user send-user-name">
                                        <h4>Bernardo James <span class="email-market">Marketting</span></h4>
                                        <p><span>From:</span> Markhaysmith@example.com</p>
                                    </div>
                                </div>
                                <div class="mail-reports">
                                    <ul class="nav">
                                        <li><a href="javascript:;" class="ford-angle star-bg"><i
                                                    class="fas fa-star starred"></i></a></li>
                                        <li><a href="javascript:;" class="ford-angle"><img alt=""
                                                    src="{{ URL::asset('/assets/img/icons/forward-icon-01.svg') }}"></a>
                                        </li>
                                        <li><a href="javascript:;" class="ford-angle"><img alt=""
                                                    src="{{ URL::asset('/assets/img/icons/forward-icon-02.svg') }}"></a>
                                        </li>
                                        <li><a href="javascript:;" class="ford-angle"><img alt=""
                                                    src="{{ URL::asset('/assets/img/icons/forward-icon-03.svg') }}"></a>
                                        </li>
                                        <li>
                                            <a href="javascript:;" class="ford-angle" data-bs-toggle="dropdown"
                                                aria-expanded="false" class="add-list-btn">
                                                <i class="feather-more-vertical"></i>
                                            </a>
                                            <div class="dropdown-menu" style="">
                                                <a class="dropdown-item" href="javascript:;"><i
                                                        class="feather-user me-2 text-primary"></i> Profile</a>
                                                <a class="dropdown-item" href="javascript:;"><i
                                                        class="feather-plus-circle me-2 text-success"></i> Archive</a>
                                                <a class="dropdown-item" href="javascript:;"><i
                                                        class="feather-trash-2 me-2 text-danger"></i> Delete</a>
                                                <a class="dropdown-item " href="javascript:;"><i
                                                        class="feather-slash me-2 text-secondary"></i> Block</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="mailview-inner">
                                <p>Hola, thanks for reaching me out.</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                    ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                    ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                                    reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur
                                    sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id
                                    est laborum.</p>
                                <p>Scelerisque purus semper eget duis at. Feugiat in fermentum posuere urna net.</p>
                                <p>Leo in vitae turpis massa sed element ?</p>
                            </div>
                            <div class="thank-mail">
                                <h5>Thanks</h5>
                                <h4>Mark hay smith</h4>
                            </div>
                            <div class="mail-attach">
                                <h2>Attachments<a href="javascript:;">Download All</a></h2>
                                <ul class="msg-sub-list nav">
                                    <li><img src="{{ URL::asset('/assets/img/icons/document-icon.svg') }}" alt=""
                                            class="me-1">Expense.txt <span class="ms-1">30.0 MB</span><img
                                            src="{{ URL::asset('/assets/img/icons/chat-icon-07.svg') }}" alt=""
                                            class="ms-2 "><i class="feather-x ms-2"></i></li>
                                    <li><img src="{{ URL::asset('/assets/img/icons/gallery-icon.svg') }}" alt=""
                                            class="me-1">Expense.img <span class="ms-1">4.0 MB</span><img
                                            src="{{ URL::asset('/assets/img/icons/chat-icon-07.svg') }}" alt=""
                                            class="ms-2 "><i class="feather-x ms-2"></i></li>
                                </ul>
                            </div>
                            <div class="forward-send">
                                <a href="javascript:;" class="btn btn-primary replay-btn me-2"><img
                                        src="{{ URL::asset('/assets/img/icons/replay.svg') }}" class="me-2"
                                        alt="img">Reply</a>
                                <a href="javascript:;" class="btn btn-primary forwrd-btn"><img
                                        src="{{ URL::asset('/assets/img/icons/replay-01.svg') }}" class="me-2"
                                        alt="img">Forward</a>
                                <a href="javascript:;"><img src="{{ URL::asset('/assets/img/icons/printer.svg') }}"
                                        class="ms-2 me-2" alt="img"></a>
                                <a href="javascript:;"><img src="{{ URL::asset('/assets/img/icons/trash.svg') }}"
                                        class="me-2" alt="img"></a>
                            </div>
                        </div>
                        <div class="mailview-content">
                            <div class="mail-view-list">
                                <ul class="nav">
                                    <li><a href="javascript:;"><img alt=""
                                                src="{{ URL::asset('/assets/img/icons/warning.svg') }}"></a></li>
                                    <li><a href="javascript:;"><img alt=""
                                                src="{{ URL::asset('/assets/img/icons/tag-icon-04.svg') }}"></a></li>
                                    <li><a href="javascript:;"><img alt=""
                                                src="{{ URL::asset('/assets/img/icons/inbox.svg') }}"></a>
                                    </li>
                                    <li><a href="javascript:;"><img alt=""
                                                src="{{ URL::asset('/assets/img/icons/folder-icon-05.svg') }}"></a></li>
                                </ul>
                            </div>
                            <div class="mailview-header comman-space-flex">
                                <div class="sender-info comman-flex">
                                    <div class="sender-img">
                                        <img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-01.jpg') }}"
                                            class="rounded-circle me-2">
                                    </div>
                                    <div class="send-user send-user-name">
                                        <h4>Bernardo James <span class="email-market">Marketting</span></h4>
                                        <p><span>From:</span> Markhaysmith@example.com</p>
                                    </div>
                                </div>
                                <div class="mail-reports">
                                    <ul class="nav">
                                        <li><a href="javascript:;" class="ford-angle star-bg"><i
                                                    class="fas fa-star starred"></i></a></li>
                                        <li><a href="javascript:;" class="ford-angle"><img alt=""
                                                    src="{{ URL::asset('/assets/img/icons/forward-icon-01.svg') }}"></a>
                                        </li>
                                        <li><a href="javascript:;" class="ford-angle"><img alt=""
                                                    src="{{ URL::asset('/assets/img/icons/forward-icon-02.svg') }}"></a>
                                        </li>
                                        <li><a href="javascript:;" class="ford-angle"><img alt=""
                                                    src="{{ URL::asset('/assets/img/icons/forward-icon-03.svg') }}"></a>
                                        </li>
                                        <li>
                                            <a href="javascript:;" class="ford-angle" data-bs-toggle="dropdown"
                                                aria-expanded="false" class="add-list-btn">
                                                <i class="feather-more-vertical"></i>
                                            </a>
                                            <div class="dropdown-menu" style="">
                                                <a class="dropdown-item" href="javascript:;"><i
                                                        class="feather-user me-2 text-primary"></i> Profile</a>
                                                <a class="dropdown-item" href="javascript:;"><i
                                                        class="feather-plus-circle me-2 text-success"></i> Archive</a>
                                                <a class="dropdown-item" href="javascript:;"><i
                                                        class="feather-trash-2 me-2 text-danger"></i> Delete</a>
                                                <a class="dropdown-item " href="javascript:;"><i
                                                        class="feather-slash me-2 text-secondary"></i> Block</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="mailview-inner">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                    ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                    ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                                    reprehenderit.</p>
                            </div>
                            <div class="thank-mail">
                                <h5>Thanks</h5>
                                <h4>Mark hay smith</h4>
                            </div>
                            <div class="forward-send">
                                <a href="javascript:;" class="btn btn-primary replay-btn me-2"><img
                                        src="{{ URL::asset('/assets/img/icons/replay.svg') }}" class="me-2"
                                        alt="img">Reply</a>
                                <a href="javascript:;" class="btn btn-primary forwrd-btn"><img
                                        src="{{ URL::asset('/assets/img/icons/replay-01.svg') }}" class="me-2"
                                        alt="img">Forward</a>
                                <a href="javascript:;"><img src="{{ URL::asset('/assets/img/icons/printer.svg') }}"
                                        class="ms-2 me-2" alt="img"></a>
                                <a href="javascript:;"><img src="{{ URL::asset('/assets/img/icons/trash.svg') }}"
                                        class="me-2" alt="img"></a>
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
