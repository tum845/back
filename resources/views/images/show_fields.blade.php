<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $image->id !!}</p>
</div>

<!-- Image Name Field -->
<div class="form-group">
    {!! Form::label('image_name', 'Image Name:') !!}
    <p>{!! $image->image_name !!}</p>
</div>

<!-- Image Description Field -->
<div class="form-group">
    {!! Form::label('image_description', 'Image Description:') !!}
    <p>{!! $image->image_description !!}</p>
</div>

<!-- Image File Field -->
<div class="form-group">
    {!! Form::label('image_file', 'Image File:') !!}
    <p>{!! $image->image_file !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $image->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $image->updated_at !!}</p>
</div>

