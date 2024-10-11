<?php $page = 'doctors'; ?>
@extends('layout.mainlayout')
@section('content')
    <div class="page-wrapper">
        <div class="content">
            <!-- Page Header -->
            @component('components.page-header')
                @slot('title')
                    Doctors
                @endslot
                @slot('li_1')
                    Doctors List
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
                                    Doctors List
                                @endslot
                                @slot('li_1')
                                    {{ url('add-doctor') }}
                                @endslot
                            @endcomponent --}}
                            <!-- /Table Header -->

                            <div class="table-responsive">
                                <table class="table border-0 custom-table comman-table datatable mb-0">
                                    <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>nombre</th>
                                            <th>especialidad</th>
                                            <th>telefono</th>
                                            <th>correo</th>
                                            <th>acciones </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($Medicos as $doctor)
                                            <tr>
                                                <td>{{ $doctor['id'] }}</td>
                                                <td>{{ $doctor['nombre'] }}</td>
                                                <td>{{ $doctor['especialidad'] }}</td>
                                                <td>{{ $doctor['telefono'] }}</td>
                                                <td>{{ $doctor['correo'] }}</td>
                                                <td class="text-end">
                                                    <div class="dropdown dropdown-action">
                                                        <a href="javascript:;" class="action-icon dropdown-toggle"
                                                            data-bs-toggle="dropdown" aria-expanded="false"><i
                                                                class="fa fa-ellipsis-v"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item"
                                                                href="/doctors/show/{{ $doctor->id }}"><i
                                                                    class="fa-solid fa-pen-to-square m-r-5"></i> Ver</a>
                                                            <a class="dropdown-item"
                                                                href="/doctors/edit/{{ $doctor->id }}"><i
                                                                    class="fa-solid fa-pen-to-square m-r-5"></i> Edit</a>
                                                            <a class="dropdown-item"
                                                                href="/doctors/delete/{{ $doctor->id }}">
                                                                <i class="fa fa-trash-alt m-r-5"></i> Delete</a>
                                                            
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
