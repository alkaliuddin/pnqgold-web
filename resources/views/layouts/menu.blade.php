<!-- need to remove -->
<li class="nav-header">
    GENERAL
</li>
<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link {{ Request::is('home') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Dashboard</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('complaints.index') }}" class="nav-link {{ Request::is('complaints') ? 'active' : '' }}">
        <i class="nav-icon fas fa-table"></i>
        <p>Tickets</p>
    </a>
</li>
<li class="nav-item">
    <a href="#" class="nav-link {{ Request::is('#') ? 'active' : '' }}">
        <i class="nav-icon fas fa-print"></i>
        <p>Reports</p>
    </a>
</li>

<li class="nav-header">
    ADMINISTRATION
</li>
<li class="nav-item">
    <a href="{{ route('schools.index') }}" class="nav-link {{ Request::is('schools') ? 'active' : '' }}">
        <i class="nav-icon fas fa-school"></i>
        <p>Schools</p>
    </a>
</li>
<li class="nav-item">
    <a href="#" class="nav-link {{ Request::is('#') ? 'active' : '' }}">
        <i class="nav-icon fas fa-tasks"></i>
        <p>Statuses</p>
    </a>
</li>
<li class="nav-item">
    <a href="#" class="nav-link {{ Request::is('#') ? 'active' : '' }}">
        <i class="nav-icon fas fa-users"></i>
        <p>Users</p>
    </a>
</li>
<li class="nav-item">
    <a href="#" class="nav-link {{ Request::is('#') ? 'active' : '' }}">
        <i class="nav-icon fas fa-cog"></i>
        <p>Settings</p>
    </a>
</li>
