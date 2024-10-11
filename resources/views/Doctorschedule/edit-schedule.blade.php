<?php $page = 'edit-schedule'; ?>
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
                    Edit Schedule
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
                            <form action="/schedule/update/{{ $agenda->id_turno }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-heading">
                                            <h4>Add Schedule</h4>
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-6 col-xl-6">
                                        <div class="form-group local-forms">
                                            <label>Doctor <span class="login-danger">*</span></label>
                                            @livewire('select-edit-doctor',['valor' => $agenda->id_medico])
                                            @error('id_medico')
                                                <span style="color: red">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-xl-4">
                                        <div class="form-group local-forms cal-icon">
                                            <label>Available Days <span class="login-danger">*</span></label>
                                            <select name="dia_semana" class="form-control select">

                                                <option value="0"           {{ $agenda->dia_semana == "0"         ? 'selected' : '' }}> Choose Day</option>
                                                <option value="Lunes"       {{ $agenda->dia_semana == "Lunes"     ? 'selected' : '' }}> Lunes</option>
                                                <option value="Martes"      {{ $agenda->dia_semana == "Martes"    ? 'selected' : '' }}> Martes</option>
                                                <option value="Miercoles"   {{ $agenda->dia_semana == "Miercoles" ? 'selected' : '' }}> Miercoles</option>
                                                <option value="Jueves"      {{ $agenda->dia_semana == "Jueves"    ? 'selected' : '' }}> Jueves</option>
                                                <option value="Viernes"     {{ $agenda->dia_semana == "Viernes"   ? 'selected' : '' }}> Viernes</option>
                                                <option value="Sabado"      {{ $agenda->dia_semana == "Sabado"    ? 'selected' : '' }}> Sabado</option>
                                                <option value="Domingo"     {{ $agenda->dia_semana == "Domingo"   ? 'selected' : '' }}> Domingo</option>

                                            </select>
                                            @error('dia_semana')
                                                <span style="color: red">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-xl-4">
                                        <div class="form-group local-forms">
                                            <label>From <span class="login-danger">*</span></label>
                                            <div class="time-icon">
                                                <input type="text" name="hora_inicio" class="form-control"
                                                 value="{{ old('hora_inicio') ? old('hora_inicio') : $agenda->hora_inicio }}"
                                                    id="datetimepicker3">
                                            </div>
                                            @error('hora_inicio')
                                                <span style="color: red">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-xl-4">
                                        <div class="form-group local-forms">
                                            <label>To <span class="login-danger">*</span></label>
                                            <div class="time-icon">
                                                <input type="text" name="hora_fin" class="form-control"
                                                value="{{ old('hora_fin') ? old('hora_fin') : $agenda->hora_fin }}"
                                                    id="datetimepicker4">
                                            </div>
                                            @error('hora_fin')
                                                <span style="color: red">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="doctor-submit text-end">
                                            <button type="submit" class="btn btn-primary submit-form me-2">Update
                                                Schedule</button>
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
