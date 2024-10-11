<?php $page = 'uikit'; ?>
@extends('layout.mainlayout')
@section('content')
<div class="page-wrapper">
    <div class="content">
        <!-- Page Header -->
        @component('components.page-header')
        @slot('title')
            Dashboard
        @endslot
        @slot('li_1')
            Uikit
        @endslot
    @endcomponent
        <!-- /Page Header -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card-box">
                    <h4 class="card-title">Default Button</h4>
                    <button type="button" class="btn btn-primary">Primary</button>
                    <button type="button" class="btn btn-secondary">Secondary</button>
                    <button type="button" class="btn btn-success">Success</button>
                    <button type="button" class="btn btn-danger">Danger</button>
                    <button type="button" class="btn btn-warning">Warning</button>
                    <button type="button" class="btn btn-info">Info</button>
                    <button type="button" class="btn btn-light">Light</button>
                    <button type="button" class="btn btn-dark">Dark</button>
                    <button type="button" class="btn btn-link">Link</button>
                    <hr>
                    <h4 class="card-title">Button Sizes</h4>
                    <p>
                        <button type="button" class="btn btn-primary btn-lg">Primary</button>
                        <button type="button" class="btn btn-secondary btn-lg">Secondary</button>
                        <button type="button" class="btn btn-success btn-lg">Success</button>
                        <button type="button" class="btn btn-danger btn-lg">Danger</button>
                        <button type="button" class="btn btn-warning btn-lg">Warning</button>
                        <button type="button" class="btn btn-info btn-lg">Info</button>
                        <button type="button" class="btn btn-light btn-lg">Light</button>
                        <button type="button" class="btn btn-dark btn-lg">Dark</button>
                    </p>
                    <p>
                        <button type="button" class="btn btn-primary">Primary</button>
                        <button type="button" class="btn btn-secondary">Secondary</button>
                        <button type="button" class="btn btn-success">Success</button>
                        <button type="button" class="btn btn-danger">Danger</button>
                        <button type="button" class="btn btn-warning">Warning</button>
                        <button type="button" class="btn btn-info">Info</button>
                        <button type="button" class="btn btn-light">Light</button>
                        <button type="button" class="btn btn-dark">Dark</button>
                    </p>
                    <p>
                        <button type="button" class="btn btn-primary btn-sm">Primary</button>
                        <button type="button" class="btn btn-secondary btn-sm">Secondary</button>
                        <button type="button" class="btn btn-success btn-sm">Success</button>
                        <button type="button" class="btn btn-danger btn-sm">Danger</button>
                        <button type="button" class="btn btn-warning btn-sm">Warning</button>
                        <button type="button" class="btn btn-info btn-sm">Info</button>
                        <button type="button" class="btn btn-light btn-sm">Light</button>
                        <button type="button" class="btn btn-dark btn-sm">Dark</button>
                    </p>
                    <hr>
                    <h4 class="card-title">Button Groups</h4>
                    <br>
                    <div class="btn-toolbar">
                        <div class="btn-group btn-group-lg">
                            <button type="button" class="btn btn-primary">Left</button>
                            <button type="button" class="btn btn-primary">Middle</button>
                            <button type="button" class="btn btn-primary">Right</button>
                        </div>
                    </div>
                    <br>
                    <div class="btn-toolbar">
                        <div class="btn-group">
                            <button type="button" class="btn btn-primary">Left</button>
                            <button type="button" class="btn btn-primary">Middle</button>
                            <button type="button" class="btn btn-primary">Right</button>
                        </div>
                    </div>
                    <br>
                    <div class="btn-toolbar">
                        <div class="btn-group btn-group-sm">
                            <button type="button" class="btn btn-primary">Left</button>
                            <button type="button" class="btn btn-primary">Middle</button>
                            <button type="button" class="btn btn-primary">Right</button>
                        </div>
                    </div>
                </div>
                <div class="card-box">
                    <h4 class="card-title">Alerts</h4>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>Warning!</strong> There was a problem with your <a href="javascript:;" class="alert-link">network connection</a>.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true"> </span>
                        </button>
                    </div>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Error!</strong> A <a href="javascript:;" class="alert-link">problem</a> has been occurred while submitting your data.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true"> </span>
                        </button>
                    </div>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Success!</strong> Your <a href="javascript:;" class="alert-link">message</a> has been sent successfully.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true"> </span>
                        </button>
                    </div>
                    <div class="alert alert-info alert-dismissible fade show" role="alert">
                        <strong>Note!</strong> Please read the <a href="javascript:;" class="alert-link">comments</a> carefully.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true"> </span>
                        </button>
                    </div>
                </div>
                @livewire('ui-dropdown')
                @livewire('ui-progress')
                @livewire('ui-pagination')
            </div>
        </div>
    </div>
    @component('components.notification-box')
        @endcomponent
</div>
@endsection
