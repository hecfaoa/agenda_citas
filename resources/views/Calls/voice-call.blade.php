<?php $page = 'voice-call'; ?>
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
                    Voice Call
                @endslot
            @endcomponent
            <!-- /Page Header -->
            <div class="row">
                @livewire('calls-left')
                @livewire('calls-right')
            </div>
        </div>
        @component('components.notification-box')
        @endcomponent
    </div>
@endsection
