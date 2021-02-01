<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', __('models/prospects.fields.name').':') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Owner Field -->
<div class="form-group col-sm-6">
    {!! Form::label('owner', __('models/prospects.fields.owner').':') !!}
    {!! Form::text('owner', null, ['class' => 'form-control']) !!}
</div>

<!-- Image Field -->
<div class="form-group col-sm-6">
    {!! Form::label('image', __('models/prospects.fields.image').':') !!}
    {!! Form::text('image', null, ['class' => 'form-control']) !!}
</div>

<!-- Latitude Field -->
<div class="form-group col-sm-6">
    {!! Form::label('latitude', __('models/prospects.fields.latitude').':') !!}
    {!! Form::text('latitude', null, ['class' => 'form-control']) !!}
</div>

<!-- Longitude Field -->
<div class="form-group col-sm-6">
    {!! Form::label('longitude', __('models/prospects.fields.longitude').':') !!}
    {!! Form::text('longitude', null, ['class' => 'form-control']) !!}
</div>

<!-- Address Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('address', __('models/prospects.fields.address').':') !!}
    {!! Form::textarea('address', null, ['class' => 'form-control']) !!}
</div>

<!-- Phone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('phone', __('models/prospects.fields.phone').':') !!}
    {!! Form::text('phone', null, ['class' => 'form-control']) !!}
</div>

<!-- 'bootstrap / Toggle Switch Sent Wa Field' -->
<div class="d-flex align-items-center form-group col-sm-6">
 {!! Form::label('sent_wa', __('models/prospects.fields.sent_wa').':') !!}
    <label class="switch switch-label switch-pill switch-primary  ml-2">
        {!! Form::hidden('sent_wa', 0) !!}
        {!! Form::checkbox('sent_wa', 1, null,  ['class' => 'switch-input']) !!}
        <span class="switch-slider" data-checked="On" data-unchecked="Off"></span>
    </label>
</div>


<!-- Facebook Field -->
<div class="form-group col-sm-6">
    {!! Form::label('facebook', __('models/prospects.fields.facebook').':') !!}
    {!! Form::text('facebook', null, ['class' => 'form-control']) !!}
</div>

<!-- 'bootstrap / Toggle Switch Sent Fb Field' -->
<div class="d-flex align-items-center form-group col-sm-6">
 {!! Form::label('sent_fb', __('models/prospects.fields.sent_fb').':') !!}
    <label class="switch switch-label switch-pill switch-primary  ml-2">
        {!! Form::hidden('sent_fb', 0) !!}
        {!! Form::checkbox('sent_fb', 1, null,  ['class' => 'switch-input']) !!}
        <span class="switch-slider" data-checked="On" data-unchecked="Off"></span>
    </label>
</div>


<!-- Instagram Field -->
<div class="form-group col-sm-6">
    {!! Form::label('instagram', __('models/prospects.fields.instagram').':') !!}
    {!! Form::text('instagram', null, ['class' => 'form-control']) !!}
</div>

<!-- 'bootstrap / Toggle Switch Sent Ig Field' -->
<div class="d-flex align-items-center form-group col-sm-6">
 {!! Form::label('sent_ig', __('models/prospects.fields.sent_ig').':') !!}
    <label class="switch switch-label switch-pill switch-primary  ml-2">
        {!! Form::hidden('sent_ig', 0) !!}
        {!! Form::checkbox('sent_ig', 1, null,  ['class' => 'switch-input']) !!}
        <span class="switch-slider" data-checked="On" data-unchecked="Off"></span>
    </label>
</div>


<!-- Notes Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('notes', __('models/prospects.fields.notes').':') !!}
    {!! Form::textarea('notes', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('prospects.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>
