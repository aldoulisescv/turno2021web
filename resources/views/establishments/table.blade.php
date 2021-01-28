<div class="table-responsive-sm">
    <table class="table table-striped" id="establishments-table">
        <thead>
            <tr>
                <th>@lang('models/establishments.fields.enabled')</th>
        <th>@lang('models/establishments.fields.category_id')</th>
        <th>@lang('models/establishments.fields.subcategory_id')</th>
        <th>@lang('models/establishments.fields.name')</th>
        <th>@lang('models/establishments.fields.logo')</th>
        <th>@lang('models/establishments.fields.email')</th>
        <th>@lang('models/establishments.fields.phone')</th>
                <th colspan="3">@lang('crud.action')</th>
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
            <td>{{ $establishment->email }}</td>
            <td>{{ $establishment->phone }}</td>
                <td>
                    {!! Form::open(['route' => ['establishments.destroy', $establishment->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('establishments.show', [$establishment->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('establishments.edit', [$establishment->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => 'return confirm("'.__('crud.are_you_sure').'")']) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>