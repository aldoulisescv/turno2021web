<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Parentcategory Field -->
<div class="form-group col-sm-6">
    {!! Form::label('parentCategory', 'Parentcategory:') !!}
    <?php $categoryItems=array(null=>' ')+$categoryItems; ?>
    {!! Form::select('parentCategory', $categoryItems, null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('categories.index') }}" class="btn btn-secondary">Cancel</a>
</div>
