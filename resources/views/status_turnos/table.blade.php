<div class="table-responsive-sm">
    <table class="table table-striped" id="statusTurnos-table">
        <thead>
            <tr>
                <th>@lang('models/statusTurnos.fields.name')</th>
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($statusTurnos as $statusTurno)
            <tr>
                <td>{{ $statusTurno->name }}</td>
                <td>
                    {!! Form::open(['route' => ['statusTurnos.destroy', $statusTurno->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('statusTurnos.show', [$statusTurno->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('statusTurnos.edit', [$statusTurno->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => 'return confirm("'.__('crud.are_you_sure').'")']) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>