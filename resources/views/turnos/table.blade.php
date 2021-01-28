<div class="table-responsive-sm">
    <table class="table table-striped" id="turnos-table">
        <thead>
            <tr>
                <th>@lang('models/turnos.fields.user_id')</th>
        <th>@lang('models/turnos.fields.establishment_id')</th>
        <th>@lang('models/turnos.fields.resource_id')</th>
        <th>@lang('models/turnos.fields.session_id')</th>
        <th>@lang('models/turnos.fields.status_turno_id')</th>
        <th>@lang('models/turnos.fields.date')</th>
        <th>@lang('models/turnos.fields.start_time')</th>
        <th>@lang('models/turnos.fields.end_time')</th>
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($turnos as $turno)
            <tr>
                <td>{{ $turno->user_id }}</td>
            <td>{{ $turno->establishment_id }}</td>
            <td>{{ $turno->resource_id }}</td>
            <td>{{ $turno->session_id }}</td>
            <td>{{ $turno->status_turno_id }}</td>
            <td>{{ $turno->date }}</td>
            <td>{{ $turno->start_time }}</td>
            <td>{{ $turno->end_time }}</td>
                <td>
                    {!! Form::open(['route' => ['turnos.destroy', $turno->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('turnos.show', [$turno->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('turnos.edit', [$turno->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => 'return confirm("'.__('crud.are_you_sure').'")']) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>