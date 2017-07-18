<table class="table table-responsive" id="markets-table">
    <thead>
        <th>Name</th>
        <th>Icon</th>
        <th>Country</th>
        <th>Province</th>
        <th>Regency</th>
        <th>District</th>
        <th>Latitude</th>
        <th>Longitude</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($markets as $market)
        <tr>
            <td>{!! $market->market_name !!}</td>
            <td>{!! $market->market_icon !!}</td>
            <td>{!! $market->market_country !!}</td>
            <td>{!! $market->market_province !!}</td>
            <td>{!! $market->market_regency !!}</td>
            <td>{!! $market->market_district !!}</td>
            <td>{!! $market->market_latitude !!}</td>
            <td>{!! $market->market_longitude !!}</td>
            <td>
                {!! Form::open(['route' => ['markets.destroy', $market->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('markets.show', [$market->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('markets.edit', [$market->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>