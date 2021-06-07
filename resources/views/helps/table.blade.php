<div class="table-responsive-sm">
    <table class="table table-striped" id="helps-table">
        <thead>
            <tr>
                <th>@lang('models/helps.fields.status_help_id')</th>
        <th>@lang('models/helps.fields.user_id')</th>
        <th>@lang('models/helps.fields.help_type')</th>
        <th>@lang('models/helps.fields.description')</th>
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($helps as $help)
            <tr>
                <td>{{ $help->status_help_id }}</td>
            <td>{{ $help->user_id }}</td>
            <td>{{ $help->help_type }}</td>
            <td>{{ $help->description }}</td>
                <td>
                    {!! Form::open(['route' => ['helps.destroy', $help->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('helps.show', [$help->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('helps.edit', [$help->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => 'return confirm("'.__('crud.are_you_sure').'")']) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>