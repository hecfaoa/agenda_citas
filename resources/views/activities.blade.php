<?php $page = 'activities'; ?>
@extends('layout.mainlayout')
@section('content')
    <div class="page-wrapper">
        <div class="content">
            <!-- Page Header -->
            @component('components.page-header')
                @slot('title')
                    Activites
                @endslot
                @slot('li_1')
                    User Activity
                @endslot
            @endcomponent
            <!-- /Page Header -->
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="activity">
                                <div class="activity-box">
                                    <ul class="activity-list">
                                        @php
                                            $json = file_get_contents(public_path('../public/assets/json/activities.json'));
                                            $activities = json_decode($json, true);
                                        @endphp
                                        @foreach ($activities as $activity)
                                            <li>
                                                <div class="activity-user">
                                                    <a href="{{ url('profile') }}" title="Lesley Grauer"
                                                        data-bs-toggle="tooltip" class="avatar">
                                                        <img alt="Lesley Grauer"
                                                            src="{{ URL::asset('/assets/img/' . $activity['Image']) }}"
                                                            class="img-fluid rounded-circle">
                                                    </a>
                                                </div>
                                                <div class="activity-content timeline-group-blk">
                                                    <div class="timeline-group flex-shrink-0">
                                                        <h4>{{ $activity['Date'] }}</h4>
                                                        <span class="time">{{ $activity['Time'] }}</span>
                                                    </div>
                                                    <div class="comman-activitys flex-grow-1">
                                                        <h3>{{ $activity['Name'] }} <span> {{ $activity['Content'] }}</span>
                                                        </h3>
                                                        <p>{{ $activity['Description'] }}</p>
                                                        @if ($activity['Name'] === 'Bernardo James')
                                                            <ul class="nav activity-sub-list mt-2">
                                                                <li><img class="img-fluid"
                                                                        src="{{ URL::asset('/assets/img/activity-01.jpg') }}"
                                                                        alt=""></li>
                                                                <li><img class="img-fluid"
                                                                        src="{{ URL::asset('/assets/img/activity-02.jpg') }}"
                                                                        alt=""></li>
                                                                <li><img class="img-fluid"
                                                                        src="{{ URL::asset('/assets/img/activity-03.jpg') }}"
                                                                        alt=""></li>
                                                            </ul>
                                                        @elseif($activity['Name'] === 'Dr. Linda Carpenter')
                                                            <div class="activity-maps mt-2">
                                                                <iframe
                                                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3304.686401249513!2d-118.29111468533449!3d34.077552423844466!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2c75d59983353%3A0x14ab68d941678167!2sPATH!5e0!3m2!1sen!2sin!4v1669811489573!5m2!1sen!2sin"></iframe>
                                                            </div>
                                                        @elseif($activity['Name'] === 'Rio Williams')
                                                            <ul class="latest-posts latest-posts-act mt-2">
                                                                <li>
                                                                    <div class="post-thumb">
                                                                        <a href="javascript:;">
                                                                            <img class="img-fluid"
                                                                                src="{{ URL::asset('/assets/img/blog/blog-8.jpg') }}"
                                                                                alt="">
                                                                        </a>
                                                                    </div>
                                                                    <div class="post-info">
                                                                        <div class="date-posts">
                                                                            <h5>Safety</h5>
                                                                            <span class="ms-2">10 Oct 2023</span>
                                                                        </div>
                                                                        <h4>
                                                                            <a href="javascript:;">Keep Hand Sanitizers Away
                                                                                from
                                                                                Young Children</a>
                                                                        </h4>
                                                                        <p> Read more in 8 Minutes<i
                                                                                class="fa fa-long-arrow-right ms-2"></i></p>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        @endif
                                                    </div>
                                                </div>
                                            </li>
                                        @endforeach
                                    </ul>
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
