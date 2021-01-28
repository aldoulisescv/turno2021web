<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', __('models/statusTurnos.fields.name').':') !!}
    <p>{{ $statusTurno->name }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', __('models/statusTurnos.fields.created_at').':') !!}
    <p>{{ $statusTurno->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', __('models/statusTurnos.fields.updated_at').':') !!}
    <p>{{ $statusTurno->updated_at }}</p>
</div>

