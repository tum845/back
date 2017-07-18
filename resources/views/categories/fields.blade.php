<!-- Category Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('category_name', 'Category Name:') !!}
    {!! Form::text('category_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Icon Field -->
<div class="form-group col-sm-6">
    {!! Form::label('category_icon', 'Icon:') !!}
    {!! Form::text('category_icon', null, ['class' => 'form-control']) !!}
</div>

<!-- Color Field -->
<div class="form-group col-sm-6">
    {!! Form::label('category_color', 'Color:') !!}
    {!! Form::text('category_color', null, ['class' => 'form-control']) !!}
</div>

<!-- Brief Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('category_brief', 'Brief:') !!}
    {!! Form::textarea('category_brief', null, ['class' => 'form-control']) !!}
</div>

<!-- Priority Field -->
<div class="form-group col-sm-6">
    {!! Form::label('category_priority', 'Priority:') !!}
    {!! Form::text('category_priority', null, ['class' => 'form-control']) !!}
</div>

<!-- Publish Field -->
<div class="form-group col-sm-6">
    {!! Form::label('category_publish', 'Publish:') !!}
    {!! Form::select('category_publish', ['1' => 'Publish', '0' => 'Draft'], null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('categories.index') !!}" class="btn btn-default">Cancel</a>
</div>
