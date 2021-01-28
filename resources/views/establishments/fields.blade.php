<!-- 'bootstrap / Toggle Switch Enabled Field' -->
<div class="d-flex align-items-center form-group col-sm-6">
 {!! Form::label('enabled', __('models/establishments.fields.enabled').':') !!}
    <label class="switch switch-label switch-pill switch-primary  ml-2">
        {!! Form::hidden('enabled', 0) !!}
        {!! Form::checkbox('enabled', 1, null,  ['class' => 'switch-input']) !!}
        <span class="switch-slider" data-checked="On" data-unchecked="Off"></span>
    </label>
</div>


<!-- Category Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('category_id', __('models/establishments.fields.category_id').':') !!}
    {!! Form::select('category_id', $categoryItems, null, ['class' => 'form-control']) !!}
</div>

<!-- Subcategory Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('subcategory_id', __('models/establishments.fields.subcategory_id').':') !!}
    {!! Form::select('subcategory_id', $categoryItems, null, ['class' => 'form-control']) !!}
</div>

<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', __('models/establishments.fields.name').':') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Logo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('logo', __('models/establishments.fields.logo').':') !!}
    {!! Form::text('logo', null, ['class' => 'form-control']) !!}
</div>

<!-- Stepping Field -->
<div class="form-group col-sm-6">
    {!! Form::label('stepping', __('models/establishments.fields.stepping').':') !!}
    {!! Form::number('stepping', null, ['class' => 'form-control']) !!}
</div>

<!-- Street Field -->
<div class="form-group col-sm-6">
    {!! Form::label('street', __('models/establishments.fields.street').':') !!}
    {!! Form::text('street', null, ['class' => 'form-control']) !!}
</div>

<!-- Num Ext Field -->
<div class="form-group col-sm-6">
    {!! Form::label('num_ext', __('models/establishments.fields.num_ext').':') !!}
    {!! Form::text('num_ext', null, ['class' => 'form-control']) !!}
</div>

<!-- Num Int Field -->
<div class="form-group col-sm-6">
    {!! Form::label('num_int', __('models/establishments.fields.num_int').':') !!}
    {!! Form::text('num_int', null, ['class' => 'form-control']) !!}
</div>

<!-- Postal Code Field -->
<div class="form-group col-sm-6">
    {!! Form::label('postal_code', __('models/establishments.fields.postal_code').':') !!}
    {!! Form::text('postal_code', null, ['class' => 'form-control']) !!}
</div>

<!-- Zone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('zone', __('models/establishments.fields.zone').':') !!}
    {!! Form::text('zone', null, ['class' => 'form-control']) !!}
</div>

<!-- City Field -->
<div class="form-group col-sm-6">
    {!! Form::label('city', __('models/establishments.fields.city').':') !!}
    {!! Form::text('city', null, ['class' => 'form-control']) !!}
</div>

<!-- State Field -->
<div class="form-group col-sm-6">
    {!! Form::label('state', __('models/establishments.fields.state').':') !!}
    {!! Form::text('state', null, ['class' => 'form-control']) !!}
</div>

<!-- Country Field -->
<div class="form-group col-sm-6">
    {!! Form::label('country', __('models/establishments.fields.country').':') !!}
    {!! Form::text('country', null, ['class' => 'form-control']) !!}
</div>

<!-- Latitude Field -->
<div class="form-group col-sm-6">
    {!! Form::label('latitude', __('models/establishments.fields.latitude').':') !!}
    {!! Form::text('latitude', null, ['class' => 'form-control']) !!}
</div>

<!-- Longitude Field -->
<div class="form-group col-sm-6">
    {!! Form::label('longitude', __('models/establishments.fields.longitude').':') !!}
    {!! Form::text('longitude', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', __('models/establishments.fields.email').':') !!}
    {!! Form::text('email', null, ['class' => 'form-control']) !!}
</div>

<!-- Phone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('phone', __('models/establishments.fields.phone').':') !!}
    {!! Form::text('phone', null, ['class' => 'form-control']) !!}
</div>

<!-- Holidays Extra Field -->
<div class="form-group col-sm-6">
    {!! Form::label('holidays_extra', __('models/establishments.fields.holidays_extra').':') !!}
    {!! Form::text('holidays_extra', null, ['class' => 'form-control']) !!}
</div>

<!-- 'bootstrap / Toggle Switch Holidays Official Field' -->
<div class="d-flex align-items-center form-group col-sm-6">
 {!! Form::label('holidays_official', __('models/establishments.fields.holidays_official').':') !!}
    <label class="switch switch-label switch-pill switch-primary  ml-2">
        {!! Form::hidden('holidays_official', 0) !!}
        {!! Form::checkbox('holidays_official', 1, null,  ['class' => 'switch-input']) !!}
        <span class="switch-slider" data-checked="On" data-unchecked="Off"></span>
    </label>
</div>


<!-- 'bootstrap / Toggle Switch Help Tooltip Field' -->
<div class="d-flex align-items-center form-group col-sm-6">
 {!! Form::label('help_tooltip', __('models/establishments.fields.help_tooltip').':') !!}
    <label class="switch switch-label switch-pill switch-primary  ml-2">
        {!! Form::hidden('help_tooltip', 0) !!}
        {!! Form::checkbox('help_tooltip', 1, null,  ['class' => 'switch-input']) !!}
        <span class="switch-slider" data-checked="On" data-unchecked="Off"></span>
    </label>
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('establishments.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>
