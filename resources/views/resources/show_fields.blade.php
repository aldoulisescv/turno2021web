<!-- Enabled Field -->
<div class="form-group">
    {!! Form::label('enabled', 'Enabled:') !!}
    <p>{{ $resource->enabled }}</p>
</div>

<!-- Establishment Id Field -->
<div class="form-group">
    {!! Form::label('establishment_id', 'Establishment Id:') !!}
    <p>{{ $resource->establishment_id }}</p>
</div>

<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $resource->name }}</p>
</div>

<!-- Selectable Field -->
<div class="form-group">
    {!! Form::label('selectable', 'Selectable:') !!}
    <p>{{ $resource->selectable }}</p>
</div>

<!-- Order Alpha Field -->
<div class="form-group">
    {!! Form::label('order_alpha', 'Order Alpha:') !!}
    <p>{{ $resource->order_alpha }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $resource->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $resource->updated_at }}</p>
</div>

