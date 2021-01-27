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
        <span>Permissions</span>
    </a>
</li>
<li class="nav-item {{ Request::is('roles*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('roles.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Roles</span>
    </a>
</li>












<li class="nav-item {{ Request::is('categories*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('categories.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Categories</span>
    </a>
</li>




<li class="nav-item {{ Request::is('establishments*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('establishments.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Establishments</span>
    </a>
</li>
<li class="nav-item {{ Request::is('resources*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('resources.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Resources</span>
    </a>
</li>












<li class="nav-item {{ Request::is('sessions*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('sessions.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Sessions</span>
    </a>
</li>
