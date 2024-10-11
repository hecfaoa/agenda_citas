<?php $page = 'chat'; ?>
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
                    Chat
                @endslot
            @endcomponent
            <!-- /Page Header -->
            <div class="row">
                @livewire('chat-left')
                @livewire('chat-right')
            </div>
        </div>
        @component('components.notification-box')
        @endcomponent
    </div>
@endsection
