@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
           Copy Product {{ $product->product_name }}
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {!! Form::model($product, ['route' => ['products.store'], 'method' => 'post']) !!}

                    @include('products.fields_copy')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection