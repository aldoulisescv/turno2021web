<!-- Status Help Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status_help_id', __('models/helps.fields.status_help_id').':') !!}
    {!! Form::select('status_help_id', $status_turnoItems, null, ['class' => 'form-control']) !!}
</div>

<!-- User Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_id', __('models/helps.fields.user_id').':') !!}
    {!! Form::select('user_id', $userItems, null, ['class' => 'form-control']) !!}
</div>

<!-- Help Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('help_type', __('models/helps.fields.help_type').':') !!}
    {!! Form::text('help_type', null, ['class' => 'form-control']) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-6">
    {!! Form::label('description', __('models/helps.fields.description').':') !!}
    {!! Form::text('description', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('helps.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>
