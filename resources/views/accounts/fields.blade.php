<!-- Amount Field -->
<div class="form-group col-sm-6">
    {!! Form::label('amount', 'Amount:') !!}
    {!! Form::text('amount', null, ['class' => 'form-control']) !!}
</div>

<!-- Account Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('account_type', 'Account Type:') !!}
    {!! Form::select('account_type', ['1' => 'TopUp', '2' => 'Use'], null, ['class' => 'form-control']) !!}
</div>

<!-- Transaction Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('transaction_type', 'Transaction Type:') !!}
    {!! Form::select('transaction_type', ['1' => 'Satu', '2' => 'Dua'], null, ['class' => 'form-control']) !!}
</div>

<!-- Transaction Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('transaction_status', 'Transaction Status:') !!}
    {!! Form::select('transaction_status', ['1' => 'Active', '0' => 'Pending'], null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('accounts.index') !!}" class="btn btn-default">Cancel</a>
</div>
