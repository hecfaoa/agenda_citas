<?php $page = 'blog-details'; ?>
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
                    View Blog
                @endslot
            @endcomponent
            <!-- /Page Header -->
            <div class="row">
                @livewire('blog-content')
                <aside class="col-md-4">
                    <div class="widget post-widget">
                        <div class="relat-head">
                            <h5>Related Posts</h5>
                            <a href="javascript:;">Show All</a>
                        </div>
                        <ul class="latest-posts">
                            @php
                                $json = file_get_contents(public_path('../public/assets/json/blog-post.json'));
                                $blogs = json_decode($json, true);
                            @endphp
                            @foreach ($blogs as $blog)
                                <li>
                                    <div class="post-thumb">
                                        <a href="{{ url('blog-details') }}">
                                            <img class="img-fluid"
                                                src="{{ URL::asset('/assets/img/blog/' . $blog['Imagesrc']) }}"
                                                alt="">
                                        </a>
                                    </div>
                                    <div class="post-info">
                                        <div class="date-posts">
                                            <h5>{{ $blog['Title'] }}</h5>
                                            <span class="ms-2">{{ $blog['Date'] }}</span>
                                        </div>
                                        <h4>
                                            <a href="{{ url('blog-details') }}">{{ $blog['Blog'] }}</a>
                                        </h4>
                                        <p> {{ $blog['Next'] }}<i class="fa fa-long-arrow-right ms-2"></i></p>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="widget tags-widget">
                        <div class="relat-head">
                            <h5>Tags</h5>
                        </div>
                        <ul class="tags">
                            <li><a href="#." class="tag"># Endodontics (10)</a></li>
                            <li><a href="#." class="tag"># Endodontics (15)</a></li>
                            <li><a href="#." class="tag"># Neurology (70)</a></li>
                            <li><a href="#." class="tag"># Insurance (16)</a></li>
                            <li><a href="#." class="tag"># Dental (60)</a></li>
                            <li><a href="#." class="tag"># Neurology (70)</a></li>
                            <li><a href="#." class="tag"># Diabetes (10)</a></li>
                            <li><a href="#." class="tag"># Dermotology (15)</a></li>
                            <li><a href="#." class="tag"># Stress (25)</a></li>
                        </ul>
                    </div>
                    <div class="widget post-widget">
                        <div class="relat-head">
                            <h5>Most Reads</h5>
                            <a href="javascript:;">Show All</a>
                        </div>
                        <ul class="latest-posts">
                            <li>
                                <div class="post-thumb">
                                    <a href="{{ url('blog-details') }}">
                                        <img class="img-fluid" src="{{ URL::asset('/assets/img/blog/blog-11.jpg') }}"
                                            alt="">
                                    </a>
                                </div>
                                <div class="post-info">
                                    <div class="date-posts">
                                        <h5>Health</h5>
                                        <span class="ms-2">05 Sep 2023</span>
                                    </div>
                                    <h4>
                                        <a href="{{ url('blog-details') }}">Hydration or Moisturization – What to do this
                                            Winter?</a>
                                    </h4>
                                    <p> Read more in 10 Minutes<i class="fa fa-long-arrow-right ms-2"></i></p>
                                </div>
                            </li>
                            <li>
                                <div class="post-thumb">
                                    <a href="{{ url('blog-details') }}">
                                        <img class="img-fluid" src="{{ URL::asset('/assets/img/blog/blog-12.jpg') }}"
                                            alt="">
                                    </a>
                                </div>
                                <div class="post-info">
                                    <div class="date-posts">
                                        <h5>Ophthalmology</h5>
                                        <span class="ms-2">05 Sep 2023</span>
                                    </div>
                                    <h4>
                                        <a href="{{ url('blog-details') }}">Hair Loss – Causes, Treatment and
                                            Preventions</a>
                                    </h4>
                                    <p> Read more in 5 Minutes<i class="fa fa-long-arrow-right ms-2"></i></p>
                                </div>
                            </li>
                            <li>
                                <div class="post-thumb">
                                    <a href="{{ url('blog-details') }}">
                                        <img class="img-fluid" src="{{ URL::asset('/assets/img/blog/blog-13.jpg') }}"
                                            alt="">
                                    </a>
                                </div>
                                <div class="post-info">
                                    <div class="date-posts">
                                        <h5>Safety</h5>
                                        <span class="ms-2">05 Sep 2023</span>
                                    </div>
                                    <h4>
                                        <a href="{{ url('blog-details') }}">Simple Changes That Lowered My Mom's Blood
                                            Pressure</a>
                                    </h4>
                                    <p> Read more in 4 Minutes<i class="fa fa-long-arrow-right ms-2"></i></p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="widget category-widget">
                        <div class="relat-head mb-0">
                            <h5> Categories</h5>
                        </div>
                        <ul class="categories">
                            <li><a href="#."><img src="{{ URL::asset('/assets/img/icons/tag.svg') }}" class="me-1"
                                        alt="">Hydration or Moisturization (10)</a></li>
                            <li><a href="#."><img src="{{ URL::asset('/assets/img/icons/tag.svg') }}" class="me-1"
                                        alt="">Ophthalmology (50)</a></li>
                            <li><a href="#."><img src="{{ URL::asset('/assets/img/icons/tag.svg') }}" class="me-1"
                                        alt="">Blood Pressure (24)</a></li>
                            <li><a href="#."><img src="{{ URL::asset('/assets/img/icons/tag.svg') }}" class="me-1"
                                        alt="">Corona Virus (32)</a></li>
                            <li><a href="#."><img src="{{ URL::asset('/assets/img/icons/tag.svg') }}" class="me-1"
                                        alt="">Dental (15)</a></li>
                        </ul>
                    </div>
                </aside>
                <div class="col-md-12">
                    <div class="widget new-comment clearfix">
                        <h3>Leave a Comment</h3>
                        <form action="javascript:;">
                            <div class="row">
                                <div class="col-12 col-md-6 col-xl-6">
                                    <div class="form-group local-forms">
                                        <label>Name <span class="login-danger">*</span></label>
                                        <input class="form-control" type="text" placeholder="Enter Name">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-xl-6">
                                    <div class="form-group local-forms">
                                        <label>Email<span class="login-danger">*</span></label>
                                        <input class="form-control" type="text" placeholder="Enter Email">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12">
                                    <div class="form-group local-forms">
                                        <label>Comments <span class="login-danger">*</span></label>
                                        <textarea class="form-control" rows="3" cols="30"></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="remember-me">
                                        <label class="custom_check mr-2 mb-0 d-inline-flex remember-me"> Save my name,
                                            email, and website in this browser for the next time I comment.
                                            <input type="checkbox" name="radio" checked>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="doctor-submit text-end">
                                        <button type="submit" class="btn btn-primary submit-form me-2">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @component('components.notification-box')
        @endcomponent
    </div>
@endsection
