<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $account->id !!}</p>
</div>

<!-- Amount Field -->
<div class="form-group">
    {!! Form::label('amount', 'Amount:') !!}
    <p>{!! $account->amount !!}</p>
</div>

<!-- Account Type Field -->
<div class="form-group">
    {!! Form::label('account_type', 'Account Type:') !!}
    <p>{!! $account->account_type !!}</p>
</div>

<!-- Transaction Type Field -->
<div class="form-group">
    {!! Form::label('transaction_type', 'Transaction Type:') !!}
    <p>{!! $account->transaction_type !!}</p>
</div>

<!-- Transaction Date Field -->
<div class="form-group">
    {!! Form::label('transaction_date', 'Transaction Date:') !!}
    <p>{!! $account->transaction_date !!}</p>
</div>

<!-- Transaction Status Field -->
<div class="form-group">
    {!! Form::label('transaction_status', 'Transaction Status:') !!}
    <p>{!! $account->transaction_status !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $account->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $account->updated_at !!}</p>
</div>

