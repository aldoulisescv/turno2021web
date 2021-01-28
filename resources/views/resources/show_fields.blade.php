<!-- Enabled Field -->
<div class="form-group">
    {!! Form::label('enabled', __('models/resources.fields.enabled').':') !!}
    <p>{{ $resource->enabled }}</p>
</div>

<!-- Establishment Id Field -->
<div class="form-group">
    {!! Form::label('establishment_id', __('models/resources.fields.establishment_id').':') !!}
    <p>{{ $resource->establishment_id }}</p>
</div>

<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', __('models/resources.fields.name').':') !!}
    <p>{{ $resource->name }}</p>
</div>

<!-- Selectable Field -->
<div class="form-group">
    {!! Form::label('selectable', __('models/resources.fields.selectable').':') !!}
    <p>{{ $resource->selectable }}</p>
</div>

<!-- Order Alpha Field -->
<div class="form-group">
    {!! Form::label('order_alpha', __('models/resources.fields.order_alpha').':') !!}
    <p>{{ $resource->order_alpha }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', __('models/resources.fields.created_at').':') !!}
    <p>{{ $resource->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', __('models/resources.fields.updated_at').':') !!}
    <p>{{ $resource->updated_at }}</p>
</div>

