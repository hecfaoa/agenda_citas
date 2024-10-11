<?php $page = 'localization-details'; ?>
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
                            <h5 class="card-title">Localization Details</h5>
                        </div>
                        <div class="card-body pt-0">
                            <form action="javascript:;">
                                <div class="settings-form">
                                    <div class="form-group">
                                        <label>Time Zone</label>
                                        @livewire('select-time-zone')
                                    </div>
                                    <div class="form-group">
                                        <label>Date Format</label>
                                        @livewire('select-date-format')
                                    </div>
                                    <div class="form-group">
                                        <label>Time Format</label>
                                        @livewire('select-time-format')
                                    </div>
                                    <div class="form-group">
                                        <label>Currency Symbol</label>
                                        @livewire('select-currency-symbol')
                                    </div>
                                    <div class="form-group mb-0">
                                        <div class="settings-btns">
                                            <button type="submit"
                                                class="border-0 btn btn-primary btn-gradient-primary btn-rounded">Update</button>
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
