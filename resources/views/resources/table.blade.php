<div class="table-responsive-sm">
    <table class="table table-striped" id="resources-table">
        <thead>
            <tr>
                <th>Enabled</th>
        <th>Establishment Id</th>
        <th>Name</th>
        <th>Selectable</th>
        <th>Order Alpha</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($resources as $resource)
            <tr>
                <td>{{ $resource->enabled }}</td>
            <td>{{ $resource->establishment_id }}</td>
            <td>{{ $resource->name }}</td>
            <td>{{ $resource->selectable }}</td>
            <td>{{ $resource->order_alpha }}</td>
                <td>
                    {!! Form::open(['route' => ['resources.destroy', $resource->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('resources.show', [$resource->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('resources.edit', [$resource->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>