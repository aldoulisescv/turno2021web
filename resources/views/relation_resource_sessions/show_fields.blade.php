<!-- Resource Id Field -->
<div class="form-group">
    {!! Form::label('resource_id', 'Resource Id:') !!}
    <p>{{ $relationResourceSession->resource_id }}</p>
</div>

<!-- Session Id Field -->
<div class="form-group">
    {!! Form::label('session_id', 'Session Id:') !!}
    <p>{{ $relationResourceSession->session_id }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $relationResourceSession->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $relationResourceSession->updated_at }}</p>
</div>

