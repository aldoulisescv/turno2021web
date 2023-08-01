<!-- 'bootstrap / Toggle Switch Enabled Field' -->
<div class="d-flex align-items-center form-group col-sm-6">
 {!! Form::label('enabled', 'Enabled:') !!}
    <label class="switch switch-label switch-pill switch-primary  ml-2">
        {!! Form::hidden('enabled', 0) !!}
        {!! Form::checkbox('enabled', 1, null,  ['class' => 'switch-input']) !!}
        <span class="switch-slider" data-checked="On" data-unchecked="Off"></span>
    </label>
</div>

<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Last name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('lastname', 'Last Name') !!}
    {!! Form::text('lastname', null, ['class' => 'form-control']) !!}
</div>

<!-- User_name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_name', 'User_name') !!}
    {!! Form::text('user_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email') !!}
    {!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>

<!-- Phone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('phone', 'Phone:') !!}
    {!! Form::text('phone', null, ['class' => 'form-control']) !!}
</div>

<!-- Role  Field -->
<div class="form-group col-sm-6">
    {!! Form::label('role', 'Role :') !!}
    {!! Form::select('role', $roleItems, isset($user) ? $user->roles()->pluck('name'):[], ['class' => 'form-control']) !!}
</div>

<!-- Establishment  Field -->
<div class="form-group col-sm-6">
    {!! Form::label('establishment_id', 'Establishment :') !!}
    {!! Form::select('establishment_id', $establishmentItems, null, ['class' => 'form-control']) !!}
</div>

<!-- Password Field -->
<div class="form-group col-sm-6">
    {!! Form::label('password', 'Password') !!}
    {!! Form::password('password', ['class' => 'form-control']) !!}
</div>

<!-- Confirmation Password Field -->
<div class="form-group col-sm-6">
    {!! Form::label('password', 'Password Confirmation') !!}
    {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
</div>

<!-- Api token Field -->
<div class="form-group col-sm-6">
    {!! Form::label('api_token', 'Api Token') !!}
    {!! Form::text('api_token', null, ['class' => 'form-control']) !!}
</div>

<!-- Ref Code Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ref_code', 'Ref Code') !!}
    {!! Form::text('ref_code', null, ['class' => 'form-control']) !!}
</div>

<!-- Image Field -->
<div class="form-group col-sm-6">
    {!! Form::label('imagen', 'Image') !!}
    {!! Form::text('imagen', null, ['class' => 'form-control']) !!}
</div>

<!-- Registration Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('registration_date', 'Registration Date') !!}
    {!! Form::text('registration_date', null, ['class' => 'form-control']) !!}
</div>

<!-- Phone Verification Field -->
<div class="form-group col-sm-6">
    {!! Form::label('phone_verification', 'Phone Verification') !!}
    {!! Form::text('phone_verification', null, ['class' => 'form-control']) !!}
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

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('users.index') !!}" class="btn btn-default">Cancel</a>
</div>

<? //var_dump($user) ?>