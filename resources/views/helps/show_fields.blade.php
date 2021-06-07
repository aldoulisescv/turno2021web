<!-- Status Help Id Field -->
<div class="form-group">
    {!! Form::label('status_help_id', __('models/helps.fields.status_help_id').':') !!}
    <p>{{ $help->status_help_id }}</p>
</div>

<!-- User Id Field -->
<div class="form-group">
    {!! Form::label('user_id', __('models/helps.fields.user_id').':') !!}
    <p>{{ $help->user_id }}</p>
</div>

<!-- Help Type Field -->
<div class="form-group">
    {!! Form::label('help_type', __('models/helps.fields.help_type').':') !!}
    <p>{{ $help->help_type }}</p>
</div>

<!-- Description Field -->
<div class="form-group">
    {!! Form::label('description', __('models/helps.fields.description').':') !!}
    <p>{{ $help->description }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', __('models/helps.fields.created_at').':') !!}
    <p>{{ $help->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', __('models/helps.fields.updated_at').':') !!}
    <p>{{ $help->updated_at }}</p>
</div>

