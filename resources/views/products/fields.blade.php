<!-- Market Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('market_id', 'Market Id:') !!}
    {!! Form::select('market_id', \App\Models\Market::pluck('market_name', 'id')->all() , null, ['class' => 'form-control']) !!}
</div>

<!-- Product Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('product_name', 'Product Name:') !!}
    {!! Form::text('product_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Product Image Field -->
<div class="form-group col-sm-6">
    {!! Form::label('product_image', 'Product Image:') !!}
    {!! Form::file('product_image') !!}
</div>
<div class="clearfix"></div>

<!-- Product Price Market Field -->
<div class="form-group col-sm-6">
    {!! Form::label('product_price_market', 'Product Price Market:') !!}
    {!! Form::text('product_price_market', null, ['class' => 'form-control']) !!}
</div>

<!-- Product Price Sale Field -->
<div class="form-group col-sm-6">
    {!! Form::label('product_price_sale', 'Product Price Sale:') !!}
    {!! Form::text('product_price_sale', null, ['class' => 'form-control']) !!}
</div>

<!-- Product Price Promo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('product_price_promo', 'Product Price Promo:') !!}
    {!! Form::text('product_price_promo', null, ['class' => 'form-control']) !!}
</div>

<!-- Product Stock Field -->
<div class="form-group col-sm-6">
    {!! Form::label('product_stock', 'Product Stock:') !!}
    {!! Form::text('product_stock', null, ['class' => 'form-control']) !!}
</div>

<!-- Product Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('product_description', 'Product Description:') !!}
    {!! Form::textarea('product_description', null, ['class' => 'form-control']) !!}
</div>

<!-- Product Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('product_status', 'Product Status:') !!}
    {!! Form::select('product_status', ['1' => 'Publish', '2' => 'Limited', '0' => 'Draf'], null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('products.index') !!}" class="btn btn-default">Cancel</a>
</div>
