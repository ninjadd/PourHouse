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
                        <h3 class="panel-title">Edit Event | {{ $event->title }}</h3>
                    </div>
                    <div class="panel-body">

                        <form class="form-horizontal" action="/event/{{ $event->id }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}
                            <fieldset>
                                <legend>Edit Event Form</legend>

                                <div class="form-group">
                                    <label for="labelArtist" class="col-lg-2 control-label">Artist</label>
                                    <div class="col-lg-10">
                                        <input name="artist" value="{{ $event->artist }}" class="form-control" id="labelArtist" type="text" required="required" placeholder="Add new Artist">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="labelTitle" class="col-lg-2 control-label">Title</label>
                                    <div class="col-lg-10">
                                        <input name="title" value="{{ $event->title }}" class="form-control" id="labelTitle" type="text" required="required" placeholder="Title for a great event">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="labelDescription" class="col-lg-2 control-label">Description</label>
                                    <div class="col-lg-10">
                                        <textarea name="description" class="form-control" rows="3" id="labelDescription">{{ $event->description }}</textarea>
                                        <span class="help-block">Please describe the event with some fun details</span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="labelDate" class="col-lg-2 control-label">Schedule Event:</label>
                                    <div class="col-lg-10">
                                        <div class="col-lg-2">
                                            Date
                                        </div>
                                        <div class="col-lg-2">
                                            <input name="date" value="{{ $event->date->format('m/d/Y') }}" class="form-control" id="labelDate" type="text" required="required">
                                        </div>
                                        <div class="col-lg-2">
                                            From
                                        </div>
                                        <div class="col-lg-2">
                                            <select class="form-control" name="start_time" required>
                                                @foreach($times as $time)
                                                    <option {{ ($event->start_time == $time->stamp) ? 'selected="selected"' : null }} value="{{ $time->stamp }}">{{ $time->stamp }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-lg-2">
                                            To
                                        </div>
                                        <div class="col-lg-2">
                                            <select class="form-control" name="end_time" required>
                                                @foreach($times as $time)
                                                    <option {{ ($event->end_time == $time->stamp) ? 'selected="selected"' : null }} value="{{ $time->stamp }}">{{ $time->stamp }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="labelCategory" class="col-lg-2 control-label">Category</label>
                                    <div class="col-lg-10">
                                        <input name="category" value="{{ $event->category }}" class="form-control" id="labelCategory" type="text" required="required" placeholder="Music is the most common Category">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="labelUrl" class="col-lg-2 control-label">Card Image</label>
                                    <div class="col-lg-10">
                                        <input name="image" value="{{ $event->image }}" class="form-control" id="labelUrl" type="url" required="required" placeholder="URL to image from anywhere">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-lg-10 col-lg-offset-2">
                                        <button type="submit" class="btn btn-warning">Update Event</button>
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
    <script>
        $(document).ready(function() {
            $('#labelDate').datepicker({
                showButtonPanel: true,
                dateFormat: "mm/dd/yy"
            });
            $('#endDate').datepicker({
                dateFormat: "mm/dd/yy"
            });
        });
    </script>
@endsection