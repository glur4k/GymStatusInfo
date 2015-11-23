@extends('baselayout')

@section('content')

<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            {!! Breadcrumbs::render('Locations.{slug}.edit', $location) !!}
        </div>
    </div>
</div>

<section>
    <div class="container">
        <h3 class="text-center">Sporthalle bearbeiten:</h3>
        <h1 class="text-center">{{ $location->name }}</h1>
        <hr class="star-primary">

        @include('errors._list')

        {!! Form::model($location, ['method' => 'PATCH', 'action' => ['LocationsController@update', $location->slug], 'class' => 'form-horizontal form-location']) !!}

            @include('locations._form', ['submitButtonText' => 'Sporthalle speichern'])

        {!! Form::close() !!}
    </div>
</section>

@stop