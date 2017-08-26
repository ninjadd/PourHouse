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
                        <h3 class="panel-title">Foods</h3>
                    </div>
                    <div class="panel-body">
                        <table class="table table-striped table-bordered table-condensed" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Menu</th>
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
                                <th>Menu</th>
                                <th>Created</th>
                                <th>Created By</th>
                                <th></th>
                            </tr>
                            </tfoot>
                            <tbody>
                            @foreach($foods as $food)
                                <tr>
                                    <td>
                                        {{ $food->id }}
                                    </td>
                                    <td>
                                        {{ $food->name }}
                                    </td>
                                    <td>
                                        {{ $food->price }}
                                    </td>
                                    <td>
                                        {{ $food->menu }}
                                    </td>
                                    <td>
                                        {{ $food->created_at->diffForHumans() }}
                                    </td>
                                    <td>
                                        {{ $food->user->name }}
                                    </td>
                                    <td>
                                        <div class="hidden">{{ $food->id }}</div>
                                        <form action="/food/{{ $food->id }}" method="POST">
                                            <div class="btn-group">
                                                <a href="/food/{{ $food->id }}/edit" class="btn btn-warning btn-xs"  data-toggle="tooltip" title="Edit Food">
                                                    <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                                </a>

                                                <button type="submit" class="btn btn-danger btn-xs"  data-toggle="tooltip" title="Delete Food">
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
