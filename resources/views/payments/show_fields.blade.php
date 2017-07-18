<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $payment->id !!}</p>
</div>

<!-- Payment Name Field -->
<div class="form-group">
    {!! Form::label('payment_name', 'Payment Name:') !!}
    <p>{!! $payment->payment_name !!}</p>
</div>

<!-- Payment Code Field -->
<div class="form-group">
    {!! Form::label('payment_code', 'Payment Code:') !!}
    <p>{!! $payment->payment_code !!}</p>
</div>

<!-- Payment Image Field -->
<div class="form-group">
    {!! Form::label('payment_image', 'Payment Image:') !!}
    <p>{!! $payment->payment_image !!}</p>
</div>

<!-- Payment Description Field -->
<div class="form-group">
    {!! Form::label('payment_description', 'Payment Description:') !!}
    <p>{!! $payment->payment_description !!}</p>
</div>

<!-- Payment Status Field -->
<div class="form-group">
    {!! Form::label('payment_status', 'Payment Status:') !!}
    <p>{!! $payment->payment_status !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $payment->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $payment->updated_at !!}</p>
</div>

