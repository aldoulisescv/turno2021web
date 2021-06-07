@hasanyrole('super_admin')
<li class="nav-item {{ Request::is('users*') ? 'active' : '' }}">
    <a class="nav-link" href="{!! route('users.index') !!}">
        <i class="nav-icon icon-cursor"></i>
        <span>Users</span>
    </a>
</li>
@endhasanyrole
<li class="nav-item {{ Request::is('permissions*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('permissions.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>@lang('models/permissions.plural')</span>
    </a>
</li>
<li class="nav-item {{ Request::is('roles*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('roles.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>@lang('models/roles.plural')</span>
    </a>
</li>


<li class="nav-item {{ Request::is('categories*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('categories.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>@lang('models/categories.plural')</span>
    </a>
</li>
<li class="nav-item {{ Request::is('establishments*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('establishments.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>@lang('models/establishments.plural')</span>
    </a>
</li>
<li class="nav-item {{ Request::is('resources*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('resources.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>@lang('models/resources.plural')</span>
    </a>
</li>
<li class="nav-item {{ Request::is('sessions*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('sessions.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>@lang('models/sessions.plural')</span>
    </a>
</li>
<li class="nav-item {{ Request::is('schedules*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('schedules.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>@lang('models/schedules.plural')</span>
    </a>
</li>
<li class="nav-item {{ Request::is('relationResourceSessions*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('relationResourceSessions.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>@lang('models/relationResourceSessions.plural')</span>
    </a>
</li>
<li class="nav-item {{ Request::is('statusTurnos*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('statusTurnos.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>@lang('models/statusTurnos.plural')</span>
    </a>
</li>

<li class="nav-item {{ Request::is('prospects*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('prospects.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>@lang('models/prospects.plural')</span>
    </a>
</li>
<li class="nav-item {{ Request::is('turnos*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('turnos.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>@lang('models/turnos.plural')</span>
    </a>
</li>
<li class="nav-item {{ Request::is('blockedDates*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('blockedDates.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>@lang('models/blockedDates.plural')</span>
    </a>
</li>

<li class="nav-item {{ Request::is('helps*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('helps.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>@lang('models/helps.plural')</span>
    </a>
</li>
