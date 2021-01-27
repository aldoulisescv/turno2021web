<!-- User Id Field -->
<div class="form-group">
    {!! Form::label('user_id', 'User Id:') !!}
    <p>{{ $turno->user_id }}</p>
</div>

<!-- Establishment Id Field -->
<div class="form-group">
    {!! Form::label('establishment_id', 'Establishment Id:') !!}
    <p>{{ $turno->establishment_id }}</p>
</div>

<!-- Resource Id Field -->
<div class="form-group">
    {!! Form::label('resource_id', 'Resource Id:') !!}
    <p>{{ $turno->resource_id }}</p>
</div>

<!-- Session Id Field -->
<div class="form-group">
    {!! Form::label('session_id', 'Session Id:') !!}
    <p>{{ $turno->session_id }}</p>
</div>

<!-- Status Turno Id Field -->
<div class="form-group">
    {!! Form::label('status_turno_id', 'Status Turno Id:') !!}
    <p>{{ $turno->status_turno_id }}</p>
</div>

<!-- Date Field -->
<div class="form-group">
    {!! Form::label('date', 'Date:') !!}
    <p>{{ $turno->date }}</p>
</div>

<!-- Start Time Field -->
<div class="form-group">
    {!! Form::label('start_time', 'Start Time:') !!}
    <p>{{ $turno->start_time }}</p>
</div>

<!-- End Time Field -->
<div class="form-group">
    {!! Form::label('end_time', 'End Time:') !!}
    <p>{{ $turno->end_time }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $turno->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $turno->updated_at }}</p>
</div>

