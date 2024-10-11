<?php $page = 'form-basic-inputs'; ?>
@extends('layout.mainlayout')
@section('content')
    <div class="page-wrapper">
        <div class="content">
            <!-- Page Header -->
            @component('components.page-header')
                @slot('title')
                    Dashboard
                @endslot
                @slot('li_1')
                    Basic Inputs
                @endslot
            @endcomponent
            <!-- /Page Header -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card-box">
                        <h4 class="card-title">Basic Inputs</h4>
                        <form action="javascript:;">
                            <div class="form-group row">
                                <label class="col-form-label col-md-2">Text Input</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-2">Password</label>
                                <div class="col-md-10">
                                    <input type="password" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-2">Disabled Input</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" disabled="disabled">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-2">Readonly Input</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" value="readonly" readonly="readonly">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-2">Placeholder</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" placeholder="Placeholder">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-2">File input</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="file">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-2">Default select</label>
                                <div class="col-md-10">
                                    @livewire('select-option')
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-2">Radio</label>
                                <div class="col-md-10">
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="radio"> Option 1
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="radio"> Option 2
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="radio"> Option 3
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-2">Checkbox</label>
                                <div class="col-md-10">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="checkbox"> Option 1
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="checkbox"> Option 2
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="checkbox"> Option 3
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-2">Textarea</label>
                                <div class="col-md-10">
                                    <textarea rows="5" cols="5" class="form-control" placeholder="Enter text here"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-2">Input Addons</label>
                                <div class="col-md-10">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">$</span>
                                        </div>
                                        <input class="form-control" type="text">
                                        <button class="btn btn-primary" type="button">Button</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="card-box">
                        <h4 class="card-title">Input Sizes</h4>
                        <form action="javascript:;">
                            <div class="form-group row">
                                <label class="col-form-label col-md-2">Large Input</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control form-control-lg"
                                        placeholder=".form-control-lg">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-2">Default Input</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" placeholder=".form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-2">Small Input</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control form-control-sm"
                                        placeholder=".form-control-sm">
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
