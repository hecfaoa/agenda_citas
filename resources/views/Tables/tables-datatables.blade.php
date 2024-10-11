<?php $page = 'tables-datatables'; ?>
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
                    Data Tables
                @endslot
            @endcomponent
            <!-- /Page Header -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="card-box">
                        <div class="card-block">
                            <h6 class="card-title text-bold">Default Datatable</h6>
                            <p class="content-group">
                                This is the most basic example of the datatables with zero configuration. Use the
                                <code>.datatable</code> class to initialize datatables.
                            </p>
                            <div class="table-responsive">
                                <table class="datatable table table-stripped ">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>Salary</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $json = file_get_contents(public_path('../public/assets/json/tables-datatables.json'));
                                            $datatables = json_decode($json, true);
                                        @endphp
                                        @foreach ($datatables as $datatables)
                                            <tr>
                                                <td>{{ $datatables['Name'] }}</td>
                                                <td>{{ $datatables['Position'] }}</td>
                                                <td>{{ $datatables['Office'] }}</td>
                                                <td>{{ $datatables['Age'] }}</td>
                                                <td>{{ $datatables['Startdate'] }}</td>
                                                <td>{{ $datatables['Salary'] }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
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
