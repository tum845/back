<!-- Image Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('image_name', 'Image Name:') !!}
    {!! Form::text('image_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Image Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('image_description', 'Image Description:') !!}
    {!! Form::textarea('image_description', null, ['class' => 'form-control']) !!}
</div>

<!-- Image File Field -->
<div class="form-group col-sm-6">
    {!! Form::label('image_file', 'Image File:') !!}
    {!! Form::file('image_file') !!}
</div>
<div class="clearfix"></div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('images.index') !!}" class="btn btn-default">Cancel</a>
</div>
