<?php $page = 'taxes'; ?>
@extends('layout.mainlayout')
@section('content')
    <div class="page-wrapper">
        <div class="content">
            <!-- Page Header -->
            @component('components.page-header')
                @slot('title')
                    Accounts
                @endslot
                @slot('li_1')
                    Taxes
                @endslot
            @endcomponent
            <!-- /Page Header -->

            <div class="row">
                <div class="col-sm-12">
                    <div class="card card-table show-entire">
                        <div class="card-body">
                            <!-- Table Header -->
                            @component('components.table-header')
                                @slot('title')
                                    Taxes
                                @endslot
                                @slot('li_1')
                                    {{ url('add-tax') }}
                                @endslot
                            @endcomponent
                            <!-- /Table Header -->
                            <div class="table-responsive">
                                <table class="table border-0 custom-table comman-table datatable mb-0">
                                    <thead>
                                        <tr>
                                            <th>
                                                <div class="form-check check-tables">
                                                    <input class="form-check-input" type="checkbox" value="something">#
                                                </div>
                                            </th>
                                            <th>Tax Name</th>
                                            <th>Tax Percentage</th>
                                            <th>Status</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $json = file_get_contents(public_path('../public/assets/json/taxes.json'));
                                            $taxes = json_decode($json, true);
                                        @endphp
                                        @foreach ($taxes as $tax)
                                            <tr>
                                                <td>
                                                    <div class="form-check check-tables">
                                                        <input class="form-check-input" type="checkbox"
                                                            value="something">{{ $tax['Id'] }}
                                                    </div>
                                                </td>
                                                <td>{{ $tax['TaxName'] }}</td>
                                                <td>{{ $tax['TaxPercentage'] }}</td>
                                                <td>
                                                    <div class="dropdown action-label">
                                                        <a class="{{ $tax['Class'] }} dropdown-toggle" href="javascript:;"
                                                            data-bs-toggle="dropdown" aria-expanded="false">
                                                            {{ $tax['Status'] }}
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-end status-staff">
                                                            <a class="dropdown-item" href="javascript:;">Active</a>
                                                            <a class="dropdown-item" href="javascript:;">In Active</a>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-end">
                                                    <div class="dropdown dropdown-action">
                                                        <a href="javascript:;" class="action-icon dropdown-toggle"
                                                            data-bs-toggle="dropdown" aria-expanded="false"><i
                                                                class="fa fa-ellipsis-v"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item" href="{{ url('edit-tax') }}"><i
                                                                    class="fa-solid fa-pen-to-square m-r-5"></i> Edit</a>
                                                            <a class="dropdown-item" href="javascript:;" data-bs-toggle="modal"
                                                                data-bs-target="#delete_patient"><i
                                                                    class="fa fa-trash-alt m-r-5"></i> Delete</a>
                                                        </div>
                                                    </div>
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
        </div>
        @component('components.notification-box')
        @endcomponent
    </div>
@endsection
