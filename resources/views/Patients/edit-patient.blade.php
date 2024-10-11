<?php $page = 'edit-patient'; ?>
@extends('layout.mainlayout')
@section('content')
    <div class="page-wrapper">
        <div class="content">
            <!-- Page Header -->
            @component('components.page-header')
                @slot('title')
                    Patients
                @endslot
                @slot('li_1')
                    Edit Patient
                @endslot
            @endcomponent
            <!-- /Page Header -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="/patients/update/{{ $paciente->id }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-heading">
                                            <h4>Patinets Details</h4>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-xl-4">
                                        <div class="form-group local-forms">
                                            <label for="nombre">First Name <span class="login-danger">*</span></label>
                                            <input name="nombre" class="form-control" type="text"  value="{{ old('nombre')? old('nombre'):$paciente->nombre  }}">
                                            @error('nombre')
                                            <span style="color: red">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-xl-4">
                                        <div class="form-group local-forms">
                                            <label for="apellido">Last Name <span class="login-danger">*</span></label>
                                            <input name="apellido" class="form-control" type="text" value="{{ old('apellido')? old('apellido'):$paciente->apellido  }}">
                                            @error('apellido')
                                            <span style="color: red">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-xl-6">
                                        <div class="form-group local-forms">
                                            <label for="telefono">Mobile <span class="login-danger">*</span></label>
                                            <input name="telefono" class="form-control" type="text" value="{{ old('telefono')? old('telefono'):$paciente->telefono  }}">
                                            @error('telefono')
                                            <span style="color: red">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-xl-6">
                                        <div class="form-group local-forms">
                                            <label for="correo">Email <span class="login-danger">*</span></label>
                                            <input name="correo" class="form-control" type="email" value="{{ old('correo')? old('correo'):$paciente->correo  }}">
                                            @error('correo')
                                            <span style="color: red">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>                                    
                                    <div class="col-12">
                                        <div class="doctor-submit text-end">
                                            <button type="submit"
                                                class="btn btn-primary submit-form me-2">Submit</button>
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
