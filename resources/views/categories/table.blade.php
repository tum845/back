<table class="table table-responsive" id="categories-table">
    <thead>
        <th>Name</th>
        <th>Icon</th>
        <th>Color</th>
        <th>Brief</th>
        <th>Priority</th>
        <th>Publish</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($categories as $category)
        <tr>
            <td>{!! $category->category_name !!}</td>
            <td>{!! $category->category_icon !!}</td>
            <td>{!! $category->category_color !!}</td>
            <td>{!! $category->category_brief !!}</td>
            <td>{!! $category->category_priority !!}</td>
            <td>{!! $category->category_publish !!}</td>
            <td>
                {!! Form::open(['route' => ['categories.destroy', $category->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('categories.show', [$category->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('categories.edit', [$category->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>