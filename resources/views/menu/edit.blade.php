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
                        <h3 class="panel-title">Update Menu Item</h3>
                    </div>
                    <div class="panel-body">

                        <form class="form-horizontal" action="/menu/{{ $menuItem->id }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}
                            <fieldset>
                                <legend>Update Menu Item Form</legend>

                                <div class="form-group">
                                    <label for="labelTitle" class="col-lg-2 control-label">Title</label>
                                    <div class="col-lg-10">
                                        <input name="title" class="form-control" value="{{ $menuItem->title }}" id="labelTitle" type="text" required="required" placeholder="Some rad menu title">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="labelTypes" class="col-lg-2 control-label">Select Type</label>
                                    <div class="col-lg-10">
                                        <select name="type" class="form-control" required="required" id="labelTypes">
                                            <option>Please Select a Type</option>
                                            @foreach($types as $type)
                                                @if($menuItem->type_id == $type->id)
                                                    <option selected="selected" value="{{ $type->id }}">{{ $type->name }}</option>
                                                @else
                                                    <option value="{{ $type->id }}">{{ $type->name }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="labelDescription" class="col-lg-2 control-label">Description</label>
                                    <div class="col-lg-10">
                                        <textarea name="description" class="form-control" required="required" rows="3" id="labelDescription">{{ $menuItem->description }}</textarea>
                                        <span class="help-block">Please describe the menu items with some fun details</span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="labelPrice" class="col-lg-2 control-label">Price</label>
                                    <div class="col-lg-10">
                                        <input name="price" class="form-control" value="{{ $menuItem->price }}" id="labelPrice" type="text" placeholder="Enter a price for this item">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-lg-10 col-lg-offset-2">
                                        <button type="submit" class="btn btn-warning">Update Menu Item</button>
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