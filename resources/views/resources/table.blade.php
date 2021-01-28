<div class="table-responsive-sm">
    <table class="table table-striped" id="resources-table">
        <thead>
            <tr>
                <th>@lang('models/resources.fields.enabled')</th>
        <th>@lang('models/resources.fields.establishment_id')</th>
        <th>@lang('models/resources.fields.name')</th>
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($resources as $resource)
            <tr>
                <td>{{ $resource->enabled }}</td>
            <td>{{ $resource->establishment_id }}</td>
            <td>{{ $resource->name }}</td>
                <td>
                    {!! Form::open(['route' => ['resources.destroy', $resource->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('resources.show', [$resource->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('resources.edit', [$resource->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => 'return confirm("'.__('crud.are_you_sure').'")']) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>