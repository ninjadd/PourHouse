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
                        <h3 class="panel-title">Update Food</h3>
                    </div>
                    <div class="panel-body">

                        <form class="form-horizontal" action="/food/{{ $food->id }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}
                            <fieldset>
                                <legend>Update Food Form</legend>

                                <div class="form-group">
                                    <label for="labelName" class="col-lg-2 control-label">Name</label>
                                    <div class="col-lg-10">
                                        <input name="name" value="{{ $food->name }}" class="form-control" id="labelName" type="text" required="required" placeholder="Name some new boozy drink">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="labelDescription" class="col-lg-2 control-label">Description</label>
                                    <div class="col-lg-10">
                                        <textarea name="description" class="form-control" rows="3" id="labelDescription">{{ $food->description }}</textarea>
                                        <span class="help-block">Please describe the new booze with some fun details</span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="labelPrice" class="col-lg-2 control-label">Price</label>
                                    <div class="col-lg-10">
                                        <input name="price" value="{{ $food->price }}" class="form-control" id="labelPrice" type="text" placeholder="The price of the new drink">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="labelMenu" class="col-lg-2 control-label">Menu</label>
                                    <div class="col-lg-10">
                                        <select class="form-control" name="menu" required>
                                            <option {{ ($food->menu == 'Brunch') ? 'selected' : '' }} value="Brunch">Brunch</option>
                                            <option {{ ($food->menu == 'Lunch') ? 'selected' : '' }} value="Lunch">Lunch</option>
                                            <option {{ ($food->menu == 'Dinner') ? 'selected' : '' }} value="Dinner">Dinner</option>
                                            <option {{ ($food->menu == 'Limited Time') ? 'selected' : '' }} value="Limited Time">Limited Time</option>
                                            <option {{ ($food->menu == 'Specials') ? 'selected' : '' }} value="Specials">Specials</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="labelUrl" class="col-lg-2 control-label">Image</label>
                                    <div class="col-lg-10">
                                        <input name="image" value="{{ $food->image }}" class="form-control" id="labelUrl" type="url" required="required" placeholder="URL to image from anywhere">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-lg-10 col-lg-offset-2">
                                        <button type="submit" class="btn btn-warning">Update Food</button>
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