@extends('layouts.app')

@section('content')

    <section class="content-header">
        <h1 class="pull-left">Profiles</h1>

    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-8">
                <div class="box box-solid box-warning">
                    <div class="box-header"> hahaha</div>
                    <div class="box-body">
                        <div class="col-md-8 col-sm-6 col-xs-12 personal-info">
                            Disini data profile user
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <a href="#">
                    <div class="info-box">
                            <span class="info-box-icon bg-green">
                                <i class="fa fa-user"></i>
                            </span>
                        <div class="info-box-content">
                            <span class="info-box-text">Data User</span>
                            <span class="info-box-number">Updated at : 7836738</span>
                        </div>
                    </div>
                </a>


                <a href="{{route('arto.detail.account')}}">
                    <div class="info-box">
                            <span class="info-box-icon bg-aqua">
                                <i class="fa fa-money"></i>
                            </span>
                        <div class="info-box-content">
                            <span class="info-box-text">Saldo ARTO</span>
                            <span class="info-box-number">Rp.{{$total_balance->total_balance}}</span>
                        </div>
                    </div>
                </a>

                <a href="#">
                    <div class="info-box">
                            <span class="info-box-icon bg-red">
                                <i class="fa fa-google-plus"></i>
                            </span>
                        <div class="info-box-content">
                            <span class="info-box-text">JUDUL</span>
                            <span class="info-box-number">1000</span>
                        </div>
                    </div>
                </a>


            </div>
        </div>


    </div>

@endsection