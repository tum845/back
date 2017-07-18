@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Market
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($market, ['route' => ['markets.update', $market->id], 'method' => 'patch']) !!}

                        @include('markets.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection


@section('scripts')
    <script>
        var latitude = '{{ $market->market_latitude or -7.005145300000001 }}';
        var longitude = '{{ $market->market_longitude or  110.43812539999999 }}';

        $('#us3').locationpicker({
            location: {
                latitude: latitude,
                longitude: longitude
            },
            radius: 300,
            inputBinding: {
                latitudeInput: $('#us3-lat'),
                longitudeInput: $('#us3-lon'),
                radiusInput: $('#us3-radius'),
                locationNameInput: $('#us3-address')
            },
            enableAutocomplete: true,
            onchanged: function (currentLocation, radius, isMarkerDropped) {
                // Uncomment line below to show alert on each Location Changed event
                //alert("Location changed. New location (" + currentLocation.latitude + ", " + currentLocation.longitude + ")");
            }
        });
    </script>
@endsection