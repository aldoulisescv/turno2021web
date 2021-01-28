<!-- Enabled Field -->
<div class="form-group">
    {!! Form::label('enabled', __('models/schedules.fields.enabled').':') !!}
    <p>{{ $schedule->enabled }}</p>
</div>

<!-- Resource Id Field -->
<div class="form-group">
    {!! Form::label('resource_id', __('models/schedules.fields.resource_id').':') !!}
    <p>{{ $schedule->resource_id }}</p>
</div>

<!-- Start Hour Field -->
<div class="form-group">
    {!! Form::label('start_hour', __('models/schedules.fields.start_hour').':') !!}
    <p>{{ $schedule->start_hour }}</p>
</div>

<!-- End Hour Field -->
<div class="form-group">
    {!! Form::label('end_hour', __('models/schedules.fields.end_hour').':') !!}
    <p>{{ $schedule->end_hour }}</p>
</div>

<!-- Sunday Field -->
<div class="form-group">
    {!! Form::label('sunday', __('models/schedules.fields.sunday').':') !!}
    <p>{{ $schedule->sunday }}</p>
</div>

<!-- Monday Field -->
<div class="form-group">
    {!! Form::label('monday', __('models/schedules.fields.monday').':') !!}
    <p>{{ $schedule->monday }}</p>
</div>

<!-- Tuesday Field -->
<div class="form-group">
    {!! Form::label('tuesday', __('models/schedules.fields.tuesday').':') !!}
    <p>{{ $schedule->tuesday }}</p>
</div>

<!-- Wednesday Field -->
<div class="form-group">
    {!! Form::label('wednesday', __('models/schedules.fields.wednesday').':') !!}
    <p>{{ $schedule->wednesday }}</p>
</div>

<!-- Thrusday Field -->
<div class="form-group">
    {!! Form::label('thrusday', __('models/schedules.fields.thrusday').':') !!}
    <p>{{ $schedule->thrusday }}</p>
</div>

<!-- Friday Field -->
<div class="form-group">
    {!! Form::label('friday', __('models/schedules.fields.friday').':') !!}
    <p>{{ $schedule->friday }}</p>
</div>

<!-- Saturday Field -->
<div class="form-group">
    {!! Form::label('saturday', __('models/schedules.fields.saturday').':') !!}
    <p>{{ $schedule->saturday }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', __('models/schedules.fields.created_at').':') !!}
    <p>{{ $schedule->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', __('models/schedules.fields.updated_at').':') !!}
    <p>{{ $schedule->updated_at }}</p>
</div>

