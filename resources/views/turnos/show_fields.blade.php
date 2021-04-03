<!-- User Id Field -->
<div class="form-group">
    {!! Form::label('user_id', __('models/turnos.fields.user_id').':') !!}
    <p>{{ $turno->user_id }}</p>
</div>

<!-- Email Field -->
<div class="form-group">
    {!! Form::label('email', __('models/turnos.fields.email').':') !!}
    <p>{{ $turno->email }}</p>
</div>

<!-- Phone Field -->
<div class="form-group">
    {!! Form::label('phone', __('models/turnos.fields.phone').':') !!}
    <p>{{ $turno->phone }}</p>
</div>

<!-- Establishment Id Field -->
<div class="form-group">
    {!! Form::label('establishment_id', __('models/turnos.fields.establishment_id').':') !!}
    <p>{{ $turno->establishment_id }}</p>
</div>

<!-- Resource Id Field -->
<div class="form-group">
    {!! Form::label('resource_id', __('models/turnos.fields.resource_id').':') !!}
    <p>{{ $turno->resource_id }}</p>
</div>

<!-- Session Id Field -->
<div class="form-group">
    {!! Form::label('session_id', __('models/turnos.fields.session_id').':') !!}
    <p>{{ $turno->session_id }}</p>
</div>

<!-- Status Turno Id Field -->
<div class="form-group">
    {!! Form::label('status_turno_id', __('models/turnos.fields.status_turno_id').':') !!}
    <p>{{ $turno->status_turno_id }}</p>
</div>

<!-- Date Field -->
<div class="form-group">
    {!! Form::label('date', __('models/turnos.fields.date').':') !!}
    <p>{{ $turno->date }}</p>
</div>

<!-- Start Time Field -->
<div class="form-group">
    {!! Form::label('start_time', __('models/turnos.fields.start_time').':') !!}
    <p>{{ $turno->start_time }}</p>
</div>

<!-- End Time Field -->
<div class="form-group">
    {!! Form::label('end_time', __('models/turnos.fields.end_time').':') !!}
    <p>{{ $turno->end_time }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', __('models/turnos.fields.created_at').':') !!}
    <p>{{ $turno->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', __('models/turnos.fields.updated_at').':') !!}
    <p>{{ $turno->updated_at }}</p>
</div>

