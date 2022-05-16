<!-- need to remove -->
<li class="nav-item">
    <a href="{{ route('welcome') }}" class="nav-link {{ Request::is('welcome') ? 'active' : '' }}" onclick="return confirm('Kembali ke Laman Utama?')">
        <i class="nav-icon fas fa-globe"></i>
        <p>Laman Utama</p>
    </a>
</li>
<li class="nav-header">
    UMUM
</li>
<li class="nav-item">
    <a href="{{ route('dashboard') }}" class="nav-link {{ Request::is('helpdesk/dashboard') ? 'active' : '' }}">
        {{-- <i class="nav-icon fas fa-home"></i> --}}
        <i class="nav-icon fas fa-tachometer-alt"></i>
        <p>Utama</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('complaints.index') }}" class="nav-link {{ Request::is('helpdesk/complaints') ? 'active' : '' }}">
        <i class="nav-icon fas fa-envelope"></i>
        <p>Tiket Aduan</p>
    </a>
</li>
{{-- <li class="nav-item">
    <a href="#" class="nav-link {{ Request::is('helpdesk/reports') ? 'active' : '' }}">
        <i class="nav-icon fas fa-print"></i>
        <p>Laporan</p>
    </a>
</li> --}}

<li class="nav-header">
    KAWALAN ADMIN
</li>
<li class="nav-item">
    <a href="{{ route('schools.index') }}" class="nav-link {{ Request::is('helpdesk/schools') ? 'active' : '' }}">
        <i class="nav-icon fas fa-school"></i>
        <p>Sekolah</p>
    </a>
</li>
{{-- <li class="nav-item">
    <a href="#" class="nav-link {{ Request::is('helpdesk/assets') ? 'active' : '' }}">
        <i class="nav-icon fas fa-funnel-dollar"></i>
        <p>Aset</p>
    </a>
</li> --}}
