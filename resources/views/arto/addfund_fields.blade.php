<div class="form-group col-sm-6">
    {!! Form::label('transaction_type_id', 'Transaction Type:') !!}
    {!! Form::select('transaction_type_id', \App\Models\TransactionType::where('status',1)->pluck('code', 'id')->all() , null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('amount', 'Amount:') !!}
    {!! Form::select('amount', [ '30000' =>'Rp 30.000,00', '50000' =>'Rp 50.000,00','100000' =>'Rp 100.000,00','150000' =>'Rp 150.000,00', '200000' =>'Rp 200.000,00', '300000' =>'Rp 300.000,00','500000' =>'Rp 500.000,00',] , null, ['class' => 'form-control']) !!}
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('profiles.index') !!}" class="btn btn-default">Cancel</a>
</div>
