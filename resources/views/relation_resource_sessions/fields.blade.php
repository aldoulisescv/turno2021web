<!-- Resource Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('resource_id', 'Resource Id:') !!}
    {!! Form::select('resource_id', $resourceItems, null, ['class' => 'form-control']) !!}
</div>

<!-- Session Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('session_id', 'Session Id:') !!}
    {!! Form::select('session_id', $sessionItems, null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('relationResourceSessions.index') }}" class="btn btn-secondary">Cancel</a>
</div>
