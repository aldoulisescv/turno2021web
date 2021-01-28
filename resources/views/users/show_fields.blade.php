<!-- 'bootstrap / Toggle Switch Enabled Field' -->
<div class="form-group">
 {!! Form::label('enabled', 'Enabled:') !!}
    <label class="switch switch-label switch-pill switch-primary  ml-2">
        {!! Form::hidden('enabled', 0) !!}
        {!! Form::checkbox('enabled', 1, null,  ['class' => 'switch-input']) !!}
        <span class="switch-slider" data-checked="On" data-unchecked="Off"></span>
    </label>
</div>

<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{!! $user->name !!}</p>
</div>

<!-- Last name Field -->
<div class="form-group">
    {!! Form::label('lastname', 'Last name:') !!}
    <p>{!! $user->lastname !!}</p>
</div>
<!-- User Name Field -->
<div class="form-group">
    {!! Form::label('username', 'User Name:') !!}
    <p>{!! $user->username !!}</p>
</div>

<!-- Email Field -->
<div class="form-group">
    {!! Form::label('email', 'Email:') !!}
    <p>{!! $user->email !!}</p>
</div>

<!-- Phone Field -->
<div class="form-group">
    {!! Form::label('phone', 'Phone:') !!}
    <p>{!! $user->phone !!}</p>
</div>

<!-- Role Field -->
<div class="form-group">
    {!! Form::label('role', 'Role:') !!}
    <p>{!!implode(' ', $user->getRoleNames()->toArray() ) !!}</p>
</div>
<!-- Establishment Field -->
<div class="form-group">
    {!! Form::label('establishment_id', 'Establishment:') !!}
    <p>{!!$user->establishment_id!!}</p>
</div>

<!-- Image Field -->
<div class="form-group">
    {!! Form::label('image', 'Image:') !!}
    <p>{!! $user->image !!}</p>
</div>

<!-- Registration Date Field -->
<div class="form-group">
    {!! Form::label('username', 'Registration Date:') !!}
    <p>{!! $user->username !!}</p>
</div>

<!-- Phone Verification Field -->
<div class="form-group">
    {!! Form::label('phone_verification', 'Phone Verification:') !!}
    <p>{!! $user->phone_verification !!}</p>
</div>

<!-- 'bootstrap / Toggle Switch Terms Field' -->
<div class="d-flex align-items-center form-group col-sm-6">
 {!! Form::label('terms', 'Terms:') !!}
    <label class="switch switch-label switch-pill switch-primary  ml-2">
        {!! Form::hidden('terms', 0) !!}
        {!! Form::checkbox('terms', 1, null,  ['class' => 'switch-input']) !!}
        <span class="switch-slider" data-checked="On" data-unchecked="Off"></span>
    </label>
</div>

<!-- 'bootstrap / Toggle Privacy Notice:' -->
<div class="d-flex align-items-center form-group col-sm-6">
 {!! Form::label('privacy_notice', 'Privacy Notice:') !!}
    <label class="switch switch-label switch-pill switch-primary  ml-2">
        {!! Form::hidden('privacy_notice', 0) !!}
        {!! Form::checkbox('privacy_notice', 1, null,  ['class' => 'switch-input']) !!}
        <span class="switch-slider" data-checked="On" data-unchecked="Off"></span>
    </label>
</div>


<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $user->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $user->updated_at !!}</p>
</div>

