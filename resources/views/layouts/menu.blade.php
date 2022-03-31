<!-- need to remove -->
<li class="nav-header">
    UMUM
</li>
<li class="nav-item">
    <a href="{{ route('dashboard') }}" class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Utama</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('complaints.index') }}" class="nav-link {{ Request::is('complaints') ? 'active' : '' }}">
        <i class="nav-icon fas fa-table"></i>
        <p>Tiket Aduan</p>
    </a>
</li>
<li class="nav-item">
    <a href="#" class="nav-link {{ Request::is('#') ? 'active' : '' }}">
        <i class="nav-icon fas fa-print"></i>
        <p>Laporan</p>
    </a>
</li>

<li class="nav-header">
    KAWALAN ADMIN
</li>
<li class="nav-item">
    <a href="{{ route('schools.index') }}" class="nav-link {{ Request::is('schools') ? 'active' : '' }}">
        <i class="nav-icon fas fa-school"></i>
        <p>Sekolah</p>
    </a>
</li>
{{-- <li class="nav-item">
    <a href="#" class="nav-link {{ Request::is('#') ? 'active' : '' }}">
        <i class="nav-icon fas fa-tasks"></i>
        <p>Status</p>
    </a>
</li>
<li class="nav-item">
    <a href="#" class="nav-link {{ Request::is('#') ? 'active' : '' }}">
        <i class="nav-icon fas fa-users"></i>
        <p>Pengguna</p>
    </a>
</li>
<li class="nav-item">
    <a href="#" class="nav-link {{ Request::is('#') ? 'active' : '' }}">
        <i class="nav-icon fas fa-cog"></i>
        <p>Settings</p>
    </a>
</li> --}}
