<?php $page = 'patient-setting'; ?>
@extends('layout.mainlayout')
@section('content')
    <div class="page-wrapper">
        <div class="content">
            <!-- Page Header -->
            @component('components.page-header')
                @slot('title')
                    Patients
                @endslot
                @slot('li_1')
                    Patient Profile
                @endslot
            @endcomponent
            <!-- /Page Header -->
            <div class="row">
                <div class="col-sm-12">
                    @livewire('patient-head')
                    <div class="row">
                        @livewire('patient-about')
                        @livewire('patient-details')
                    </div>
                </div>
            </div>
        </div>
    </div>
    @component('components.notification-box')
    @endcomponent
    </div>
@endsection
