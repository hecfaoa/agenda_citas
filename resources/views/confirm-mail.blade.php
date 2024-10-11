<?php $page = 'confirm-mail'; ?>
@extends('layout.mainlayout')
@section('content')
<div class="container-fluid px-0">
    <div class="row">
        <!-- Login logo -->
        <div class="col-lg-6 login-wrap">
            <div class="login-sec">
                <div class="log-img">
                    <img class="img-fluid" src="{{URL::asset('/assets/img/login-02.png')}}" alt="Logo">
                </div>
            </div>
        </div>
        <!-- /Login logo -->
        
        <!-- Login Content -->
        <div class="col-lg-6 login-wrap-bg">
            <div class="login-wrapper">
                <div class="loginbox">								
                    <div class="login-right">
                        <div class="sucess-mail text-center">
                            <img class="img-fluid" src="{{URL::asset('/assets/img/icons/tick-circle.svg')}}" alt="Logo">
                            <h4>Success !</h4>
                            <p>A email has been send to youremail@domain.com. 
                                Please check for an email from company and click on the
                                included link to reset your password.</p>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        <!-- /Login Content -->
    </div>
</div>
@endsection