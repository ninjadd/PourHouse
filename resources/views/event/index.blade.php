@extends('layouts.app')

@section('head')
    @include('shared.datatables')
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @include('shared.session')
                @include('shared.navbar')
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Dashboard | Events</h3>
                    </div>
                    <div class="panel-body">
                        <table class="table table-striped table-bordered table-condensed" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Artist</th>
                                <th>Title</th>
                                <th>Date</th>
                                <th>Time</th>
                                <th>Category</th>
                                <th>Created</th>
                                <th>Created By</th>
                                <th width="40"></th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>#</th>
                                <th>Artist</th>
                                <th>Title</th>
                                <th>Date</th>
                                <th>Time</th>
                                <th>Category</th>
                                <th>Created</th>
                                <th>Created By</th>
                                <th></th>
                            </tr>
                            </tfoot>
                            <tbody>
                            @foreach($events as $event)
                                <tr>
                                    <td>
                                        {{ $event->id }}
                                    </td>
                                    <td>
                                        {{ $event->artist }}
                                    </td>
                                    <td>
                                        {{ $event->title }}
                                    </td>
                                    <td>
                                        {{ $event->date->toFormattedDateString() }}
                                    </td>
                                    <td>
                                        {{ $event->start_time }} &mdash; {{ $event->end_time }}
                                    </td>
                                    <td>
                                        {{ $event->category }}
                                    </td>
                                    <td>
                                        {{ $event->created_at->diffForHumans() }}
                                    </td>
                                    <td>
                                        {{ $event->user->name }}
                                    </td>
                                    <td>
                                        <div class="hidden">{{ $event->id }}</div>
                                        <form action="/event/{{ $event->id }}" method="POST">
                                            <div class="btn-group">
                                                <a href="/event/{{ $event->id }}/edit" class="btn btn-warning btn-xs"  data-toggle="tooltip" title="Edit Event">
                                                    <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                                </a>

                                                <button type="submit" class="btn btn-danger btn-xs"  data-toggle="tooltip" title="Delete Event">
                                                    <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                                                </button>
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                            </div>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
