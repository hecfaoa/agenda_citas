<?php $page = 'video-call'; ?>
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
                    Video Call
                @endslot
            @endcomponent
            <!-- /Page Header -->
            <div class="row">
                @livewire('video-call-left')
                @livewire('video-call-right')
            </div>
        </div>
        @component('components.notification-box')
        @endcomponent
    </div>
@endsection
