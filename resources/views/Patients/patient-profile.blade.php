<?php $page = 'patient-profile'; ?>
@extends('layout.mainlayout')
@section('content')
    <div class="page-wrapper">
        <div class="content">
            <div class="row">
                <div class="col-sm-7 col-6">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}">Dashboard </a></li>
                        <li class="breadcrumb-item"><i class="feather-chevron-right"></i></li>
                        <li class="breadcrumb-item active">Patient Profile</li>
                    </ul>
                </div>

                <div class="col-sm-5 col-6 text-end m-b-30">
                    <a href="/patients/edit/{{ $paciente->id }}" class="btn btn-primary btn-rounded"><i
                            class="fa fa-plus"></i> Edit
                        Profile</a>
                </div>
            </div>
            <div class="card-box profile-header">
                <div class="row">
                    <div class="col-md-12">
                        <div class="profile-view">
                            {{-- <div class="profile-img-wrap">
                            <div class="profile-img">
                                <a href="javascript:;"><img class="avatar"
                                        src="{{ URL::asset('/assets/img/doctor-03.jpg') }}" alt=""></a>
                            </div>
                        </div> --}}
                            <div>
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="profile-info-left">
                                            <h3 class="user-name m-t-0 mb-0">{{ $paciente->nombre }}
                                                {{ $paciente->apellido }} </h3>

                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <ul class="personal-info">
                                            <li>
                                                <span class="title">Phone:</span>
                                                <span class="text"><a href="">{{ $paciente->telefono }}</a></span>
                                            </li>
                                            <li>
                                                <span class="title">Email:</span>
                                                <span class="text"><a href="">{{ $paciente->correo }}</a></span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="profile-tabs">
                <ul class="nav nav-tabs nav-tabs-bottom">
                    <li class="nav-item"><a class="nav-link active" href="#about-cont" data-bs-toggle="tab">Proxima Cita</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="#bottom-tab2" data-bs-toggle="tab">Anteriores Citas</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="#bottom-tab3" data-bs-toggle="tab">Busqueda Citas</a>
                    </li>
                </ul>

                <div class="tab-content">
                    <div class="tab-pane show active" id="about-cont">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card-box">
                                    @if (count($after_citas) == 0)
                                        <em>El paciente {{ $paciente->nombre }} {{ $paciente->apellido }} no tiene citas
                                            proximas </em>
                                    @else
                                        <ul>

                                            @foreach ($after_citas as $item)
                                                <li><a href="/appointments/edit/{{ $item->id }}">{{ $item->dr_nombre }}
                                                        {{ $item->dr_especialidad }} - {{ $item->fecha }}
                                                        {{ $item->hora }}</a> </li>
                                            @endforeach
                                        </ul>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="bottom-tab2">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card-box">
                                    @if (count($before_citas) == 0)
                                        <em>El paciente {{ $paciente->nombre }} {{ $paciente->apellido }} no tiene citas
                                            pasadas </em>
                                    @else
                                        <ul>

                                            @foreach ($before_citas as $item)
                                                <li><a href="/appointments/edit/{{ $item->id }}">{{ $item->dr_nombre }}
                                                        {{ $item->dr_especialidad }} - {{ $item->fecha }}
                                                        {{ $item->hora }}</a> </li>
                                            @endforeach
                                        </ul>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="bottom-tab3">
                        <div class="row">
                            <div class="col-md-12">
                                <h1>Buscador de Citas</h1>
                                <form id="search-form">
                                    <div class="col-12 col-md-6 col-xl-4">
                                        <div class="form-group local-forms">
                                            <label for="date">Fecha <span class="login-danger">*</span></label>
                                            <input class="form-control" type="date" id="fecha" name="fecha">
                                        </div>
                                        <input id="paciente_id" name="id_paciente" value="{{$paciente->id}}" hidden>

                                        {{-- <button type="submit">Buscar</button> --}}
                                        <button type="submit" class="btn btn-primary submit-form me-2">Search</button>
                                    </div>
                                </form>
<br>
<br>
<br>
                                <div id="resultados"></div><hr>

                                <script>
                                    document.getElementById('search-form').addEventListener('submit', function(e) {
                                        e.preventDefault();

                                        const fecha = document.getElementById('fecha').value;
                                        const pacienteId = document.getElementById('paciente_id').value;
                                        // const doctorId = document.getElementById('doctor_id').value;

                                        fetch(`/patients/search?fecha=${fecha}&id_paciente=${pacienteId}`)
                                            .then(response => response.json())
                                            .then(data => {

                                                const resultadosDiv = document.getElementById('resultados');
                                                resultadosDiv.innerHTML = '';
                                                data.forEach(cita => {
                                                    resultadosDiv.innerHTML +=
                                                        `<p>Cita programada para el ${cita.fecha} a las ${cita.hora} con ${cita.agendamedica.medico.nombre} - ${cita.agendamedica.medico.especialidad}</p>`;
                                                });
                                            });
                                    });
                                </script>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="bottom-tab3">

                    </div>
                </div>
            </div>
        </div>
        @component('components.notification-box')
        @endcomponent
    </div>
@endsection
