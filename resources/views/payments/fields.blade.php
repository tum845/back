<!-- Payment Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('payment_name', 'Payment Name:') !!}
    {!! Form::text('payment_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Payment Code Field -->
<div class="form-group col-sm-6">
    {!! Form::label('payment_code', 'Payment Code:') !!}
    {!! Form::text('payment_code', null, ['class' => 'form-control']) !!}
</div>

<!-- Payment Image Field -->
<div class="form-group col-sm-6">
    {!! Form::label('payment_image', 'Payment Image:') !!}
    {!! Form::file('payment_image') !!}
</div>
<div class="clearfix"></div>

<!-- Payment Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('payment_description', 'Payment Description:') !!}
    {!! Form::textarea('payment_description', null, ['class' => 'form-control']) !!}
</div>

<!-- Payment Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('payment_status', 'Payment Status:') !!}
    {!! Form::select('payment_status', ['1' => 'Active', '0' => 'Non Active'], null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('payments.index') !!}" class="btn btn-default">Cancel</a>
</div>
