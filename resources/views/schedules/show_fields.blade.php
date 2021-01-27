<!-- Enabled Field -->
<div class="form-group">
    {!! Form::label('enabled', 'Enabled:') !!}
    <p>{{ $schedule->enabled }}</p>
</div>

<!-- Resource Id Field -->
<div class="form-group">
    {!! Form::label('resource_id', 'Resource Id:') !!}
    <p>{{ $schedule->resource_id }}</p>
</div>

<!-- Start Hour Field -->
<div class="form-group">
    {!! Form::label('start_hour', 'Start Hour:') !!}
    <p>{{ $schedule->start_hour }}</p>
</div>

<!-- End Hour Field -->
<div class="form-group">
    {!! Form::label('end_hour', 'End Hour:') !!}
    <p>{{ $schedule->end_hour }}</p>
</div>

<!-- Sunday Field -->
<div class="form-group">
    {!! Form::label('sunday', 'Sunday:') !!}
    <p>{{ $schedule->sunday }}</p>
</div>

<!-- Monday Field -->
<div class="form-group">
    {!! Form::label('monday', 'Monday:') !!}
    <p>{{ $schedule->monday }}</p>
</div>

<!-- Tuesday Field -->
<div class="form-group">
    {!! Form::label('tuesday', 'Tuesday:') !!}
    <p>{{ $schedule->tuesday }}</p>
</div>

<!-- Wednesday Field -->
<div class="form-group">
    {!! Form::label('wednesday', 'Wednesday:') !!}
    <p>{{ $schedule->wednesday }}</p>
</div>

<!-- Thrusday Field -->
<div class="form-group">
    {!! Form::label('thrusday', 'Thrusday:') !!}
    <p>{{ $schedule->thrusday }}</p>
</div>

<!-- Friday Field -->
<div class="form-group">
    {!! Form::label('friday', 'Friday:') !!}
    <p>{{ $schedule->friday }}</p>
</div>

<!-- Saturday Field -->
<div class="form-group">
    {!! Form::label('saturday', 'Saturday:') !!}
    <p>{{ $schedule->saturday }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $schedule->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $schedule->updated_at }}</p>
</div>

