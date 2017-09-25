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
                        <h3 class="panel-title">Create New Food</h3>
                    </div>
                    <div class="panel-body">

                        <form class="form-horizontal" action="/food" method="POST">
                            {{ csrf_field() }}
                            <fieldset>
                                <legend>New Food Form</legend>

                                <div class="form-group">
                                    <label for="labelName" class="col-lg-2 control-label">Name</label>
                                    <div class="col-lg-10">
                                        <input name="name" class="form-control" id="labelName" type="text" required="required" placeholder="Name some new amazing food">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="labelDescription" class="col-lg-2 control-label">Description</label>
                                    <div class="col-lg-10">
                                        <textarea name="description" class="form-control" rows="3" id="labelDescription"></textarea>
                                        <span class="help-block">Please describe the new food with some fun details</span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="labelPrice" class="col-lg-2 control-label">Price</label>
                                    <div class="col-lg-10">
                                        <input name="price" class="form-control" id="labelPrice" type="text" placeholder="The price of the new food">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="labelMenu" class="col-lg-2 control-label">Menu</label>
                                    <div class="col-lg-10">
                                        <select class="form-control" name="menu" required>
                                            <option value="Brunch">Brunch</option>
                                            <option value="Lunch">Lunch</option>
                                            <option value="Dinner">Dinner</option>
                                            <option value="Limited Time">Limited Time</option>
                                            <option value="Specials">Specials</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="labelUrl" class="col-lg-2 control-label">Image</label>
                                    <div class="col-lg-10">
                                        <input name="image" class="form-control" id="labelUrl" type="url" placeholder="URL to image from anywhere">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-lg-10 col-lg-offset-2">
                                        <button type="submit" class="btn btn-success">Save Food</button>
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