<div class="table-responsive-sm">
    <table class="table table-striped" id="establishments-table">
        <thead>
            <tr>
                <th>Enabled</th>
        <th>Category Id</th>
        <th>Subcategory Id</th>
        <th>Name</th>
        <th>Logo</th>
        <th>Stepping</th>
        <th>Street</th>
        <th>Num Ext</th>
        <th>Num Int</th>
        <th>Postal Code</th>
        <th>Zone</th>
        <th>City</th>
        <th>State</th>
        <th>Country</th>
        <th>Latitude</th>
        <th>Longitude</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Holidays Extra</th>
        <th>Holidays Official</th>
        <th>Help Tooltip</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($establishments as $establishment)
            <tr>
                <td>{{ $establishment->enabled }}</td>
            <td>{{ $establishment->category_id }}</td>
            <td>{{ $establishment->subcategory_id }}</td>
            <td>{{ $establishment->name }}</td>
            <td>{{ $establishment->logo }}</td>
            <td>{{ $establishment->stepping }}</td>
            <td>{{ $establishment->street }}</td>
            <td>{{ $establishment->num_ext }}</td>
            <td>{{ $establishment->num_int }}</td>
            <td>{{ $establishment->postal_code }}</td>
            <td>{{ $establishment->zone }}</td>
            <td>{{ $establishment->city }}</td>
            <td>{{ $establishment->state }}</td>
            <td>{{ $establishment->country }}</td>
            <td>{{ $establishment->latitude }}</td>
            <td>{{ $establishment->longitude }}</td>
            <td>{{ $establishment->email }}</td>
            <td>{{ $establishment->phone }}</td>
            <td>{{ $establishment->holidays_extra }}</td>
            <td>{{ $establishment->holidays_official }}</td>
            <td>{{ $establishment->help_tooltip }}</td>
                <td>
                    {!! Form::open(['route' => ['establishments.destroy', $establishment->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('establishments.show', [$establishment->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('establishments.edit', [$establishment->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>