<?php $page = 'blog'; ?>
@extends('layout.mainlayout')
@section('content')
    <div class="page-wrapper">
        <div class="content">
            <!-- Page Header -->
            @component('components.page-header')
                @slot('title')
                    Blog
                @endslot
                @slot('li_1')
                    Blogs
                @endslot
            @endcomponent
            <!-- /Page Header -->
            <div class="row">
                @php
                    $json = file_get_contents(public_path('../public/assets/json/blog.json'));
                    $blogs = json_decode($json, true);
                @endphp
                @foreach ($blogs as $blog)
                    <div class="col-sm-6 col-md-6 col-xl-4">
                        <div class="blog grid-blog">
                            <div class="blog-image">
                                <a href="{{ url('blog-details') }}"><img class="img-fluid"
                                        src="{{ URL::asset('/assets/img/blog/' . $blog['Imagesrc']) }}" alt=""></a>
                                <div class="blog-views">
                                    <h5>{{ $blog['Title'] }}</h5>
                                </div>
                                <ul class="nav view-blog-list blog-views">
                                    <li><i class="feather-message-square me-1"></i>{{ $blog['Chat'] }}</li>
                                    <li><i class="feather-eye me-1"></i>{{ $blog['View'] }}</li>
                                </ul>
                            </div>
                            <div class="blog-content">
                                <div class="blog-grp-blk">
                                    <div class="blog-img-blk">
                                        <a href="{{ url('profile') }}"><img class="img-fluid"
                                                src="{{ URL::asset('/assets/img/profiles/' . $blog['Avatar']) }}"
                                                alt=""></a>
                                        <div class="content-blk-blog ms-2">
                                            <h4><a href="{{ url('profile') }}">{{ $blog['Name'] }}</a></h4>
                                            <h5>{{ $blog['Work'] }}</h5>
                                        </div>
                                    </div>
                                    <span><i class="feather-calendar me-1"></i>{{ $blog['Date'] }}</span>
                                </div>
                                <h3 class="blog-title"><a href="{{ url('blog-details') }}">{{ $blog['Blog'] }}</a></h3>
                                <p>{{ $blog['Content'] }}</p>
                                <a href="{{ url('blog-details') }}" class="read-more d-flex"> {{ $blog['Next'] }}<i
                                        class="fa fa-long-arrow-right ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        @component('components.notification-box')
        @endcomponent
    </div>
@endsection
