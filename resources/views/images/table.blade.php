<table class="table table-responsive" id="images-table">
    <thead>
        <th>Image Name</th>
        <th>Image Description</th>
        <th>Image File</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($images as $image)
        <tr>
            <td>{!! $image->image_name !!}</td>
            <td>{!! $image->image_description !!}</td>
            <td>{!! $image->image_file !!}</td>
            <td>
                {!! Form::open(['route' => ['images.destroy', $image->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('images.show', [$image->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('images.edit', [$image->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>