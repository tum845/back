<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $category->id !!}</p>
</div>

<!-- Category Name Field -->
<div class="form-group">
    {!! Form::label('category_name', 'Category Name:') !!}
    <p>{!! $category->category_name !!}</p>
</div>

<!-- Icon Field -->
<div class="form-group">
    {!! Form::label('category_icon', 'Icon:') !!}
    <p>{!! $category->category_icon !!}</p>
</div>

<!-- Color Field -->
<div class="form-group">
    {!! Form::label('category_color', 'Color:') !!}
    <p>{!! $category->category_color !!}</p>
</div>

<!-- Brief Field -->
<div class="form-group">
    {!! Form::label('category_brief', 'Brief:') !!}
    <p>{!! $category->category_brief !!}</p>
</div>

<!-- Priority Field -->
<div class="form-group">
    {!! Form::label('category_priority', 'Priority:') !!}
    <p>{!! $category->category_priority !!}</p>
</div>

<!-- Publish Field -->
<div class="form-group">
    {!! Form::label('category_publish', 'Publish:') !!}
    <p>{!! $category->category_publish !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $category->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $category->updated_at !!}</p>
</div>

