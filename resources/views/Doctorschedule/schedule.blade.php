<?php $page = 'schedule'; ?>
@extends('layout.mainlayout')
@section('content')
    <div class="page-wrapper">
        <div class="content">
            <!-- Page Header -->
            @component('components.page-header')
                @slot('title')
                    Doctor Shedule
                @endslot
                @slot('li_1')
                    Schedule List
                @endslot
            @endcomponent
            <!-- /Page Header -->
            @if (session('success'))
                <div class="alert alert-info alert-dismissible fade show" role="alert">
                    <strong>Success!</strong> {{ session('success') }}.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            @if (session('fail'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Fail!</strong> {{ session('fail') }}.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <div class="row">
                <div class="col-sm-12">
                    <div class="card card-table show-entire">
                        <div class="card-body">
                            <!-- Table Header -->
                            {{-- @component('components.table-header')
                                @slot('title')
                                    Schedule List
                                @endslot
                                @slot('li_1')
                                    {{ url('add-schedule') }}
                                @endslot
                            @endcomponent --}}
                            <!-- /Table Header -->
                            <div class="table-responsive">
                                <table class="table border-0 custom-table comman-table datatable mb-0">
                                    <thead>
                                        <tr>
                                            
                                            <th>Doctor Name</th>
                                            <th>Department</th>
                                            <th>Available Days</th>
                                            <th>Available Time</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($agenda as $schedule)
                                            <tr>
                                               
                                                <td >
                                                    <a  href="/schedules/show/{{ $schedule->id_medico }}"><i
                                                        class="fa-solid fa-pen-to-square m-r-5"></i> {{$schedule->medico->nombre }}</a>
                                                </td>
                                                <td>{{$schedule->medico->especialidad }}</td>
                                                <td>{{$schedule->dia_semana }}</td>
                                                <td>{{$schedule->hora_inicio }} - {{$schedule->hora_fin }}</td>

                                                <td class="text-end">
                                                    <div class="dropdown dropdown-action">
                                                        <a href="javascript:;" class="action-icon dropdown-toggle"
                                                            data-bs-toggle="dropdown" aria-expanded="false"><i
                                                                class="fa fa-ellipsis-v"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item" href="/schedule/edit/{{ $schedule->id_turno }}"><i
                                                                    class="fa-solid fa-pen-to-square m-r-5"></i> Edit</a>
                                                            <a class="dropdown-item" href="javascript:;"
                                                                data-bs-toggle="modal" data-bs-target="#delete_patient"><i
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
