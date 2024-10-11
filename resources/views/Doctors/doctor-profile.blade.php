<?php $page = 'doctor-profile'; ?>
@extends('layout.mainlayout')
@section('content')
<div class="page-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-sm-7 col-6">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Dashboard </a></li>
                    <li class="breadcrumb-item"><i class="feather-chevron-right"></i></li>
                    <li class="breadcrumb-item active">Medico Perfil</li>
                </ul>
            </div>

            <div class="col-sm-5 col-6 text-end m-b-30">
                <a  href="/doctors/edit/{{ $Medico->id }}" class="btn btn-primary btn-rounded"><i class="fa fa-plus"></i> Edit
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
                                        <h3 class="user-name m-t-0 mb-0">{{$Medico->nombre}}  </h3>
                                        <strong>{{$Medico->especialidad}}</strong>
                                        
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <ul class="personal-info">
                                        <li>
                                            <span class="title">Phone:</span>
                                            <span class="text"><a href="">{{$Medico->telefono}}</a></span>
                                        </li>
                                        <li>
                                            <span class="title">Email:</span>
                                            <span class="text"><a href="">{{$Medico->correo}}</a></span>
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
                <li class="nav-item"><a class="nav-link active" href="#about-cont" data-bs-toggle="tab">Proxima Cita</a></li>
                <li class="nav-item"><a class="nav-link" href="#bottom-tab2" data-bs-toggle="tab">Anteriores Citas</a></li>
            </ul>

            <div class="tab-content">
                <div class="tab-pane show active" id="about-cont">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card-box">
                                @if (count($after_citas) == 0)
                                    <em>El Medico {{ $Medico->nombre }} {{ $Medico->apellido }} no tiene citas
                                        proximas </em>
                                @else
                                    <ul>

                                        @foreach ($after_citas as $item)
                                        <li><a href="/appointments/edit/{{ $item->id }}">
                                            {{ $item->p_apellido }}
                                            {{ $item->p_nombre }} - {{ $item->fecha }}
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
                                    <em>El Medico {{ $Medico->nombre }} {{ $Medico->apellido }} no tiene citas </em>
                                @else
                                    <ul>

                                        @foreach ($before_citas as $item)
                                        <li><a href="/appointments/edit/{{ $item->id }}">
                                            {{ $item->p_apellido }}
                                            {{ $item->p_nombre }} - {{ $item->fecha }}
                                                {{ $item->hora }}</a> </li>
                                        @endforeach
                                    </ul>
                                @endif
                            </div>
                        </div>

                    </div>
                </div>
                <div class="tab-pane" id="bottom-tab3">
                    Tab content 3
                </div>
            </div>
        </div>
    </div>
    @component('components.notification-box')
    @endcomponent
</div>
@endsection
