@extends('baselayout')

@section('content')

@include('partials._breadcrumbs')

<section>
    <div class="container management management-teams">
        <h1 class="text-center">Mannschaften</h1>
        <hr class="star-primary">

        @include('partials._session')

        <div class="row search">
            <div class="col-xs-12 col-sm-8 col-md-9">
                <div class="input-group right-inner-addon">
                    <input type="search" data-table="table-hover" class="light-table-filter form-control" placeholder="Mannschaft suchen...">
                    <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                </div><!-- /input-group -->
            </div><!-- /.col-xs-6 -->
            <div class="col-xs-12 col-sm-4 col-md-3">
                <a href="{{ route('Teams.create') }}" class="btn btn-primary btn-block"><i class="fa fa-plus"></i> Mannschaft hinzufügen</a>
            </div>
        </div><!-- /.row -->

        <div class="table-responsive">
            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        <th>Mannschaft</th>
                        <th>Mannschaftsführer</th>
                        <th>Rolle</th>
                        <th class="text-right">Verwaltung</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td scope="row">{{ $user->team }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->roles->first()->display_name }}</td>
                            <td class="text-right">
                                {!! Form::open(['method' => 'DELETE', 'action' => ['TeamsController@destroy', $user->id], 'class' => 'inline-form']) !!}
                                    {!! Form::button('<i class="fa fa-trash"></i>', ['data-toggle' => 'confirmation tooltip', 'data-placement' => 'top', 'title' => $user->team . ' löschen', 'class' => 'btn btn-xs btn-link', 'type' => 'submit']) !!}
                                {!! Form::close() !!}
                                <a href="{{ route('Teams.{slug}.edit', $user->slug) }}" class="btn btn-xs btn-link" data-toggle="tooltip" data-placement="top" title="{{ $user->team }} bearbeiten"><i class="fa fa-pencil"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>

@stop