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
                        <h3 class="panel-title">Boozes</h3>
                    </div>
                    <div class="panel-body">
                        <table class="table table-striped table-bordered table-condensed" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Created</th>
                                <th>Created By</th>
                                <th width="40"></th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Created</th>
                                <th>Created By</th>
                                <th></th>
                            </tr>
                            </tfoot>
                            <tbody>
                            @foreach($boozes as $booze)
                                <tr>
                                    <td>
                                        {{ $booze->id }}
                                    </td>
                                    <td>
                                        {{ $booze->name }}
                                    </td>
                                    <td>
                                        {{ $booze->price }}
                                    </td>
                                    <td>
                                        {{ $booze->created_at->diffForHumans() }}
                                    </td>
                                    <td>
                                        {{ $booze->user->name }}
                                    </td>
                                    <td>
                                        <div class="hidden">{{ $booze->id }}</div>
                                        <form action="/booze/{{ $booze->id }}" method="POST">
                                            <div class="btn-group">
                                                <a href="/booze/{{ $booze->id }}/edit" class="btn btn-warning btn-xs"  data-toggle="tooltip" title="Edit Booze">
                                                    <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                                </a>

                                                <button type="submit" class="btn btn-danger btn-xs"  data-toggle="tooltip" title="Delete Booze">
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
