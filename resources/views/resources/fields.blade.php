<!-- 'bootstrap / Toggle Switch Enabled Field' -->
<div class="d-flex align-items-center form-group col-sm-6">
 {!! Form::label('enabled', __('models/resources.fields.enabled').':') !!}
    <label class="switch switch-label switch-pill switch-primary  ml-2">
        {!! Form::hidden('enabled', 0) !!}
        {!! Form::checkbox('enabled', 1, null,  ['class' => 'switch-input']) !!}
        <span class="switch-slider" data-checked="On" data-unchecked="Off"></span>
    </label>
</div>


<!-- Establishment Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('establishment_id', __('models/resources.fields.establishment_id').':') !!}
    {!! Form::select('establishment_id', $establishmentItems, null, ['class' => 'form-control']) !!}
</div>

<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', __('models/resources.fields.name').':') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- 'bootstrap / Toggle Switch Selectable Field' -->
<div class="d-flex align-items-center form-group col-sm-6">
 {!! Form::label('selectable', __('models/resources.fields.selectable').':') !!}
    <label class="switch switch-label switch-pill switch-primary  ml-2">
        {!! Form::hidden('selectable', 0) !!}
        {!! Form::checkbox('selectable', 1, null,  ['class' => 'switch-input']) !!}
        <span class="switch-slider" data-checked="On" data-unchecked="Off"></span>
    </label>
</div>


<!-- 'bootstrap / Toggle Switch Order Alpha Field' -->
<div class="d-flex align-items-center form-group col-sm-6">
 {!! Form::label('order_alpha', __('models/resources.fields.order_alpha').':') !!}
    <label class="switch switch-label switch-pill switch-primary  ml-2">
        {!! Form::hidden('order_alpha', 0) !!}
        {!! Form::checkbox('order_alpha', 1, null,  ['class' => 'switch-input']) !!}
        <span class="switch-slider" data-checked="On" data-unchecked="Off"></span>
    </label>
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('resources.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>
