<!-- 'bootstrap / Toggle Switch Enabled Field' -->
<div class="d-flex align-items-center form-group col-sm-6">
 {!! Form::label('enabled', __('models/sessions.fields.enabled').':') !!}
    <label class="switch switch-label switch-pill switch-primary  ml-2">
        {!! Form::hidden('enabled', 0) !!}
        {!! Form::checkbox('enabled', 1, null,  ['class' => 'switch-input']) !!}
        <span class="switch-slider" data-checked="On" data-unchecked="Off"></span>
    </label>
</div>


<!-- Establishment Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('establishment_id', __('models/sessions.fields.establishment_id').':') !!}
    {!! Form::select('establishment_id', $establishmentItems, null, ['class' => 'form-control']) !!}
</div>

<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', __('models/sessions.fields.name').':') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Duration Field -->
<div class="form-group col-sm-6">
    {!! Form::label('duration', __('models/sessions.fields.duration').':') !!}
    {!! Form::text('duration', null, ['class' => 'form-control']) !!}
</div>

<!-- Cost Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cost', __('models/sessions.fields.cost').':') !!}
    {!! Form::number('cost', null, ['class' => 'form-control']) !!}
</div>

<!-- Max Days Schedule Field -->
<div class="form-group col-sm-6">
    {!! Form::label('max_days_schedule', __('models/sessions.fields.max_days_schedule').':') !!}
    {!! Form::number('max_days_schedule', null, ['class' => 'form-control']) !!}
</div>

<!-- Max Hours Schedule Field -->
<div class="form-group col-sm-6">
    {!! Form::label('max_hours_schedule', __('models/sessions.fields.max_hours_schedule').':') !!}
    {!! Form::number('max_hours_schedule', null, ['class' => 'form-control']) !!}
</div>

<!-- Max Minutes Schedule Field -->
<div class="form-group col-sm-6">
    {!! Form::label('max_minutes_schedule', __('models/sessions.fields.max_minutes_schedule').':') !!}
    {!! Form::number('max_minutes_schedule', null, ['class' => 'form-control']) !!}
</div>

<!-- Min Days Schedule Field -->
<div class="form-group col-sm-6">
    {!! Form::label('min_days_schedule', __('models/sessions.fields.min_days_schedule').':') !!}
    {!! Form::number('min_days_schedule', null, ['class' => 'form-control']) !!}
</div>

<!-- Min Hours Schedule Field -->
<div class="form-group col-sm-6">
    {!! Form::label('min_hours_schedule', __('models/sessions.fields.min_hours_schedule').':') !!}
    {!! Form::number('min_hours_schedule', null, ['class' => 'form-control']) !!}
</div>

<!-- Min Minutes Schedule Field -->
<div class="form-group col-sm-6">
    {!! Form::label('min_minutes_schedule', __('models/sessions.fields.min_minutes_schedule').':') !!}
    {!! Form::number('min_minutes_schedule', null, ['class' => 'form-control']) !!}
</div>

<!-- Standby Time Field -->
<div class="form-group col-sm-6">
    {!! Form::label('standby_time', __('models/sessions.fields.standby_time').':') !!}
    {!! Form::text('standby_time', null, ['class' => 'form-control','id'=>'standby_time']) !!}
</div>

@push('scripts')
   <script type="text/javascript">
           $('#standby_time').datetimepicker({
               format: 'YYYY-MM-DD HH:mm:ss',
               useCurrent: true,
               icons: {
                   up: "icon-arrow-up-circle icons font-2xl",
                   down: "icon-arrow-down-circle icons font-2xl"
               },
               sideBySide: true
           })
       </script>
@endpush


<!-- Time Btwn Session Field -->
<div class="form-group col-sm-6">
    {!! Form::label('time_btwn_session', __('models/sessions.fields.time_btwn_session').':') !!}
    {!! Form::text('time_btwn_session', null, ['class' => 'form-control','id'=>'time_btwn_session']) !!}
</div>

@push('scripts')
   <script type="text/javascript">
           $('#time_btwn_session').datetimepicker({
               format: 'YYYY-MM-DD HH:mm:ss',
               useCurrent: true,
               icons: {
                   up: "icon-arrow-up-circle icons font-2xl",
                   down: "icon-arrow-down-circle icons font-2xl"
               },
               sideBySide: true
           })
       </script>
@endpush


<!-- End Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('end_date', __('models/sessions.fields.end_date').':') !!}
    {!! Form::text('end_date', null, ['class' => 'form-control','id'=>'end_date']) !!}
</div>

@push('scripts')
   <script type="text/javascript">
           $('#end_date').datetimepicker({
               format: 'YYYY-MM-DD HH:mm:ss',
               useCurrent: true,
               icons: {
                   up: "icon-arrow-up-circle icons font-2xl",
                   down: "icon-arrow-down-circle icons font-2xl"
               },
               sideBySide: true
           })
       </script>
@endpush


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('sessions.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>
