<table class="table table-responsive" id="profiles-table">
    <thead>
        <th>User Id</th>
        <th>Profile Province</th>
        <th>Profile Regency</th>
        <th>Profile District</th>
        <th>Profile Address</th>
        <th>Profile Birthday</th>
        <th>Profile Genre</th>
        <th>Profile Job</th>
        <th>Profile Latitude</th>
        <th>Profile Longitude</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($profiles as $profile)
        <tr>
            <td>{!! $profile->user_id !!}</td>
            <td>{!! $profile->profile_province !!}</td>
            <td>{!! $profile->profile_regency !!}</td>
            <td>{!! $profile->profile_district !!}</td>
            <td>{!! $profile->profile_address !!}</td>
            <td>{!! $profile->profile_birthday !!}</td>
            <td>{!! $profile->profile_genre !!}</td>
            <td>{!! $profile->profile_job !!}</td>
            <td>{!! $profile->profile_latitude !!}</td>
            <td>{!! $profile->profile_longitude !!}</td>
            <td>
                {!! Form::open(['route' => ['profiles.destroy', $profile->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('profiles.show', [$profile->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('profiles.edit', [$profile->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>