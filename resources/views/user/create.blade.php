@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                @include('shared.session')
                @include('shared.errors')
                @include('shared.navbar')

                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h3 class="panel-title">Create New User</h3>
                    </div>
                    <div class="panel-body">

                        <form class="form-horizontal" action="/food" method="POST" autocomplete="off">
                            {{ csrf_field() }}
                            <fieldset>
                                <legend>New User Form</legend>

                                <div class="form-group">
                                    <label for="labelName" class="col-lg-2 control-label">Name</label>
                                    <div class="col-lg-10">
                                        <input name="name" class="form-control" id="labelName" type="text" required="required" autocomplete="off" placeholder="The Name of some lucky guy">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="labelEmail" class="col-lg-2 control-label">Email</label>
                                    <div class="col-lg-10">
                                        <input name="email" class="form-control" id="labelEmail" type="email" autocomplete="off" placeholder="Email address of said luck guy">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="labelPassword" class="col-lg-2 control-label">Passoword</label>
                                    <div class="col-lg-10">
                                        <input name="password" class="form-control" id="labelPassword" type="password" autocomplete="off" placeholder="Set Password for the luckiest of lucky's">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="labelRole" class="col-lg-2 control-label">Role</label>
                                    <div class="col-lg-10">
                                        <select class="form-control" id="labelRole" name="role" required="required">
                                            <option value="staff">Staff</option>
                                            <option value="admin">Admin</option>
                                        </select>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="col-lg-10 col-lg-offset-2">
                                        <button type="submit" class="btn btn-success">Save User</button>
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