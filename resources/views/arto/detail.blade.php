@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Transaction Recap
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-4">
                        <a href="{{ route('arto.user.addfund') }}" class="btn bg-orange btn-app margin">
                             <i class="fa fa-money"></i>
                            Add Fund Arto
                        </a>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="box-body table-responsive no-padding">
                        <table class="table table-hover">
                            <tbody>
                            <tr>
                                <th> Date </th>
                                <th> Status</th>
                                <th> Type </th>
                                <th> Amount</th>
                            </tr>
                            @foreach($accounts as $account )
                                <tr>
                                    <td>{{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s',$account->transaction_date)->format('j F Y, g:i a') }}</td>
                                    <td>{{ ($account->transaction_status==1) ? "Active" : "Pendding" }}</td>
                                    <td>{{ ($account->account_type==1) ? "Top Up" : "BUY" }}</td>
                                    <td>{{ $account->amount }}</td>
                                </tr>
                            @endforeach
                            <tr>
                                <th>Total</th>
                                <td></td>
                                <td></td>
                                <td>{{$total_balance->total_balance}}</td>
                            </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


        </div>
    </div>


@endsection
