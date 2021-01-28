<!-- 'bootstrap / Toggle Switch Enabled Field' -->
<div class="d-flex align-items-center form-group col-sm-6">
 {!! Form::label('enabled', __('models/schedules.fields.enabled').':') !!}
    <label class="switch switch-label switch-pill switch-primary  ml-2">
        {!! Form::hidden('enabled', 0) !!}
        {!! Form::checkbox('enabled', 1, null,  ['class' => 'switch-input']) !!}
        <span class="switch-slider" data-checked="On" data-unchecked="Off"></span>
    </label>
</div>


<!-- Resource Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('resource_id', __('models/schedules.fields.resource_id').':') !!}
    {!! Form::select('resource_id', $resourceItems, null, ['class' => 'form-control']) !!}
</div>

<!-- Start Hour Field -->
<div class="form-group col-sm-6">
    {!! Form::label('start_hour', __('models/schedules.fields.start_hour').':') !!}
    {!! Form::text('start_hour', null, ['class' => 'form-control','id'=>'start_hour']) !!}
</div>

@push('scripts')
   <script type="text/javascript">
           $('#start_hour').datetimepicker({
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


<!-- End Hour Field -->
<div class="form-group col-sm-6">
    {!! Form::label('end_hour', __('models/schedules.fields.end_hour').':') !!}
    {!! Form::text('end_hour', null, ['class' => 'form-control','id'=>'end_hour']) !!}
</div>

@push('scripts')
   <script type="text/javascript">
           $('#end_hour').datetimepicker({
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


<!-- 'bootstrap / Toggle Switch Sunday Field' -->
<div class="d-flex align-items-center form-group col-sm-6">
 {!! Form::label('sunday', __('models/schedules.fields.sunday').':') !!}
    <label class="switch switch-label switch-pill switch-primary  ml-2">
        {!! Form::hidden('sunday', 0) !!}
        {!! Form::checkbox('sunday', 1, null,  ['class' => 'switch-input']) !!}
        <span class="switch-slider" data-checked="On" data-unchecked="Off"></span>
    </label>
</div>


<!-- 'bootstrap / Toggle Switch Monday Field' -->
<div class="d-flex align-items-center form-group col-sm-6">
 {!! Form::label('monday', __('models/schedules.fields.monday').':') !!}
    <label class="switch switch-label switch-pill switch-primary  ml-2">
        {!! Form::hidden('monday', 0) !!}
        {!! Form::checkbox('monday', 1, null,  ['class' => 'switch-input']) !!}
        <span class="switch-slider" data-checked="On" data-unchecked="Off"></span>
    </label>
</div>


<!-- 'bootstrap / Toggle Switch Tuesday Field' -->
<div class="d-flex align-items-center form-group col-sm-6">
 {!! Form::label('tuesday', __('models/schedules.fields.tuesday').':') !!}
    <label class="switch switch-label switch-pill switch-primary  ml-2">
        {!! Form::hidden('tuesday', 0) !!}
        {!! Form::checkbox('tuesday', 1, null,  ['class' => 'switch-input']) !!}
        <span class="switch-slider" data-checked="On" data-unchecked="Off"></span>
    </label>
</div>


<!-- 'bootstrap / Toggle Switch Wednesday Field' -->
<div class="d-flex align-items-center form-group col-sm-6">
 {!! Form::label('wednesday', __('models/schedules.fields.wednesday').':') !!}
    <label class="switch switch-label switch-pill switch-primary  ml-2">
        {!! Form::hidden('wednesday', 0) !!}
        {!! Form::checkbox('wednesday', 1, null,  ['class' => 'switch-input']) !!}
        <span class="switch-slider" data-checked="On" data-unchecked="Off"></span>
    </label>
</div>


<!-- 'bootstrap / Toggle Switch Thrusday Field' -->
<div class="d-flex align-items-center form-group col-sm-6">
 {!! Form::label('thrusday', __('models/schedules.fields.thrusday').':') !!}
    <label class="switch switch-label switch-pill switch-primary  ml-2">
        {!! Form::hidden('thrusday', 0) !!}
        {!! Form::checkbox('thrusday', 1, null,  ['class' => 'switch-input']) !!}
        <span class="switch-slider" data-checked="On" data-unchecked="Off"></span>
    </label>
</div>


<!-- 'bootstrap / Toggle Switch Friday Field' -->
<div class="d-flex align-items-center form-group col-sm-6">
 {!! Form::label('friday', __('models/schedules.fields.friday').':') !!}
    <label class="switch switch-label switch-pill switch-primary  ml-2">
        {!! Form::hidden('friday', 0) !!}
        {!! Form::checkbox('friday', 1, null,  ['class' => 'switch-input']) !!}
        <span class="switch-slider" data-checked="On" data-unchecked="Off"></span>
    </label>
</div>


<!-- 'bootstrap / Toggle Switch Saturday Field' -->
<div class="d-flex align-items-center form-group col-sm-6">
 {!! Form::label('saturday', __('models/schedules.fields.saturday').':') !!}
    <label class="switch switch-label switch-pill switch-primary  ml-2">
        {!! Form::hidden('saturday', 0) !!}
        {!! Form::checkbox('saturday', 1, null,  ['class' => 'switch-input']) !!}
        <span class="switch-slider" data-checked="On" data-unchecked="Off"></span>
    </label>
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('schedules.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>
