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
                    {!! Form::open(['route' => 'markets.store']) !!}

                        @include('markets.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script type="text/javascript">
        document.getElementById("upload_widget_opener").addEventListener("click", function() {
            cloudinary.openUploadWidget({ cloud_name: 'tumbasincloud', upload_preset: 'a5vxnzbp'},
                    function(error, result) { console.log(error, result) });
        }, false);
    </script>

    <script type="text/javascript">
        document.getElementById("upload_widget_opener").addEventListener("click", function() {
            cloudinary.openUploadWidget({
                cloud_name: 'tumbasincloud',
                upload_preset: 'w7sosnfe',
                cropping: 'server',
                folder: 'markets'
            },function(error, result) {
                        $('#market_icon').val(result[0].secure_url);
            });
        }, false);
    </script>

    <script>
        $('#us3').locationpicker({
            location: {
                latitude: -7.005145300000001,
                longitude: 110.43812539999999
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
