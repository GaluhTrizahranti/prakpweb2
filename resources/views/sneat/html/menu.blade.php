
<li class="nav-item">
    <a href="{{ url('home') }}" class="nav-link">
        <i class="fas fa-search"></i>
        <p>
            Beranda
        </p>
    </a>
</li>

@if (auth()->user()->hak_akses == "Admin")
    <li class="nav-item">
    <a href="{{ url('tambah') }}" class="nav-link">
        <i class="fas fa-search"></i>
        <p>
            Tambah Data
        </p>
    </a>
</li>
@endif

@if (auth()->user()->hak_akses == "Admin")
    <li class="nav-item">
    <a href="{{ url('pesan') }}" class="nav-link">
        <i class="fas fa-search"></i>
        <p>
            Pesan
        </p>
    </a>
</li>
@endif

{{-- <li class="nav-item">
    <a href="{{ url('manage') }}" class="nav-link">
        <i class="fas fa-tasks"></i>
        <p>
            Manage Data
        </p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ url('akun') }}" class="nav-link">
        <i class="fas fa-tasks"></i>
        <p>
            Tambah Akun
        </p>
    </a>
</li>

@elseif($user->level == 2)
<li class="nav-header">MENU</li>
<li class="nav-item">
    <a href="{{ url('daftar') }}" class="nav-link">
        <i class="fas fa-tasks"></i>
        <p>
            Daftar KTM
        </p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ url('ubah') }}" class="nav-link">
        <i class="fas fa-tasks"></i>
        <p>
            Ubah Data
        </p>
    </a>
</li> --}}
