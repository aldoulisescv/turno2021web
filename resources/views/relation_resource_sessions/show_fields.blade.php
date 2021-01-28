<!-- Resource Id Field -->
<div class="form-group">
    {!! Form::label('resource_id', __('models/relationResourceSessions.fields.resource_id').':') !!}
    <p>{{ $relationResourceSession->resource_id }}</p>
</div>

<!-- Session Id Field -->
<div class="form-group">
    {!! Form::label('session_id', __('models/relationResourceSessions.fields.session_id').':') !!}
    <p>{{ $relationResourceSession->session_id }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', __('models/relationResourceSessions.fields.created_at').':') !!}
    <p>{{ $relationResourceSession->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', __('models/relationResourceSessions.fields.updated_at').':') !!}
    <p>{{ $relationResourceSession->updated_at }}</p>
</div>

