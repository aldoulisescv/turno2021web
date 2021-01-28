<div class="table-responsive-sm">
    <table class="table table-striped" id="schedules-table">
        <thead>
            <tr>
                <th>@lang('models/schedules.fields.enabled')</th>
        <th>@lang('models/schedules.fields.resource_id')</th>
        <th>@lang('models/schedules.fields.start_hour')</th>
        <th>@lang('models/schedules.fields.end_hour')</th>
        <th>@lang('models/schedules.fields.sunday')</th>
        <th>@lang('models/schedules.fields.monday')</th>
        <th>@lang('models/schedules.fields.tuesday')</th>
        <th>@lang('models/schedules.fields.wednesday')</th>
        <th>@lang('models/schedules.fields.thrusday')</th>
        <th>@lang('models/schedules.fields.friday')</th>
        <th>@lang('models/schedules.fields.saturday')</th>
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($schedules as $schedule)
            <tr>
                <td>{{ $schedule->enabled }}</td>
            <td>{{ $schedule->resource_id }}</td>
            <td>{{ $schedule->start_hour }}</td>
            <td>{{ $schedule->end_hour }}</td>
            <td>{{ $schedule->sunday }}</td>
            <td>{{ $schedule->monday }}</td>
            <td>{{ $schedule->tuesday }}</td>
            <td>{{ $schedule->wednesday }}</td>
            <td>{{ $schedule->thrusday }}</td>
            <td>{{ $schedule->friday }}</td>
            <td>{{ $schedule->saturday }}</td>
                <td>
                    {!! Form::open(['route' => ['schedules.destroy', $schedule->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('schedules.show', [$schedule->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('schedules.edit', [$schedule->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => 'return confirm("'.__('crud.are_you_sure').'")']) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>