<!-- Market Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('market_name', 'Market Name:') !!}
    {!! Form::text('market_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Market Icon Field -->
<div class="form-group col-sm-6">
    {!! Form::label('market_icon', 'Market Icon:') !!}
    {!! Form::text('market_icon', null, ['class' => 'form-control']) !!}
</div>

<a href="#" id="upload_widget_opener">Upload multiple images</a>
<div class="clearfix"></div>

<!-- Market Country Field -->
<div class="form-group col-sm-6">
    {!! Form::label('market_country', 'Market Country:') !!}
    {!! Form::text('market_country', null, ['class' => 'form-control']) !!}
</div>

<!-- Market Province Field -->
<div class="form-group col-sm-6">
    {!! Form::label('market_province', 'Market Province:') !!}
    {!! Form::text('market_province', null, ['class' => 'form-control']) !!}
</div>

<!-- Market Regency Field -->
<div class="form-group col-sm-6">
    {!! Form::label('market_regency', 'Market Regency:') !!}
    {!! Form::text('market_regency', null, ['class' => 'form-control']) !!}
</div>

<!-- Market District Field -->
<div class="form-group col-sm-6">
    {!! Form::label('market_district', 'Market District:') !!}
    {!! Form::text('market_district', null, ['class' => 'form-control']) !!}
</div>


<div class="form-group col-sm-6">
    <div class="form-horizontal">
        <div class="form-group">
            <div class="col-sm-12">
                {!! Form::label('market_location', 'Location:') !!}
                {!! Form::text('market_location', null, ['class' => 'form-control', 'id' => 'us3-address']) !!}

            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">Radius:</label>

            <div class="col-sm-5">
                <input type="text" class="form-control" id="us3-radius" />
            </div>
        </div>
        <div id="us3" style=" height: 200px;"></div>
        <div class="clearfix">&nbsp;</div>
        <div class="m-t-small">
            <div class="col-sm-6">
                {!! Form::label('market_latitude', 'Latitude:') !!}
                {!! Form::text('market_latitude', null, ['class' => 'form-control', 'id' => 'us3-lat']) !!}
            </div>
            <div class="col-sm-6">
                {!! Form::label('market_longitude', 'Market Longitude:') !!}
                {!! Form::text('market_longitude', null, ['class' => 'form-control', 'id' => 'us3-lon']) !!}
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('markets.index') !!}" class="btn btn-default">Cancel</a>
</div>
