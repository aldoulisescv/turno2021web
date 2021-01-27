<div class="table-responsive-sm">
    <table class="table table-striped" id="turnos-table">
        <thead>
            <tr>
                <th>User Id</th>
        <th>Establishment Id</th>
        <th>Resource Id</th>
        <th>Session Id</th>
        <th>Status Turno Id</th>
        <th>Date</th>
        <th>Start Time</th>
        <th>End Time</th>
                <th colspan="3">Action</th>
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
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>