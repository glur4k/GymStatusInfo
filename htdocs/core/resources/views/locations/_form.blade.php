<div class="form-group">
    {!! Form::label('name', 'Name*', ['class' => 'col-sm-4 control-label']) !!}
    <div class="col-sm-8">
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('city', 'Stadt', ['class' => 'col-sm-4 control-label']) !!}
    <div class="col-sm-8">
        {!! Form::text('city', null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('street', 'Straße und Hausnummer', ['class' => 'col-sm-4 control-label']) !!}
    <div class="col-sm-8">
        {!! Form::text('street', null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('country', 'Land', ['class' => 'col-sm-4 control-label']) !!}
    <div class="col-sm-8">
        {!! Form::select('country', array('Deutschland' => 'Deutschland'), 'Deutschland', ['class' => 'form-control']) !!}
    </div>
</div>

<h3 class="text-center">Uhrzeiten</h3>

<div class="row">
    <div class="col-sm-offset-2 col-sm-8">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="row">
                    <div class="col-sm-4 text-center">Datum: 01.01.2016</div>
                    <div class="col-sm-4 text-center">Uhrzeit: 17:00 Uhr</div>
                    <div class="col-sm-4 text-center">Plätze: 4</div>
                </div>
            </div>
            <div class="panel-footer text-center">
                <button type="button" class="btn btn-danger"><i class="fa fa-trash"></i> Zeit Löschen</button>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-offset-2 col-sm-8">
      <div class="panel panel-success">
          <div class="panel-heading">
              <h3 class="panel-title">Freie Zeit hinzufügen</h3>
          </div>
          <div class="panel-body">
              <div class="form-group">
                  {!! Form::label('date', 'Datum', ['class' => 'col-md-4 control-label']) !!}
                  <div class="col-md-6">
                      {!! Form::date('date', null, ['class' => 'form-control']) !!}
                  </div>
              </div>
              <div class="form-group">
                  {!! Form::label('time', 'Uhrzeit', ['class' => 'col-md-4 control-label']) !!}
                  <div class="col-md-6">
                      {!! Form::time('time', null, ['class' => 'form-control']) !!}
                  </div>
              </div>
              <div class="form-group">
                  {!! Form::label('places', 'Plätze', ['class' => 'col-md-4 control-label']) !!}
                  <div class="col-md-6">
                      {!! Form::number('places', null, ['class' => 'form-control']) !!}
                  </div>
              </div>

              <div class="form-group">
                  <div class="col-md-offset-4 col-md-6">
                      {!! Form::button('Zeit hinzufügen', ['id' => 'add-time', 'class' => 'btn btn-success']) !!}
                  </div>
              </div>
          </div>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-sm-12 text-right">
        <a href="{{ route('Locations.index') }}" class="btn btn-default">Abbrechen</a>
        {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary']) !!}
    </div>
</div>