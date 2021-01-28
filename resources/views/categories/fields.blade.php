<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', __('models/categories.fields.name').':') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Parentcategory Field -->
<div class="form-group col-sm-6">
    {!! Form::label('parentCategory', __('models/categories.fields.parentCategory').':') !!}
    <?php $categoryItems=array(null=>' ')+$categoryItems; ?>
    {!! Form::select('parentCategory', $categoryItems, null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('categories.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>
