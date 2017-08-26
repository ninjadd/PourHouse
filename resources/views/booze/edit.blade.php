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
                        <h3 class="panel-title">Update Booze</h3>
                    </div>
                    <div class="panel-body">

                        <form class="form-horizontal" action="/booze/{{ $booze->id }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}
                            <fieldset>
                                <legend>Update Booze Form</legend>

                                <div class="form-group">
                                    <label for="labelName" class="col-lg-2 control-label">Name</label>
                                    <div class="col-lg-10">
                                        <input name="name" value="{{ $booze->name }}" class="form-control" id="labelName" type="text" required="required" placeholder="Name some new boozy drink">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="labelDescription" class="col-lg-2 control-label">Description</label>
                                    <div class="col-lg-10">
                                        <textarea name="description" class="form-control" rows="3" id="labelDescription">{{ $booze->description }}</textarea>
                                        <span class="help-block">Please describe the new booze with some fun details</span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="labelPrice" class="col-lg-2 control-label">Price</label>
                                    <div class="col-lg-10">
                                        <input name="price" value="{{ $booze->price }}" class="form-control" id="labelPrice" type="text" placeholder="The price of the new drink">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-lg-10 col-lg-offset-2">
                                        <button type="submit" class="btn btn-warning">Update Booze</button>
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