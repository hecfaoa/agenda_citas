<?php $page = 'inbox'; ?>
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
                    Inbox
                @endslot
            @endcomponent
            <!-- /Page Header -->
            <div class="row">
                @livewire('inbox-sidebar')
                <div class="col-xl-8">
                    <div class="card chat-box mb-2">
                        <div class=" chat-search-group ">
                            <div class="chat-user-group mb-0 d-flex align-items-center">
                                <div class="top-check me-3">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input">
                                    </div>
                                </div>
                                <div class="top-inbox-blk comman-flex me-3">
                                    <a href="javascript:;" data-bs-toggle="dropdown" aria-expanded="false" class="">
                                        <i class="feather-more-vertical"></i>
                                    </a>
                                    <div class="dropdown-menu" style="">
                                        <a class="dropdown-item" href="javascript:;"> Reply</a>
                                        <a class="dropdown-item" href="javascript:;"> Forward</a>
                                        <a class="dropdown-item" href="javascript:;"> Archived</a>
                                        <a class="dropdown-item " href="javascript:;"> Mark as Read</a>
                                        <a class="dropdown-item " href="javascript:;"> Mark as Unread</a>
                                        <a class="dropdown-item " href="javascript:;"> Delete</a>
                                    </div>
                                </div>
                                <div class="top-liv-search top-chat-search top-action-search">
                                    <form action="javascript:;">
                                        <div class="chat-search mb-0">
                                            <div class="form-group me-2 mb-0">
                                                <input type="text" class="form-control" placeholder="Search here">
                                                <a class="btn"><img
                                                        src="{{ URL::asset('/assets/img/icons/search-normal.svg') }}"
                                                        alt=""></a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="top-action-right">
                                <ul class="nav">
                                    <li><a href="javascript:;"><img
                                                src="{{ URL::asset('/assets/img/icons/refresh-icon.svg') }}"
                                                alt="img"></a></li>
                                    <li><a href="javascript:;"><img
                                                src="{{ URL::asset('/assets/img/icons/tag-icon-04.svg') }}"
                                                alt="img"></a></li>
                                    <li><a href="javascript:;"><img src="{{ URL::asset('/assets/img/icons/inbox.svg') }}"
                                                alt="img"></a></li>
                                    <li><a href="javascript:;"><img
                                                src="{{ URL::asset('/assets/img/icons/folder-icon-05.svg') }}"
                                                alt="img"></a></li>
                                    <li><a href="javascript:;"><img src="{{ URL::asset('/assets/img/icons/trash.svg') }}"
                                                alt="img"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="email-content">
                        <div class="table-responsive">
                            <table class="table table-inbox table-hover">
                                <tbody>
                                    @php
                                        $json = file_get_contents(public_path('../public/assets/json/inbox.json'));
                                        $inbox = json_decode($json, true);
                                    @endphp
                                    @foreach ($inbox as $item)
                                        <tr class="{{ $item['TableClass'] }}" data-href="{{ url('mail-view') }}">
                                            <td>
                                                <div class="top-check ">
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                @if ($item['Job'] === 'Work' || $item['Job'] === 'Bills')
                                                    <span class="mail-important"><img
                                                            src="{{ URL::asset('/assets/img/icons/star-empty.svg') }}"
                                                            alt="img"></span>
                                                @else
                                                    <span class="mail-important"><i class="fas fa-star starred"></i></span>
                                                @endif
                                            </td>
                                            <td class="name">
                                                <div class="email-img-blk">
                                                    <div class="email-img">
                                                        <img src="{{ URL::asset('/assets/img/profiles/' . $item['Image']) }}"
                                                            alt="img">
                                                    </div>
                                                    <div class="send-user">
                                                        <h4>{{ $item['Name'] }} <span
                                                                class="{{ $item['Class'] }}">{{ $item['Job'] }}</span>
                                                        </h4>
                                                        <p>{{ $item['Content'] }}</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td></td>
                                            <td class="mail-date">
                                                @if ($item['Time'] === '13:14')
                                                    <img src="{{ URL::asset('/assets/img/icons/clip.svg') }}"
                                                        class="me-2" alt="img">{{ $item['Time'] }}
                                                @else
                                                    {{ $item['Time'] }}
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @component('components.notification-box')
        @endcomponent
    </div>
@endsection
