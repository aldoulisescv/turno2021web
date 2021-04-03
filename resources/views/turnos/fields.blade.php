<!-- User Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_id', __('models/turnos.fields.user_id').':') !!}
    {!! Form::select('user_id', $userItems, null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', __('models/turnos.fields.email').':') !!}
    {!! Form::text('email', null, ['class' => 'form-control']) !!}
</div>

<!-- Phone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('phone', __('models/turnos.fields.phone').':') !!}
    {!! Form::text('phone', null, ['class' => 'form-control']) !!}
</div>

<!-- Establishment Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('establishment_id', __('models/turnos.fields.establishment_id').':') !!}
    {!! Form::select('establishment_id', $establishmentItems, null, ['class' => 'form-control']) !!}
</div>

<!-- Resource Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('resource_id', __('models/turnos.fields.resource_id').':') !!}
    {!! Form::select('resource_id', $resourceItems, null, ['class' => 'form-control']) !!}
</div>

<!-- Session Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('session_id', __('models/turnos.fields.session_id').':') !!}
    {!! Form::select('session_id', $sessionItems, null, ['class' => 'form-control']) !!}
</div>

<!-- Status Turno Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status_turno_id', __('models/turnos.fields.status_turno_id').':') !!}
    {!! Form::select('status_turno_id', $status_turnoItems, null, ['class' => 'form-control']) !!}
</div>

<!-- Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date', __('models/turnos.fields.date').':') !!}
    {!! Form::text('date', null, ['class' => 'form-control','id'=>'date']) !!}
</div>

@push('scripts')
   <script type="text/javascript">
           $('#date').datetimepicker({
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


<!-- Start Time Field -->
<div class="form-group col-sm-6">
    {!! Form::label('start_time', __('models/turnos.fields.start_time').':') !!}
    {!! Form::text('start_time', null, ['class' => 'form-control','id'=>'start_time']) !!}
</div>

@push('scripts')
   <script type="text/javascript">
           $('#start_time').datetimepicker({
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


<!-- End Time Field -->
<div class="form-group col-sm-6">
    {!! Form::label('end_time', __('models/turnos.fields.end_time').':') !!}
    {!! Form::text('end_time', null, ['class' => 'form-control','id'=>'end_time']) !!}
</div>

@push('scripts')
   <script type="text/javascript">
           $('#end_time').datetimepicker({
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
    <a href="{{ route('turnos.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>
