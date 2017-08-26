@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                @include('shared.session')
                @include('shared.errors')
                @include('shared.navbar')

                <div class="panel panel-warning">
                    <div class="panel-heading">
                        <h3 class="panel-title">Update User</h3>
                    </div>
                    <div class="panel-body">

                        <form class="form-horizontal" action="/user/{{ $user->id }}" method="POST" autocomplete="off">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}
                            <fieldset>
                                <legend>Update User Form</legend>

                                <div class="form-group">
                                    <label for="labelName" class="col-lg-2 control-label">Name</label>
                                    <div class="col-lg-10">
                                        <input name="name" value="{{ $user->name }}" class="form-control" id="labelName" type="text" required="required" autocomplete="off" placeholder="The Name of some lucky guy">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="labelEmail" class="col-lg-2 control-label">Email</label>
                                    <div class="col-lg-10">
                                        <input name="email" value="{{ $user->email }}" class="form-control" id="labelEmail" type="email" autocomplete="off" placeholder="Email address of said luck guy">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="labelPassword" class="col-lg-2 control-label">Passoword</label>
                                    <div class="col-lg-10">
                                        <input name="password" class="form-control" id="labelPassword" autocomplete="off" placeholder="Set Password new for the luckiest of lucky's">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="labelRole" class="col-lg-2 control-label">Role</label>
                                    <div class="col-lg-10">
                                        <select class="form-control" id="labelRole" name="role" required="required">
                                            <option {{ ($user->role == 'staff') ? 'selected' : '' }} value="staff">Staff</option>
                                            <option {{ ($user->role == 'admin') ? 'selected' : '' }} value="admin">Admin</option>
                                        </select>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="col-lg-10 col-lg-offset-2">
                                        <button type="submit" class="btn btn-warning">Update User</button>
                                        <button type="reset" class="btn btn-default">Cancel</button>
                                    </div>
                                </div>
                            </fieldset>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection