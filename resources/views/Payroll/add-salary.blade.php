<?php $page = 'add-salary'; ?>
@extends('layout.mainlayout')
@section('content')
    <div class="page-wrapper">
        <div class="content">
            <!-- Page Header -->
            @component('components.page-header')
                @slot('title')
                    Payroll
                @endslot
                @slot('li_1')
                    Add Employee Salary
                @endslot
            @endcomponent
            <!-- /Page Header -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="javascript:;">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-heading">
                                            <h4>Add Employee Salary</h4>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-xl-6">
                                        <div class="form-group local-forms">
                                            <label>Select Staff </label>
                                            @livewire('select-salary')
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-xl-6">
                                        <div class="form-group local-forms">
                                            <label>Net Salary </label>
                                            <input class="form-control" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-md-6 col-xl-6">
                                        <div class="pay-head-roll">
                                            <h5>Earnings</h5>
                                        </div>
                                        <div class="form-group local-forms">
                                            <label>Basic Salary </label>
                                            <input class="form-control" type="text">
                                        </div>
                                        <div class="form-group local-forms">
                                            <label>DA (40%) </label>
                                            <input class="form-control" type="text">
                                        </div>
                                        <div class="form-group local-forms">
                                            <label>HRA (15%) </label>
                                            <input class="form-control" type="text">
                                        </div>
                                        <div class="form-group local-forms">
                                            <label>Conveyance </label>
                                            <input class="form-control" type="text">
                                        </div>
                                        <div class="form-group local-forms">
                                            <label>Medical Allowance </label>
                                            <input class="form-control" type="text">
                                        </div>
                                        <div class="form-group local-forms">
                                            <label>Others</label>
                                            <input class="form-control" type="text">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-xl-6">
                                        <div class="pay-head-roll">
                                            <h5>Deductions</h5>
                                        </div>
                                        <div class="form-group local-forms">
                                            <label>TDS </label>
                                            <input class="form-control" type="text">
                                        </div>
                                        <div class="form-group local-forms">
                                            <label>ESI </label>
                                            <input class="form-control" type="text">
                                        </div>
                                        <div class="form-group local-forms">
                                            <label>PF </label>
                                            <input class="form-control" type="text">
                                        </div>
                                        <div class="form-group local-forms">
                                            <label>Prof.Tax </label>
                                            <input class="form-control" type="text">
                                        </div>
                                        <div class="form-group local-forms">
                                            <label>Labour Welfare </label>
                                            <input class="form-control" type="text">
                                        </div>
                                        <div class="form-group local-forms">
                                            <label>Others</label>
                                            <input class="form-control" type="text">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="doctor-submit text-end">
                                            <button type="submit" class="btn btn-primary submit-form me-2">Submit</button>
                                            <button type="submit" class="btn btn-primary cancel-form">Cancel</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @component('components.notification-box')
        @endcomponent
    </div>
@endsection
