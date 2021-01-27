<div class="table-responsive-sm">
    <table class="table table-striped" id="sessions-table">
        <thead>
            <tr>
                <th>Enabled</th>
        <th>Establishment Id</th>
        <th>Name</th>
        <th>Duration</th>
        <th>Cost</th>
        <th>Max Days Schedule</th>
        <th>Max Hours Schedule</th>
        <th>Max Minutes Schedule</th>
        <th>Min Days Schedule</th>
        <th>Min Hours Schedule</th>
        <th>Min Minutes Schedule</th>
        <th>Standby Time</th>
        <th>Time Btwn Session</th>
        <th>End Date</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($sessions as $session)
            <tr>
                <td>{{ $session->enabled }}</td>
            <td>{{ $session->establishment_id }}</td>
            <td>{{ $session->name }}</td>
            <td>{{ $session->duration }}</td>
            <td>{{ $session->cost }}</td>
            <td>{{ $session->max_days_schedule }}</td>
            <td>{{ $session->max_hours_schedule }}</td>
            <td>{{ $session->max_minutes_schedule }}</td>
            <td>{{ $session->min_days_schedule }}</td>
            <td>{{ $session->min_hours_schedule }}</td>
            <td>{{ $session->min_minutes_schedule }}</td>
            <td>{{ $session->standby_time }}</td>
            <td>{{ $session->time_btwn_session }}</td>
            <td>{{ $session->end_date }}</td>
                <td>
                    {!! Form::open(['route' => ['sessions.destroy', $session->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('sessions.show', [$session->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('sessions.edit', [$session->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>