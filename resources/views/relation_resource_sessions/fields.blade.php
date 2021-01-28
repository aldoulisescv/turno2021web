<!-- Resource Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('resource_id', __('models/relationResourceSessions.fields.resource_id').':') !!}
    {!! Form::select('resource_id', $resourceItems, null, ['class' => 'form-control']) !!}
</div>

<!-- Session Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('session_id', __('models/relationResourceSessions.fields.session_id').':') !!}
    {!! Form::select('session_id', $sessionItems, null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('relationResourceSessions.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>
