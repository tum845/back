<!-- Cupon Code Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cupon_code', 'Code:') !!}
    {!! Form::text('cupon_code', null, ['class' => 'form-control']) !!}
</div>

<!-- Cupon Object Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cupon_object', 'Object:') !!}
    {!! Form::select('cupon_object', ['1' => 'Groceries', '2' => 'Courier', '3' => 'Flat'], null, ['class' => 'form-control']) !!}
</div>

<!-- Cupon Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cupon_type', 'Type:') !!}
    {!! Form::select('cupon_type', ['1' => 'Persentase', '2' => 'Nominal'], null, ['class' => 'form-control']) !!}
</div>

<!-- Cupon Is Recuring Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cupon_is_recuring', 'Is Recuring:') !!}
    {!! Form::select('cupon_is_recuring', ['0' => 'No', '1' => 'Yes'], null, ['class' => 'form-control']) !!}
</div>

<!-- Image Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('cupon_description', 'Description:') !!}
    {!! Form::textarea('cupon_description', null, ['class' => 'form-control']) !!}
</div>

<!-- Cupon Nominal Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cupon_nominal', 'Nominal') !!}
    {!! Form::text('cupon_nominal', null, ['class' => 'form-control']) !!}
</div>

<!-- Cupon Start Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cupon_start', 'Start:') !!}
    {!! Form::date('cupon_start', null, ['class' => 'form-control']) !!}
</div>

<!-- Cupon End Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cupon_end', 'End:') !!}
    {!! Form::date('cupon_end', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('cupons.index') !!}" class="btn btn-default">Cancel</a>
</div>
