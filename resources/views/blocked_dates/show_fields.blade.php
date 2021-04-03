<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', __('models/blockedDates.fields.name').':') !!}
    <p>{{ $blockedDates->name }}</p>
</div>

<!-- Date Field -->
<div class="form-group">
    {!! Form::label('date', __('models/blockedDates.fields.date').':') !!}
    <p>{{ $blockedDates->date }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', __('models/blockedDates.fields.created_at').':') !!}
    <p>{{ $blockedDates->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', __('models/blockedDates.fields.updated_at').':') !!}
    <p>{{ $blockedDates->updated_at }}</p>
</div>

