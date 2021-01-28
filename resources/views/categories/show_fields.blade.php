<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', __('models/categories.fields.name').':') !!}
    <p>{{ $category->name }}</p>
</div>

<!-- Parentcategory Field -->
<div class="form-group">
    {!! Form::label('parentCategory', __('models/categories.fields.parentCategory').':') !!}
    <p>{{ $categoryItems[$category->parentCategory] ?? '' }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', __('models/categories.fields.created_at').':') !!}
    <p>{{ $category->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', __('models/categories.fields.updated_at').':') !!}
    <p>{{ $category->updated_at }}</p>
</div>

