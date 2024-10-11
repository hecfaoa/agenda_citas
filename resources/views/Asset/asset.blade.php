<?php $page = 'asset'; ?>
@extends('layout.mainlayout')
@section('content')
    <div class="page-wrapper">
        <div class="content">

            <!-- Page Header -->
            @component('components.page-header')
                @slot('title')
                    Assets
                @endslot
                @slot('li_1')
                    Assets List
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
                                    Assets List
                                @endslot
                                @slot('li_1')
                                    {{ url('add-asset') }}
                                @endslot
                            @endcomponent
                            <!-- /Table Header -->
                            <div class="staff-search-table">
                                <form action="javascript:;">
                                    <div class="row">
                                        <div class="col-12 col-md-6 col-xl-3">
                                            <div class="form-group local-forms">
                                                <label>Employee Name </label>
                                                <input class="form-control" type="text">
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6 col-xl-3">
                                            <div class="form-group local-forms cal-icon">
                                                <label>From </label>
                                                <input class="form-control datetimepicker" type="text">
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6 col-xl-3">
                                            <div class="form-group local-forms cal-icon">
                                                <label>To </label>
                                                <input class="form-control datetimepicker" type="text">
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6 col-xl-3">
                                            <div class="doctor-submit">
                                                <button type="submit"
                                                    class="btn btn-primary submit-list-form me-2">Search</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <div class="table-responsive">
                                <table class="table border-0 custom-table comman-table datatable mb-0">
                                    <thead>
                                        <tr>
                                            <th>
                                                <div class="form-check check-tables">
                                                    <input class="form-check-input" type="checkbox" value="something">
                                                </div>
                                            </th>
                                            <th>Asset Id</th>
                                            <th>Asset User</th>
                                            <th>Asset Name</th>
                                            <th>Purchase Date</th>
                                            <th>Warrenty</th>
                                            <th>Warrenty End</th>
                                            <th>Amount</th>
                                            <th>Status</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $json = file_get_contents(public_path('../public/assets/json/assets1.json'));
                                            $appointments = json_decode($json, true);
                                        @endphp
                                        @foreach ($appointments as $appointment)
                                            <tr>
                                                <td>
                                                    <div class="form-check check-tables">
                                                        <input class="form-check-input" type="checkbox" value="something">
                                                    </div>
                                                </td>
                                                <td>{{ $appointment['AssetId'] }}</td>
                                                <td class="profile-image"><a href="{{ url('profile') }}"><img width="28"
                                                            height="28"
                                                            src="{{ URL::asset('/assets/img/profiles/' . $appointment['Image']) }}"
                                                            class="rounded-circle m-r-5" alt="">
                                                        {{ $appointment['AssetUser'] }}</a></td>
                                                <td>{{ $appointment['AssetName'] }} </td>
                                                <td>{{ $appointment['PurchaseDate'] }}</td>
                                                <td>{{ $appointment['Warrenty'] }}</td>
                                                <td>{{ $appointment['WarrentyEnd'] }}</td>
                                                <td>{{ $appointment['Amount'] }}</td>
                                                <td>
                                                    <div class="dropdown action-label">
                                                        <a class="custom-badge status-orange dropdown-toggle" href="javascript:;"
                                                            data-bs-toggle="dropdown" aria-expanded="false">
                                                            Pending
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-end status-staff">
                                                            <a class="dropdown-item" href="javascript:;">Pending</a>
                                                            <a class="dropdown-item" href="javascript:;">Approved</a>
                                                            <a class="dropdown-item" href="javascript:;">Returnd</a>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-end">
                                                    <div class="dropdown dropdown-action">
                                                        <a href="javascript:;" class="action-icon dropdown-toggle"
                                                            data-bs-toggle="dropdown" aria-expanded="false"><i
                                                                class="fa fa-ellipsis-v"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item" href="{{ url('edit-asset') }}"><i
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
