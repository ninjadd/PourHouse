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
                        <h3 class="panel-title">Users</h3>
                    </div>
                    <div class="panel-body">
                        <table class="table table-striped table-bordered table-condensed" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Role</th>
                                <th>Email</th>
                                <th>Created</th>
                                <th width="40"></th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>Role</th>
                                <th>Email</th>
                                <th>Created</th>
                                <th></th>
                            </tr>
                            </tfoot>
                            <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td>
                                        {{ $user->name }}
                                    </td>
                                    <td>
                                        {{ ucfirst($user->role) }}
                                    </td>
                                    <td>
                                        {{ $user->email }}
                                    </td>
                                    <td>
                                        {{ $user->created_at->diffForHumans() }}
                                    </td>
                                    <td>
                                        <div class="hidden">{{ $user->id }}</div>
                                        <form action="/user/{{ $user->id }}" method="POST">
                                            <div class="btn-group">
                                                <a href="/user/{{ $user->id }}/edit" class="btn btn-warning btn-xs"  data-toggle="tooltip" title="Edit User">
                                                    <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                                </a>

                                                <button type="submit" class="btn btn-danger btn-xs"  data-toggle="tooltip" title="Delete User">
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
