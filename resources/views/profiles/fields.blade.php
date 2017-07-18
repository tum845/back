<!-- User Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_id', 'User Id:') !!}
    {!! Form::select('user_id', \App\User::pluck('name', 'id')->all() , null, ['class' => 'form-control']) !!}
</div>


<!-- Profile Genre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('profile_genre', 'Profile Genre:') !!}
    <label class="radio-inline">
        {!! Form::radio('profile_genre', "f", null) !!} Wanita
    </label>

    <label class="radio-inline">
        {!! Form::radio('profile_genre', "m", null) !!} Laki laki
    </label>

</div>

<!-- Profile Province Field -->
<div class="form-group col-sm-6">
    {!! Form::label('profile_province', 'Profile Province:') !!}
    {!! Form::text('profile_province', null, ['class' => 'form-control']) !!}
</div>

<!-- Profile Regency Field -->
<div class="form-group col-sm-6">
    {!! Form::label('profile_regency', 'Profile Regency:') !!}
    {!! Form::text('profile_regency', null, ['class' => 'form-control']) !!}
</div>

<!-- Profile District Field -->
<div class="form-group col-sm-6">
    {!! Form::label('profile_district', 'Profile District:') !!}
    {!! Form::text('profile_district', null, ['class' => 'form-control']) !!}
</div>

<!-- Profile Address Field -->
    <div class="form-group col-sm-6">
        <div class="form-horizontal">
            <div class="form-group">
                <div class="col-sm-12">
                    {!! Form::label('profile_address', 'Address:') !!}
                    {!! Form::text('profile_address', null, ['class' => 'form-control', 'id' => 'us3-address']) !!}

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
                    {!! Form::label('profile_latitude', 'Latitude:') !!}
                    {!! Form::text('profile_latitude', null, ['class' => 'form-control', 'id' => 'us3-lat']) !!}
                </div>
                <div class="col-sm-6">
                    {!! Form::label('profile_longitude', 'Longitude:') !!}
                    {!! Form::text('profile_longitude', null, ['class' => 'form-control', 'id' => 'us3-lon']) !!}
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>

<!-- Profile Birthday Field -->
<div class="form-group col-sm-6">
    {!! Form::label('profile_birthday', 'Profile Birthday:') !!}
    {!! Form::date('profile_birthday', null, ['class' => 'form-control']) !!}
</div>

<!-- Profile Job Field -->
<div class="form-group col-sm-6">
    {!! Form::label('profile_job', 'Profile Job:') !!}
    {!! Form::text('profile_job', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('profiles.index') !!}" class="btn btn-default">Cancel</a>
</div>
