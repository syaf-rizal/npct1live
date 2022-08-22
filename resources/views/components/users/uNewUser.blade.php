@extends('components.containers.appAuthentication')
@section('pageTitle', $title)
@section('content')
<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="pe-7s-users icon-gradient bg-mean-fruit"></i>
            </div>
            <div>Users Website
                <div class="page-title-subheading">[ Description about users website npct1]</div>
            </div>
        </div>
    </div>
</div>
<div class="card mb-4">
    <div class="card-header mb-4">
        <div class="media flex-wrap w-100 align-items-center">
            <div class="media-body ml-3">
                <a href="javascript:void(0)">Admin - Create New User</a>
            </div>
        </div>
    </div>
    <div class="card-body ml-4 mr-4">
        <form action="{{ $action }}" method="post" name="fNewUsers" id="fNewUsers" autocomplete="off" enctype="multipart/form-data">
            <div class="form-row">
                <div class="col-lg-6 col-md-8 col-sm-12">
                    <div class="position-relative form-group">
                        <label for="nameUser" class="">Name</label>
                        <input name="nameUser" id="nameUser" placeholder="Name" type="text" class="form-control lg" wajib="yes">
                    </div>
                    <div class="position-relative form-group">
                        <label for="emailUser" class="">Email</label>
                        <input name="emailUser" id="emailUser" placeholder="Email" type="text" class="form-control lg" wajib="yes">
                    </div>
                    <div class="position-relative form-group">
                        <label for="groupUser" class="">Group</label>
                        {{ Form::select('groupUser', $group, '', ['id' => 'groupUser', 'class' => 'form-control', 'data-placeholder' => 'Select Group', 'wajib' => 'yes']) }}
                    </div>
                    <div class="position-relative form-group">
                        <label for="roleUser" class="">Role</label>
                        {{ Form::select('roleUser', $role, '', ['id' => 'roleUser', 'class' => 'form-control', 'data-placeholder' => 'Select Role', 'wajib' => 'yes']) }}
                    </div>
                    <div class="clearfix">&nbsp;</div>
                    <div class="clearfix">&nbsp;</div>
                    <div class="position-relative form-group">
                        <button class="btn-wide mb-2 mr-2 btn-pill btn btn-primary btn-lg" id="{{ rand() }}" onclick="postRequest('fNewUsers', $(this));  return false;">Create User</button>
                        <button class="btn-wide mb-2 mr-2 btn-pill btn-transition btn btn-lg btn-outline-secondary" onClick="window.history.back(); return false;">Cancel</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection