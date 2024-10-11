<?php $page = 'doctor-setting'; ?>
@extends('layout.mainlayout')
@section('content')
    <div class="page-wrapper">
        <div class="content">
            <!-- Page Header -->
            @component('components.page-header')
                @slot('title')
                    Doctors
                @endslot
                @slot('li_1')
                    Doctors Profile
                @endslot
            @endcomponent
            <!-- /Page Header -->
            <div class="row">
                <div class="col-sm-12">
                    @livewire('doctor-head')
                    <div class="row">
                        @livewire('doctor-setting-about')
                        @livewire('doctor-setting-details')
                    </div>
                </div>
            </div>
        </div>
    </div>
    @component('components.notification-box')
    @endcomponent
    </div>
@endsection
