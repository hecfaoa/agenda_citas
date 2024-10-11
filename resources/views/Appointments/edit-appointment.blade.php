<?php $page = 'edit-appointment'; ?>
@extends('layout.mainlayout')
@section('content')
    <div class="page-wrapper">
        <div class="content">
            <!-- Page Header -->
            @component('components.page-header')
                @slot('title')
                    Appointment
                @endslot
                @slot('li_1')
                    Edit Appointment
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
                    <div class="card">
                        <div class="card-body">
                            <form action="/appointments/update/{{ $cita[0]->id }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-heading">
                                            <h4>Appointment Details</h4>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-xl-6">
                                        <div class="form-group local-forms">
                                            <select name="patientSelect" class="form-control select">
                                                @foreach ($pacientes as $option)
                                                    <option value="{{ $option->id }}"
                                                        {{ $cita[0]->id_paciente == $option->id ? 'selected' : '' }}>
                                                        {{ $option->apellido }} {{ $option->nombre }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-xl-6">
                                        <div class="form-group local-forms">
                                            <select name="doctorSelect" class="form-control select">
                                                @foreach ($medicos as $option)
                                                    <option value="{{ $option->id }}"
                                                        {{ $cita[0]->agendamedica->id_medico == $option->id ? 'selected' : '' }}>
                                                        {{ $option->especialidad }}
                                                        {{ $option->nombre }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-xl-4">
                                        <div class="form-group local-forms cal-icon">
                                            <label>Date of Appointment <span class="login-danger">*</span></label>
                                            <input name=fecha class="form-control datetimepicker" type="text"
                                                value="{{ old('fecha') ? old('fecha') : $formattedDate }}">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-xl-4">
                                        <div class="form-group local-forms">
                                            <label>Hour <span class="login-danger">*</span></label>
                                            <div class="time-icon">
                                                <input name="hora" type="text" class="form-control"
                                                    value="{{ old('hora') ? old('hora') : $cita[0]->hora }}"
                                                    id="datetimepicker3">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-xl-4">
                                        <div class="form-group local-forms">
                                            <select name="estado" class="form-control select">
                                                @foreach ($estados as $option)
                                                    <option value="{{ $option }}"
                                                        {{ $cita[0]->estado == $option ? 'selected' : '' }}>
                                                         {{ $option}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="col-12 col-md-6 col-xl-6">
                                        <div class="form-group local-forms">
                                            <label>Consulting Agenda</label>
                                            {@livewire('select-agenda')
                                        </div>
                                    </div> --}}
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
        @component('components.notification-box')
        @endcomponent
    </div>
@endsection
