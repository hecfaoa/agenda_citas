<?php $page = 'tables-basic'; ?>
@extends('layout.mainlayout')
@section('content')
    <div class="page-wrapper">
        <div class="content">
            <!-- Page Header -->
            @component('components.page-header')
                @slot('title')
                    Dashboard
                @endslot
                @slot('li_1')
                    Basic Tables
                @endslot
            @endcomponent
            <!-- /Page Header -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="card-box">
                        <div class="card-block">
                            <h4 class="card-title">Basic Table</h4>
                            <div class="table-responsive">
                                <table class="table mb-0">
                                    <thead>
                                        <tr>
                                            <th>Firstname</th>
                                            <th>Lastname</th>
                                            <th>Email</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $json = file_get_contents(public_path('../public/assets/json/tables-basic.json'));
                                            $basics = json_decode($json, true);
                                        @endphp
                                        @foreach ($basics as $basic)
                                            <tr>
                                                <td>{{ $basic['Firstname'] }}</td>
                                                <td>{{ $basic['Lastname'] }}</td>
                                                <td>{{ $basic['Email'] }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card-box">
                        <div class="card-block">
                            <h5 class="text-bold card-title">Striped Rows</h5>
                            <div class="table-responsive">
                                <table class="table table-striped mb-0">
                                    <thead>
                                        <tr>
                                            <th>Firstname</th>
                                            <th>Lastname</th>
                                            <th>Email</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $json = file_get_contents(public_path('../public/assets/json/tables-basic.json'));
                                            $basics = json_decode($json, true);
                                        @endphp
                                        @foreach ($basics as $basic)
                                            <tr>
                                                <td>{{ $basic['Firstname'] }}</td>
                                                <td>{{ $basic['Lastname'] }}</td>
                                                <td>{{ $basic['Email'] }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @livewire('bordered-table')
            @livewire('contextual-class-table')
        </div>
        @component('components.notification-box')
        @endcomponent
    </div>
@endsection
