<?php $page = 'calendar'; ?>
@extends('layout.mainlayout')
@section('content')
<div class="page-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-sm-8 col-4">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/')}}">Dashboard </a></li>
                    <li class="breadcrumb-item"><i class="feather-chevron-right"></i></li>
                    <li class="breadcrumb-item active">Calendar</li>
                </ul>
            </div>
            <div class="col-sm-4 col-8 text-end m-b-30">
                <a href="javascript:;" class="btn btn-primary btn-rounded" data-bs-toggle="modal" data-bs-target="#add_event"><i class="fa fa-plus"></i> Add Event</a>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card-box mb-0">
                    <div class="row">
                        <div class="col-md-12">
                            <div id="calendar"></div>
                        </div>
                    </div>
                </div>
                <div class="modal fade none-border" id="event-modal">
                    <div class="modal-dialog">
                        <div class="modal-content modal-md">
                            <div class="modal-header">
                                <h4 class="modal-title">Add Event</h4>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>
                            <div class="modal-body"></div>
                            <div class="modal-footer text-center">
                                <button type="button" class="btn btn-primary submit-btn save-event">Create event</button>
                                <button type="button" class="btn btn-danger btn-lg delete-event" data-bs-dismiss="modal">Delete</button>
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