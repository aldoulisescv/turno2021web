<div class="table-responsive-sm">
    <table class="table table-striped" id="prospects-table">
        <thead>
            <tr>
                <th>@lang('models/prospects.fields.name')</th>
        <th>@lang('models/prospects.fields.owner')</th>
        <th>@lang('models/prospects.fields.image')</th>
        <th>@lang('models/prospects.fields.phone')</th>
        <th>@lang('models/prospects.fields.sent_wa')</th>
        <th>@lang('models/prospects.fields.sent_fb')</th>
        <th>@lang('models/prospects.fields.sent_ig')</th>
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($prospects as $prospect)
            <tr>
                <td>{{ $prospect->name }}</td>
            <td>{{ $prospect->owner }}</td>
            <td>{{ $prospect->image }}</td>
            <td>{{ $prospect->phone }}</td>
            <td>{{ $prospect->sent_wa }}</td>
            <td>{{ $prospect->sent_fb }}</td>
            <td>{{ $prospect->sent_ig }}</td>
                <td>
                    {!! Form::open(['route' => ['prospects.destroy', $prospect->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('prospects.show', [$prospect->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('prospects.edit', [$prospect->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => 'return confirm("'.__('crud.are_you_sure').'")']) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>